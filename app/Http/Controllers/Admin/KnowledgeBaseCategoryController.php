<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KnowledgeBaseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KnowledgeBaseCategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = KnowledgeBaseCategory::withCount('articles')->ordered()->get();

        // ?edit=ID loads that category into the side form
        $editing = $request->filled('edit')
            ? KnowledgeBaseCategory::find($request->edit)
            : null;

        return view('admin.knowledge-base.categories.index', compact('categories', 'editing'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'       => 'required|string|max:100',
            'sort_order' => 'nullable|integer|min:0',
            'status'     => 'required|boolean',
        ]);

        $data['slug']       = $this->uniqueSlug($data['name']);
        $data['sort_order'] = $data['sort_order'] ?? 0;

        KnowledgeBaseCategory::create($data);

        return redirect()->route('admin.kb-categories.index')
            ->with('success', 'Category added.');
    }

    public function update(Request $request, KnowledgeBaseCategory $category)
    {
        $data = $request->validate([
            'name'       => 'required|string|max:100',
            'sort_order' => 'nullable|integer|min:0',
            'status'     => 'required|boolean',
        ]);

        $data['sort_order'] = $data['sort_order'] ?? 0;

        // slug is kept as is, it is used as the tab key on the frontend
        $category->update($data);

        return redirect()->route('admin.kb-categories.index')
            ->with('success', 'Category updated.');
    }

    public function destroy(KnowledgeBaseCategory $category)
    {
        $category->delete(); // articles are removed by cascadeOnDelete

        return redirect()->route('admin.kb-categories.index')
            ->with('success', 'Category deleted.');
    }

    private function uniqueSlug(string $name): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $i = 2;

        while (KnowledgeBaseCategory::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }
}