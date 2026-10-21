<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KnowledgeBaseArticle;
use App\Models\KnowledgeBaseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KnowledgeBaseArticleController extends Controller
{
    public function index(Request $request)
    {
        $categories = KnowledgeBaseCategory::ordered()->get();

        $articles = KnowledgeBaseArticle::with('category')
            ->when($request->filled('category_id'), fn ($q) => $q->where('category_id', $request->category_id))
            ->orderBy('category_id')
            ->ordered()
            ->paginate(20)
            ->withQueryString();

        return view('admin.knowledge-base.articles.index', compact('articles', 'categories'));
    }

    public function create()
    {
        return view('admin.knowledge-base.articles.form', [
            'article'    => new KnowledgeBaseArticle(['status' => 1, 'cta_button_text' => 'Talk To Us']),
            'categories' => KnowledgeBaseCategory::ordered()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['slug'] = $this->uniqueSlug($data['title']);

        KnowledgeBaseArticle::create($data);

        return redirect()->route('admin.kb-articles.index')
            ->with('success', 'Article added.');
    }

    public function edit(KnowledgeBaseArticle $article)
    {
        return view('admin.knowledge-base.articles.form', [
            'article'    => $article,
            'categories' => KnowledgeBaseCategory::ordered()->get(),
        ]);
    }

    public function update(Request $request, KnowledgeBaseArticle $article)
    {
        $article->update($this->validated($request));

        return redirect()->route('admin.kb-articles.index')
            ->with('success', 'Article updated.');
    }

    public function destroy(KnowledgeBaseArticle $article)
    {
        $article->delete();

        return redirect()->route('admin.kb-articles.index')
            ->with('success', 'Article deleted.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'category_id'       => 'required|exists:knowledge_base_categories,id',
            'title'             => 'required|string|max:255',
            'short_description' => 'required|string',
            'content'           => 'required|string',
            'cta_text'          => 'nullable|string|max:255',
            'cta_button_text'   => 'nullable|string|max:100',
            'sort_order'        => 'nullable|integer|min:0',
            'status'            => 'required|boolean',
        ]);

        $data['sort_order']      = $data['sort_order'] ?? 0;
        $data['cta_button_text'] = $data['cta_button_text'] ?: 'Talk To Us';

        return $data;
    }

    private function uniqueSlug(string $title): string
    {
        $base = Str::slug($title);
        $slug = $base;
        $i = 2;

        while (KnowledgeBaseArticle::where('slug', $slug)->exists()) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }
}