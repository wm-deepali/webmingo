<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CandidateReason;
use App\Models\CandidateStage;
use App\Models\Career;
use App\Models\CareerApplication;
use App\Models\CareerApplicationLog;
use App\Services\Otp\OtpService;
use App\Services\Recruitment\DuplicateChecker;
use App\Support\Recruitment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CareerApplicationController extends Controller
{
    /* ───────────────────────── List + filters + export ───────────────────────── */

    public function index(Request $request)
    {
        $applications = $this->filtered($request)
            ->with(['stage', 'reason', 'career'])
            ->latest()
            ->paginate(20)
            ->withQueryString();

        $counts = CareerApplication::selectRaw('stage_id, count(*) as total')
            ->groupBy('stage_id')
            ->pluck('total', 'stage_id');

        return view('admin.career-applications.index', [
            'applications' => $applications,
            'counts' => $counts,
            'total' => $counts->sum(),
            'stages' => CandidateStage::ordered()->get(),
            'reasons' => CandidateReason::ordered()->get(),
            'careers' => Career::orderBy('title')->get(['id', 'title']),
        ]);
    }

    private function filtered(Request $r): Builder
    {
        $q = CareerApplication::query();

        if ($r->filled('q')) {
            $s = trim($r->q);
            $q->where(function ($w) use ($s) {
                $w->where('name', 'like', "%{$s}%")
                    ->orWhere('email', 'like', "%{$s}%")
                    ->orWhere('phone', 'like', "%{$s}%")
                    ->orWhere('position', 'like', "%{$s}%")
                    ->orWhere('location', 'like', "%{$s}%")
                    ->orWhere('recruiter_remarks', 'like', "%{$s}%");
            });
        }

        foreach (['stage_id', 'reason_id', 'career_id', 'apply_type', 'source', 'work_mode',
                     'notice_period', 'candidate_interested', 'experience'] as $field) {
            if ($r->filled($field)) {
                $q->where($field, $r->input($field));
            }
        }

        if ($r->filled('bucket')) {
            $q->whereHas('stage', fn($s) => $s->where('bucket', $r->bucket));
        }

        if ($r->filled('mobile_verified')) {
            $q->where('mobile_verified', $r->mobile_verified === '1');
        }

        if ($r->boolean('dup')) {
            $q->whereNotNull('duplicate_of_id');
        }

        $ranges = [
            ['exp_min', 'total_experience', '>='], ['exp_max', 'total_experience', '<='],
            ['ctc_min', 'expected_ctc', '>='], ['ctc_max', 'expected_ctc', '<='],
            ['cur_min', 'current_ctc', '>='], ['cur_max', 'current_ctc', '<='],
        ];
        foreach ($ranges as [$input, $column, $op]) {
            if ($r->filled($input) && is_numeric($r->input($input))) {
                $q->where($column, $op, $r->input($input));
            }
        }

        if ($r->filled('join_by')) {
            $q->whereDate('available_from', '<=', $r->join_by);
        }
        if ($r->filled('from')) {
            $q->whereDate('created_at', '>=', $r->from);
        }
        if ($r->filled('to')) {
            $q->whereDate('created_at', '<=', $r->to);
        }

        return $q;
    }

    /** CSV report using the same filters as the list. */
    public function export(Request $request)
    {
        $query = $this->filtered($request)->with(['stage', 'reason', 'career'])->latest();

        $headers = ['ID', 'Name', 'Email', 'Phone', 'Mobile Verified', 'Opening', 'Type', 'Source', 'Stage', 'Reason',
            'Reason Remarks', 'Location', 'Work Mode', 'Total Exp (Yrs)', 'Relevant Exp (Yrs)', 'Notice Period',
            'Available From', 'Current CTC (LPA)', 'Expected CTC (LPA)', 'Offered CTC (LPA)', 'Interested',
            'Recruiter Remarks', 'Duplicate Of', 'Received'];

        return response()->streamDownload(function () use ($query, $headers) {
            $out = fopen('php://output', 'w');
            fwrite($out, "\xEF\xBB\xBF"); // UTF-8 BOM so Excel opens it correctly
            fputcsv($out, $headers);

            $query->chunk(200, function ($rows) use ($out) {
                foreach ($rows as $a) {
                    fputcsv($out, [
                        $a->id, $a->name, $a->email, $a->phone, $a->mobile_verified ? 'Yes' : 'No',
                        $a->position, $a->apply_type, Recruitment::SOURCES[$a->source] ?? $a->source,
                        $a->stage?->title, $a->reason?->title, $a->reason_remarks, $a->location, $a->work_mode,
                        $a->total_experience, $a->relevant_experience, $a->notice_period,
                        $a->available_from?->format('d M Y'), $a->current_ctc, $a->expected_ctc, $a->offered_ctc,
                        Recruitment::INTERESTED[$a->candidate_interested] ?? $a->candidate_interested,
                        $a->recruiter_remarks, $a->duplicate_of_id, $a->created_at->format('d M Y h:i A'),
                    ]);
                }
            });

            fclose($out);
        }, 'candidates-' . now()->format('Y-m-d-His') . '.csv', ['Content-Type' => 'text/csv']);
    }

    /* ───────────────────────── Create (offline CV) / Edit ───────────────────────── */

    public function create()
    {
        return view('admin.career-applications.form', ['application' => new CareerApplication()] + $this->formData());
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules(null));

        [$careerId, $position, $posErr] = $this->resolvePosition($data);
        if ($posErr) {
            return back()->withInput()->withErrors($posErr);
        }
        if ($err = $this->stageError($data)) {
            return back()->withInput()->withErrors($err);
        }

        $phone = OtpService::normaliseMobile($data['phone']);
        if (!$phone) {
            return back()->withInput()->withErrors(['phone' => 'Please enter a valid 10-digit Indian mobile number.']);
        }

        $file = $request->file('resume');
        $hash = hash_file('sha256', $file->getRealPath());

        if ($dup = DuplicateChecker::find($data['email'], $phone, $hash)) {
            return $this->duplicateResponse($dup);
        }

        $application = CareerApplication::create($this->attributes($data, $phone, $careerId, $position) + [
                'resume_path' => $file->store('career-resumes'), // private disk
                'resume_hash' => $hash,
                'created_by' => auth()->id(),
                'stage_changed_at' => now(),
                'ip_address' => null,
            ]);

        $this->log($application, 'created', null, $application->stage?->title,
            'Added manually (' . (Recruitment::SOURCES[$application->source] ?? $application->source) . ')');

        return redirect()->route('admin.career-applications.show', $application)->with('success', 'Candidate added.');
    }

    public function edit(CareerApplication $application)
    {
        return view('admin.career-applications.form', compact('application') + $this->formData());
    }

    public function update(Request $request, CareerApplication $application)
    {
        $data = $request->validate($this->rules($application));

        [$careerId, $position, $posErr] = $this->resolvePosition($data);
        if ($posErr) {
            return back()->withInput()->withErrors($posErr);
        }
        if ($err = $this->stageError($data)) {
            return back()->withInput()->withErrors($err);
        }

        $phone = OtpService::normaliseMobile($data['phone']);
        if (!$phone) {
            return back()->withInput()->withErrors(['phone' => 'Please enter a valid 10-digit Indian mobile number.']);
        }

        $attrs = $this->attributes($data, $phone, $careerId, $position);
        $file = $request->file('resume');
        $hash = $file ? hash_file('sha256', $file->getRealPath()) : null;

        // Duplicate check only when the identity of the profile actually changes
        $identityChanged = $file || $application->email !== $data['email'] || $application->phone !== $phone;
        if ($identityChanged && ($dup = DuplicateChecker::find($data['email'], $phone, $hash, $application->id))) {
            return $this->duplicateResponse($dup);
        }

        if ($file) {
            if ($application->resume_path && Storage::exists($application->resume_path)) {
                Storage::delete($application->resume_path);
            }
            $attrs['resume_path'] = $file->store('career-resumes');
            $attrs['resume_hash'] = $hash;
        }

        $oldStage = $application->stage?->title;
        $oldPosition = $application->position;
        $stageChanged = (int) $application->stage_id !== (int) $data['stage_id'];
        if ($stageChanged) {
            $attrs['stage_changed_at'] = now();
        }

        $application->update($attrs);
        $application->load('stage', 'reason');

        if ($stageChanged) {
            $note = trim(($application->reason?->title ?? '') . ' ' . ($data['reason_remarks'] ?? ''));
            $this->log($application, 'stage', $oldStage, $application->stage?->title, $note ?: null);
        }
        if ($oldPosition !== $position) {
            $this->log($application, 'shift', $oldPosition, $position);
        }
        $this->log($application, 'updated', null, null, 'Details edited');

        return redirect()->route('admin.career-applications.show', $application)->with('success', 'Candidate updated.');
    }

    /* ───────────────────────── Show + quick actions ───────────────────────── */

    public function show(CareerApplication $application)
    {
        $application->load(['stage', 'reason', 'career', 'duplicateOf', 'duplicates', 'logs']);

        return view('admin.career-applications.show', compact('application') + $this->formData());
    }

    /** Quick stage change from the view page. */
    public function stage(Request $request, CareerApplication $application)
    {
        $data = $request->validate([
            'stage_id' => 'required|exists:candidate_stages,id',
            'reason_id' => 'nullable|exists:candidate_reasons,id',
            'reason_remarks' => 'nullable|string|max:2000',
        ]);

        if ($err = $this->stageError($data)) {
            return back()->withInput()->withErrors($err);
        }

        $old = $application->stage?->title;

        $application->update([
            'stage_id' => $data['stage_id'],
            'reason_id' => $data['reason_id'] ?? null,
            'reason_remarks' => $data['reason_remarks'] ?? null,
            'stage_changed_at' => now(),
        ]);
        $application->load('stage', 'reason');

        $note = trim(($application->reason?->title ?? '') . ' ' . ($data['reason_remarks'] ?? ''));
        $this->log($application, 'stage', $old, $application->stage?->title, $note ?: null);

        return back()->with('success', 'Stage updated.');
    }

    /** Move the candidate's profile to another opening (e.g. Laravel -> MERN). */
    public function shift(Request $request, CareerApplication $application)
    {
        $data = $request->validate([
            'career_id' => 'nullable|integer|exists:careers,id',
            'position_other' => 'nullable|string|max:255',
        ]);

        [$careerId, $position, $err] = $this->resolvePosition($data);
        if ($err) {
            return back()->withErrors($err);
        }

        $old = $application->position;
        $application->update(['career_id' => $careerId, 'position' => $position]);
        $this->log($application, 'shift', $old, $position, 'Profile shifted to another opening');

        return back()->with('success', 'Candidate shifted to "' . $position . '".');
    }

    /** Resumes live on the private disk, so they are only served through this admin-only route. */
    public function resume(CareerApplication $application)
    {
        abort_unless($application->resume_path && Storage::exists($application->resume_path), 404);

        $ext = pathinfo($application->resume_path, PATHINFO_EXTENSION);
        $name = Str::slug($application->name . '-' . $application->position) . '.' . $ext;

        return Storage::download($application->resume_path, $name);
    }

    public function destroy(CareerApplication $application)
    {
        // Flagged duplicates that pointed to this profile become standalone again
        CareerApplication::where('duplicate_of_id', $application->id)->update(['duplicate_of_id' => null]);

        if ($application->resume_path && Storage::exists($application->resume_path)) {
            Storage::delete($application->resume_path);
        }

        $application->delete();

        return redirect()
            ->route('admin.career-applications.index')
            ->with('success', 'Application deleted.');
    }

    /* ───────────────────────── Helpers ───────────────────────── */

    private function formData(): array
    {
        return [
            'stages' => CandidateStage::active()->ordered()->get(),
            'reasons' => CandidateReason::active()->ordered()->get(),
            'careers' => Career::orderBy('title')->get(['id', 'title']),
        ];
    }

    private function rules(?CareerApplication $app): array
    {
        $decimal = 'nullable|numeric|min:0|max:9999';

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'location' => 'nullable|string|max:255',
            'apply_type' => 'required|in:Job,Internship',
            'career_id' => 'nullable|integer|exists:careers,id',
            'position_other' => 'nullable|string|max:255',
            'source' => ['required', Rule::in(array_keys(Recruitment::SOURCES))],
            'resume' => ($app ? 'nullable' : 'required') . '|file|mimes:pdf,doc,docx|max:5120',
            'portfolio' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'cover_letter' => 'nullable|string|max:5000',
            'stage_id' => 'required|exists:candidate_stages,id',
            'reason_id' => 'nullable|exists:candidate_reasons,id',
            'reason_remarks' => 'nullable|string|max:2000',
            'recruiter_remarks' => 'nullable|string|max:5000',
            'work_mode' => ['nullable', Rule::in(Recruitment::WORK_MODES)],
            'available_from' => 'nullable|date',
            'notice_period' => ['nullable', Rule::in(array_keys(Recruitment::NOTICE_PERIODS))],
            'total_experience' => 'nullable|numeric|min:0|max:60',
            'relevant_experience' => 'nullable|numeric|min:0|max:60',
            'current_ctc' => $decimal,
            'expected_ctc' => $decimal,
            'offered_ctc' => $decimal,
            'candidate_interested' => ['required', Rule::in(array_keys(Recruitment::INTERESTED))],
        ];
    }

    private function attributes(array $data, string $phone, ?int $careerId, string $position): array
    {
        $attrs = Arr::only($data, [
            'name', 'location', 'apply_type', 'source', 'portfolio', 'linkedin', 'cover_letter', 'stage_id',
            'reason_id', 'reason_remarks', 'recruiter_remarks', 'work_mode', 'available_from', 'notice_period',
            'total_experience', 'relevant_experience', 'current_ctc', 'expected_ctc', 'offered_ctc',
            'candidate_interested',
        ]);

        $attrs['email'] = strtolower(trim($data['email']));
        $attrs['phone'] = $phone;
        $attrs['career_id'] = $careerId;
        $attrs['position'] = $position;

        // keep the old experience bucket (used by filters / public form) in sync
        if ($bucket = Recruitment::experienceBucket(isset($data['total_experience']) ? (float) $data['total_experience'] : null)) {
            $attrs['experience'] = $bucket;
        }

        return $attrs;
    }

    /** Opening picked from the list, or a free-text position ("Other"). */
    private function resolvePosition(array $data): array
    {
        if (!empty($data['career_id'])) {
            $career = Career::find($data['career_id']);

            return [$career->id, $career->title, null];
        }

        if (!empty($data['position_other'])) {
            return [null, trim($data['position_other']), null];
        }

        return [null, '', ['career_id' => 'Please select an opening or type a position.']];
    }

    /** Reason is needed for Shortlisted / Closed stages; "Other" needs remarks. */
    private function stageError(array $data): ?array
    {
        $stage = CandidateStage::find($data['stage_id']);

        if ($stage && in_array($stage->bucket, ['shortlisted', 'closed'], true) && empty($data['reason_id'])) {
            return ['reason_id' => 'Please select a reason for this stage.'];
        }

        if (!empty($data['reason_id'])
            && CandidateReason::find($data['reason_id'])?->title === 'Other'
            && blank($data['reason_remarks'] ?? null)) {
            return ['reason_remarks' => 'Remarks are required when the reason is "Other".'];
        }

        return null;
    }

    private function duplicateResponse(CareerApplication $dup)
    {
        return back()
            ->withInput()
            ->with('duplicate_id', $dup->id)
            ->withErrors(['duplicate' => "Duplicate candidate: #{$dup->id} {$dup->name} ({$dup->position}) already exists."]);
    }

    private function log(CareerApplication $a, string $type, ?string $from, ?string $to, ?string $note = null): void
    {
        CareerApplicationLog::create([
            'career_application_id' => $a->id,
            'user_id' => auth()->id(), // change to your admin guard if needed: auth('admin')->id()
            'type' => $type,
            'from_value' => $from,
            'to_value' => $to,
            'note' => $note,
        ]);
    }
}
