<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{

    public function index()
    {
        $faqs = Faq::orderBy('sort_order')->orderBy('id')->get();

        return view('admin.faqs.index', compact('faqs'));
    }


    public function create()
    {
        // Suggest the next position in the order field
        $nextOrder = (Faq::max('sort_order') ?? 0) + 1;

        return view('admin.faqs.create', compact('nextOrder'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'question'   => 'required|string|max:255',
            'answer'     => 'required|string',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        // If left blank, put the new FAQ at the end
        $sortOrder = $request->filled('sort_order')
            ? (int) $request->sort_order
            : (Faq::max('sort_order') ?? 0) + 1;

        Faq::create([

            'question'   => $request->question,

            'answer'     => $request->answer,

            'sort_order' => $sortOrder,

            'show_home'  => $request->show_home ? 1 : 0,

            'status'     => $request->status ? 1 : 0

        ]);

        return redirect()->route('admin.faqs.index')
            ->with('success', 'FAQ Added Successfully');

    }


    public function edit($id)
    {
        $faq = Faq::findOrFail($id);

        return view('admin.faqs.edit', compact('faq'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'question'   => 'required|string|max:255',
            'answer'     => 'required|string',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $faq = Faq::findOrFail($id);

        $faq->update([

            'question'   => $request->question,

            'answer'     => $request->answer,

            // Keep the current order if the field is cleared
            'sort_order' => $request->filled('sort_order')
                ? (int) $request->sort_order
                : $faq->sort_order,

            'show_home'  => $request->show_home ? 1 : 0,

            'status'     => $request->status ? 1 : 0

        ]);

        return redirect()->route('admin.faqs.index')
            ->with('success', 'FAQ Updated Successfully');

    }


    public function destroy($id)
    {

        Faq::findOrFail($id)->delete();

        return response()->json([
            'message' => 'FAQ Deleted Successfully'
        ]);

    }

}