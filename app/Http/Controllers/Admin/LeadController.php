<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use App\Models\KnowledgeBaseEnquiry;
use App\Models\Lead;
use App\Models\PackageEnquiry;
use App\Services\Leads\LeadConverter;
use App\Support\LeadOptions;
use App\Support\Locations;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class LeadController extends Controller
{
    private const FOLLOWUP_SQL = '(select next_followup_date from lead_notes where lead_notes.lead_id = leads.id
        and next_followup_date is not null order by id desc limit 1) = ?';

    /* ───────────── Lists ───────────── */

    public function index(Request $request)
    {
        return $this->listing($request, false);
    }

    /** Invalid leads live on their own page (same as the old CRM). */
    public function invalid(Request $request)
    {
        return $this->listing($request, true);
    }

    private function listing(Request $request, bool $invalid)
    {
        $leads = $this->filtered($request, $invalid)->latest('leads.id')->paginate(25)->withQueryString();

        $counts = Lead::selectRaw('status, count(*) as total')->groupBy('status')->pluck('total', 'status');

        return view('admin.leads.index', ['leads' => $leads, 'invalid' => $invalid, 'counts' => $counts]);
    }

    private function filtered(Request $r, bool $invalid): Builder
    {
        $q = Lead::query()->withNextFollowup();

        if ($invalid) {
            $q->where('leads.status', 'Invalid Lead');
        } else {
            $q->where(fn($w) => $w->where('leads.status', '!=', 'Invalid Lead')->orWhereNull('leads.status'));
        }

        if ($r->filled('q')) {
            $s = trim($r->q);
            $q->where(function ($w) use ($s) {
                $w->where('full_name', 'like', "%{$s}%")
                    ->orWhere('mobile', 'like', "%{$s}%")
                    ->orWhere('email', 'like', "%{$s}%")
                    ->orWhere('business_name', 'like', "%{$s}%");

                // "WM00012" style lead id
                if (preg_match('/^' . Lead::ID_PREFIX . '0*(\d+)$/i', $s, $m)) {
                    $w->orWhere('leads.id', (int) $m[1]);
                }
            });
        }

        foreach (['lead_source' => 'lead_source', 'status' => 'status', 'lead_type' => 'lead_type'] as $input => $column) {
            if ($r->filled($input)) {
                $q->where('leads.' . $column, $r->input($input));
            }
        }

        if ($r->filled('from')) {
            $q->whereDate('leads.created_at', '>=', $r->from);
        }
        if ($r->filled('to')) {
            $q->whereDate('leads.created_at', '<=', $r->to);
        }
        if ($r->filled('followup')) {
            $q->whereRaw(self::FOLLOWUP_SQL, [$r->followup]);
        }

        return $q;
    }

    /** CSV / Excel of the currently filtered rows (all pages). */
    public function export(Request $request)
    {
        $invalid = $request->boolean('invalid');
        $query = $this->filtered($request, $invalid)->latest('leads.id');
        $excel = $request->input('format') === 'xls';

        $headers = ['Lead ID', 'Date & Time', 'Name', 'Mobile', 'Mobile Verified', 'Email', 'Business', 'Lead Source',
            'Form Type', 'Service', 'Next Followup', 'Status', 'Lead Type'];

        $rows = function () use ($query) {
            foreach ($query->cursor() as $l) {
                yield [
                    $l->lead_code, $l->created_at->format('d M Y h:i A'), $l->full_name, $l->mobile,
                    $l->mobile_verified ? 'Yes' : 'No', $l->email, $l->business_name, $l->lead_source,
                    LeadOptions::FORM_TYPES[$l->form_type][0] ?? '', $l->service_type,
                    $l->next_followup_date, $l->status, $l->lead_type,
                ];
            }
        };

        $name = 'leads-' . now()->format('Y-m-d-His');

        if ($excel) {
            return response()->streamDownload(function () use ($headers, $rows) {
                echo '<meta charset="utf-8"><table border="1"><tr>';
                foreach ($headers as $h) {
                    echo '<th>' . e($h) . '</th>';
                }
                echo '</tr>';
                foreach ($rows() as $row) {
                    echo '<tr>' . implode('', array_map(fn($c) => '<td>' . e((string) $c) . '</td>', $row)) . '</tr>';
                }
                echo '</table>';
            }, $name . '.xls', ['Content-Type' => 'application/vnd.ms-excel']);
        }

        return response()->streamDownload(function () use ($headers, $rows) {
            $out = fopen('php://output', 'w');
            fwrite($out, "\xEF\xBB\xBF");
            fputcsv($out, $headers);
            foreach ($rows() as $row) {
                fputcsv($out, $row);
            }
            fclose($out);
        }, $name . '.csv', ['Content-Type' => 'text/csv']);
    }

    /* ───────────── View / JSON for modals ───────────── */

    public function show(Lead $lead)
    {
        $lead->load(['notes', 'source']);

        return view('admin.leads.show', [
            'lead' => $lead,
            'stateName' => Locations::stateName($lead->state),
            'cityName' => Locations::cityName($lead->city),
        ]);
    }

    public function data(Lead $lead)
    {
        return response()->json(['success' => true, 'lead' => $lead]);
    }

    public function states()
    {
        return response()->json(['success' => true, 'states' => Locations::states()]);
    }

    public function cities(Request $request)
    {
        return response()->json(['success' => true, 'cities' => Locations::cities($request->input('state_id'))]);
    }

    /* ───────────── Add / Edit ───────────── */

    private function rules(): array
    {
        return [
            'service_type' => ['nullable', Rule::in(LeadOptions::SERVICE_TYPES)],
            'full_name' => 'required|string|min:3|max:255',
            'mobile' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'business_name' => 'nullable|string|max:255',
            // Business name is optional, but once it is filled the entity type is required
            'entity_type' => ['nullable', 'required_with:business_name', Rule::in(LeadOptions::ENTITY_TYPES)],
            'gst_number' => 'nullable|string|max:30',
            'cin_number' => 'nullable|string|max:30',
            'email' => 'nullable|email|max:255',
            'website' => 'nullable|string|max:255',
            'industry' => ['nullable', Rule::in(LeadOptions::INDUSTRIES)],
            'lead_type' => ['nullable', Rule::in(LeadOptions::LEAD_TYPES)],
            'address' => 'nullable|string|max:255',
            'state' => 'nullable|integer',
            'city' => 'nullable|integer',
            'pincode' => 'nullable|digits:6',
            'details' => 'nullable|string|max:5000',
        ];
    }

    private function messages(): array
    {
        return [
            'entity_type.required_with' => 'Please select Entity Type',
            'mobile.regex' => 'Please enter a valid 10-digit mobile number',
            'full_name.min' => 'Please enter a valid name',
        ];
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules() + [
                'sub_source' => ['required', Rule::in(array_keys(LeadOptions::SUB_SOURCES))],
            ], $this->messages() + ['sub_source.required' => 'Please select WhatsApp, Call or Email']);

        $lead = Lead::create(Arr::except($data, 'sub_source') + [
                'lead_source' => 'Manual',
                'form_type' => $data['sub_source'],
                'status' => 'New Lead',
                'country_code' => '91',
                'created_by' => auth()->id(),
            ]);

        return response()->json(['success' => true, 'message' => 'Lead added', 'id' => $lead->id]);
    }

    public function update(Request $request, Lead $lead)
    {
        $data = $request->validate($this->rules() + [
                'status' => ['required', Rule::in(LeadOptions::STATUSES)],
                'not_converted_reason' => 'nullable|string|max:2000',
            ], $this->messages());

        if ($data['status'] !== 'Not Converted') {
            $data['not_converted_reason'] = null;
        }

        $lead->update($data);

        return response()->json(['success' => true, 'message' => 'Saved']);
    }

    /* ───────────── Notes & follow-up ───────────── */

    private function notesJson(Lead $lead): array
    {
        return $lead->notes()->get()->map(fn($n) => [
            'created_at' => $n->created_at->format('d M Y, h:i A'),
            'note' => $n->note,
            'next_followup_date' => $n->next_followup_date?->format('Y-m-d'),
        ])->all();
    }

    public function notes(Lead $lead)
    {
        return response()->json(['success' => true, 'notes' => $this->notesJson($lead)]);
    }

    public function addNote(Request $request, Lead $lead)
    {
        $data = $request->validate([
            'note' => 'required|string|max:5000',
            'next_followup_date' => 'nullable|date',
        ], ['note.required' => 'Note text is required']);

        $lead->notes()->create($data + ['user_id' => auth()->id()]);

        return response()->json(['success' => true, 'notes' => $this->notesJson($lead)]);
    }

    /* ───────────── Delete ───────────── */

    public function destroy(Lead $lead)
    {
        $lead->delete();

        return back()->with('success', 'Lead deleted.');
    }

    public function bulkDestroy(Request $request)
    {
        $ids = $request->validate(['ids' => 'required|array|min:1', 'ids.*' => 'integer'])['ids'];

        $count = Lead::whereIn('id', $ids)->delete();

        return back()->with('success', $count . ' lead(s) deleted.');
    }

    /* ───────────── Convert enquiry -> lead ───────────── */

    public function convert(string $type, int $id)
    {
        $model = match ($type) {
            'contact' => ContactEnquiry::class,
            'kb' => KnowledgeBaseEnquiry::class,
            'package' => PackageEnquiry::class,
            default => abort(404),
        };

        $enquiry = $model::findOrFail($id);

        if ($existing = $enquiry->lead) {
            return redirect()->route('admin.leads.show', $existing)
                ->with('success', 'This enquiry is already converted: ' . $existing->lead_code);
        }

        $lead = LeadConverter::convert($enquiry);

        return redirect()->route('admin.leads.show', $lead)
            ->with('success', 'Enquiry converted to lead ' . $lead->lead_code . '.');
    }
}