<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FrontController extends Controller
{

    public function home(Request $request)
    {
        // Home page FAQ section = General FAQs
        $faqs = Faq::active()->general()->get();

        return view('front-pages.home', compact('faqs'));
    }

    public function faqs()
    {
        // Main FAQ page = General FAQs only
        $faqs = Faq::active()->general()->get();

        return view('front-pages.faqs', compact('faqs'));
    }

    /**
     * Main service + sub service pages.
     * The route name doubles as the view name and the FAQ key.
     */
    public function servicePage()
    {
        $key = Route::currentRouteName();
        $faqs = Faq::active()->forService($key)->get();

        return view('front-pages.' . $key, compact('faqs'));
    }

    /**
     * Industry pages.
     */
    public function industryPage()
    {
        $key = Route::currentRouteName();
        $faqs = Faq::active()->forIndustry($key)->get();

        return view('front-pages.' . $key, compact('faqs'));
    }

    public function blogs(Request $request)
    {
        $blogs = Blog::active()->latestFirst()->paginate(6);

        // "Load More" request
        if ($request->wantsJson()) {
            return response()->json([
                'html' => view('partials.blog-cards', compact('blogs'))->render(),
                'has_more' => $blogs->hasMorePages(),
            ]);
        }

        return view('front-pages.blog', compact('blogs'));
    }

    public function blogDetail(string $slug)
    {
        $blog = Blog::active()->where('slug', $slug)->firstOrFail();

        $moreBlogs = Blog::active()
            ->where('id', '!=', $blog->id)
            ->latestFirst()
            ->take(6)
            ->get();

        return view('front-pages.blog-detail', compact('blog', 'moreBlogs'));
    }

    public function careers()
    {
        $careers = Career::active()->ordered()->get();
        $departments = $careers->pluck('department')->unique()->values();

        return view('front-pages.career', compact('careers', 'departments'));
    }

    public function careerDetail(string $slug)
    {
        $career = Career::where('slug', $slug)->first();

        // Missing, deleted or inactive: show the "no opening" page.
        // 404 status + noindex so Google never indexes it as a job page.
        if (!$career || !$career->status) {
            return response()->view('front-pages.career-detail', ['career' => null], 404);
        }

        return view('front-pages.career-detail', compact('career'));
    }
}