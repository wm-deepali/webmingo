<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageHero;
use Illuminate\Http\Request;

class PageHeroController extends Controller
{
    public function index()
    {
        $groups = PageHero::pages();
        $heroes = PageHero::all()->keyBy('page_key');

        return view('admin.page-heroes.index', compact('groups', 'heroes'));
    }

    public function edit(string $pageKey)
    {
        $label = PageHero::labelFor($pageKey) ?? abort(404);
        $hero  = PageHero::firstOrNew(['page_key' => $pageKey]);

        return view('admin.page-heroes.edit', compact('pageKey', 'label', 'hero'));
    }

    public function update(Request $request, string $pageKey)
    {
        PageHero::labelFor($pageKey) ?? abort(404);

        // Allowed link types: #anchor, /path, https://..., tel:..., mailto:...
        $url = ['nullable', 'string', 'max:255', 'regex:/^(#[\w-]*|\/\S*|https?:\/\/\S+|tel:\S+|mailto:\S+)$/i'];

        $data = $request->validate([
            'eyebrow'        => 'nullable|string|max:100',
            'heading'        => 'nullable|string|max:255',
            'description'    => 'nullable|string|max:1000',
            'primary_text'   => 'nullable|string|max:60',
            'primary_url'    => $url,
            'secondary_text' => 'nullable|string|max:60',
            'secondary_url'  => $url,
        ], [
            'primary_url.regex'   => 'Primary button link must start with #, /, http(s)://, tel: or mailto:.',
            'secondary_url.regex' => 'Secondary button link must start with #, /, http(s)://, tel: or mailto:.',
        ]);

        // Everything empty = back to the page's default content
        if (collect($data)->filter()->isEmpty()) {
            PageHero::where('page_key', $pageKey)->delete();

            return redirect()->route('admin.page-heroes.index')
                ->with('success', 'Hero section reset to default content.');
        }

        PageHero::updateOrCreate(['page_key' => $pageKey], $data);

        return redirect()->route('admin.page-heroes.index')
            ->with('success', 'Hero section updated successfully.');
    }

    /** Reset one page to its default hero content. */
    public function destroy(string $pageKey)
    {
        PageHero::labelFor($pageKey) ?? abort(404);

        PageHero::where('page_key', $pageKey)->delete();

        return redirect()->route('admin.page-heroes.index')
            ->with('success', 'Hero section reset to default content.');
    }
}