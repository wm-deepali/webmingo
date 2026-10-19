<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::ordered()->paginate(15);

        return view('admin.careers.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        Career::create($data);

        return redirect()
            ->route('admin.careers.index')
            ->with('success', 'Career added successfully.');
    }

    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $data = $this->validated($request, $career);

        $career->update($data);

        return redirect()
            ->route('admin.careers.index')
            ->with('success', 'Career updated successfully.');
    }

    public function destroy(Career $career)
    {
        $career->delete();

        return response()->json(['message' => 'Career deleted successfully.']);
    }

    /**
     * Shared validation + normalisation for store/update.
     */
    private function validated(Request $request, ?Career $career = null): array
    {
        // Clean the slug before validating so the unique check uses the final value.
        // Empty slug => null => the model generates a unique one from the title.
        $request->merge([
            'slug' => $request->filled('slug') ? Str::slug($request->input('slug')) : null,
        ]);

        $data = $request->validate([
            'title'             => 'required|string|max:255',
            'slug'              => 'nullable|string|max:255|unique:careers,slug' . ($career ? ',' . $career->id : ''),
            'department'        => 'required|string|max:100',
            'type'              => 'required|in:Job,Internship',
            'employment_type'   => 'required|in:Full-time,Part-time,Contract',
            'work_mode'         => 'nullable|in:Onsite,Remote,Hybrid',
            'location'          => 'nullable|string|max:150',
            'experience'        => 'nullable|string|max:100',
            'salary'            => 'nullable|string|max:100',
            'short_description' => 'nullable|string|max:500',
            'description'       => 'nullable|string',
            'responsibilities'  => 'nullable|string',
            'requirements'      => 'nullable|string',
            'nice_to_have'      => 'nullable|string',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string|max:500',
            'sort_order'        => 'nullable|integer|min:0',
        ]);

        // Unchecked checkboxes are not submitted, so read them explicitly.
        $data['status']     = $request->boolean('status');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        return $data;
    }
}