<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CareerApplicationController extends Controller
{
    private const STATUSES = ['new', 'shortlisted', 'rejected', 'hired'];

    public function index(Request $request)
    {
        $query = CareerApplication::query()->latest();

        if ($request->filled('status') && in_array($request->status, self::STATUSES, true)) {
            $query->where('status', $request->status);
        }

        if ($request->filled('apply_type')) {
            $query->where('apply_type', $request->apply_type);
        }

        if ($request->filled('position')) {
            $query->where('position', $request->position);
        }

        if ($request->filled('q')) {
            $q = trim($request->q);
            $query->where(function ($w) use ($q) {
                $w->where('name', 'like', "%{$q}%")
                    ->orWhere('email', 'like', "%{$q}%")
                    ->orWhere('phone', 'like', "%{$q}%")
                    ->orWhere('position', 'like', "%{$q}%");
            });
        }

        $applications = $query->paginate(15)->withQueryString();

        $counts = CareerApplication::selectRaw('status, count(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        $positions = CareerApplication::select('position')->distinct()->orderBy('position')->pluck('position');

        return view('admin.career-applications.index', compact('applications', 'counts', 'positions'));
    }

    public function show(CareerApplication $application)
    {
        return view('admin.career-applications.show', compact('application'));
    }

    public function update(Request $request, CareerApplication $application)
    {
        $data = $request->validate([
            'status' => 'required|in:' . implode(',', self::STATUSES),
        ]);

        $application->update($data);

        return back()->with('success', 'Application status updated.');
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
        if ($application->resume_path && Storage::exists($application->resume_path)) {
            Storage::delete($application->resume_path);
        }

        $application->delete();

        return redirect()
            ->route('admin.career-applications.index')
            ->with('success', 'Application deleted.');
    }
}