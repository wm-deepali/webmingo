<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KnowledgeBaseEnquiry;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KnowledgeBaseEnquiryController extends Controller
{
    public function index(Request $request)
    {
        // Counts for the status tabs (not affected by the filters)
        $counts = KnowledgeBaseEnquiry::selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        $enquiries = KnowledgeBaseEnquiry::query()
            ->when($request->filled('q'), function ($q) use ($request) {
                $term = '%' . $request->q . '%';
                $q->where(function ($w) use ($term) {
                    $w->where('name', 'like', $term)
                      ->orWhere('email', 'like', $term)
                      ->orWhere('phone', 'like', $term)
                      ->orWhere('message', 'like', $term);
                });
            })
            ->when($request->filled('status'), fn ($q) => $q->where('status', $request->status))
            ->when($request->filled('need'), fn ($q) => $q->where('need', $request->need))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('admin.knowledge-base.enquiries.index', compact('enquiries', 'counts'));
    }

    public function show(KnowledgeBaseEnquiry $enquiry)
    {
        return view('admin.knowledge-base.enquiries.show', compact('enquiry'));
    }

    public function update(Request $request, KnowledgeBaseEnquiry $enquiry)
    {
        $data = $request->validate([
            'status' => ['required', Rule::in(array_keys(KnowledgeBaseEnquiry::STATUSES))],
        ]);

        $enquiry->update($data);

        return redirect()->route('admin.kb-enquiries.show', $enquiry)
            ->with('success', 'Status updated.');
    }

    public function destroy(KnowledgeBaseEnquiry $enquiry)
    {
        $enquiry->delete();

        return redirect()->route('admin.kb-enquiries.index')
            ->with('success', 'Enquiry deleted.');
    }
}