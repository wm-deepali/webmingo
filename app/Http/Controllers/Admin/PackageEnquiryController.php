<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PackageEnquiry;
use Illuminate\Http\Request;

class PackageEnquiryController extends Controller
{
    public function index(Request $request)
    {
        $query = PackageEnquiry::query()->latest();

        if ($request->filled('status') && array_key_exists($request->status, PackageEnquiry::STATUSES)) {
            $query->where('status', $request->status);
        }

        if ($request->filled('page_key')) {
            $query->where('page', $request->page_key);
        }

        if ($request->filled('q')) {
            $q = trim($request->q);

            // Mobile numbers are stored normalised, so also match on the last 10 digits typed
            $digits = preg_replace('/\D+/', '', $q);
            $digits = strlen($digits) > 10 ? substr($digits, -10) : $digits;

            $query->where(function ($w) use ($q, $digits) {
                $w->where('name', 'like', "%{$q}%")
                    ->orWhere('email', 'like', "%{$q}%")
                    ->orWhere('mobile', 'like', "%{$q}%")
                    ->orWhere('business_name', 'like', "%{$q}%")
                    ->orWhere('business_type', 'like', "%{$q}%")
                    ->orWhere('requirements', 'like', "%{$q}%");

                if (strlen($digits) >= 4) {
                    $w->orWhere('mobile', 'like', "%{$digits}%");
                }
            });
        }

        $enquiries = $query->paginate(15)->withQueryString();

        $counts = PackageEnquiry::selectRaw('status, count(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        $pages = PackageEnquiry::select('page')->distinct()->orderBy('page')->pluck('page');

        return view('admin.package-enquiries.index', compact('enquiries', 'counts', 'pages'));
    }

    public function show(PackageEnquiry $packageEnquiry)
    {
        return view('admin.package-enquiries.show', ['enquiry' => $packageEnquiry]);
    }

    public function update(Request $request, PackageEnquiry $packageEnquiry)
    {
        $data = $request->validate([
            'status' => 'required|in:' . implode(',', array_keys(PackageEnquiry::STATUSES)),
        ]);

        $packageEnquiry->update($data);

        return back()->with('success', 'Enquiry status updated.');
    }

    public function destroy(PackageEnquiry $packageEnquiry)
    {
        $packageEnquiry->delete();

        return redirect()
            ->route('admin.package-enquiries.index')
            ->with('success', 'Enquiry deleted.');
    }
}