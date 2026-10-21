<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Setting;
use App\Models\DynamicPage;
use Illuminate\Http\Request;
use App\Models\ContactEnquiry;
use App\Models\PackageEnquiry;
use Illuminate\Validation\Rule;
use App\Models\CareerApplication;
use App\Models\KnowledgeBaseEnquiry;
use App\Models\KnowledgeBaseCategory;
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

    public function contact()
    {
        // new Setting() avoids "property on null" errors if the settings row doesn't exist yet
        $settings = Setting::first() ?? new Setting();

        return view('front-pages.contact', compact('settings'));
    }

    public function contactStore(Request $request)
    {
        // Honeypot: real visitors never fill this hidden field
        if ($request->filled('hp_check')) {
            return redirect()->route('contact');
        }

        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:30',
            'service' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        ContactEnquiry::create($data + [
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 255),
        ]);

        return redirect()
            ->to(route('contact') . '#contact-form')
            ->with('success', "Thanks! We've received your enquiry and will get back to you shortly.");
    }

    public function careerApply(Request $request)
    {
        // Honeypot: real visitors never fill this hidden field
        if ($request->filled('hp_check')) {
            return back();
        }

        $data = $request->validate([
            'career_id' => 'nullable|integer',
            'apply_type' => 'nullable|string|max:50',
            'position' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'location' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:50',
            'notice_period' => 'nullable|string|max:20',
            'portfolio' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'cover_letter' => 'nullable|string|max:5000',
            'consent' => 'accepted',
        ], [
            'resume.max' => 'Your resume must be 5MB or smaller.',
            'resume.mimes' => 'Please upload a PDF, DOC or DOCX file.',
            'consent.accepted' => 'Please confirm to continue.',
        ]);

        // From the detail page, trust the opening itself, not the submitted position text
        $career = null;
        if (!empty($data['career_id'])) {
            $career = Career::active()->find($data['career_id']);

            if (!$career) {
                return back()->withInput()->withErrors(['position' => 'This opening is no longer available.']);
            }
        }

        $position = $career ? $career->title : ($data['position'] ?? null);

        if (!$position) {
            return back()->withInput()->withErrors(['position' => 'Please select a position.']);
        }

        // Careers page: link to the opening when the chosen title matches one
        if (!$career) {
            $career = Career::active()->where('title', $position)->first();
        }

        CareerApplication::create([
            'career_id' => $career?->id,
            'position' => $position,
            'apply_type' => $data['apply_type'] ?: 'Job',
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'location' => $data['location'] ?? null,
            'experience' => $data['experience'] ?? null,
            'notice_period' => $data['notice_period'] ?? null,
            'portfolio' => $data['portfolio'] ?? null,
            'linkedin' => $data['linkedin'] ?? null,
            'resume_path' => $request->file('resume')->store('career-resumes'), // private disk, not public
            'cover_letter' => $data['cover_letter'] ?? null,
            'ip_address' => $request->ip(),
        ]);

        return back()->with('success', "Thanks! We've received your application and will get back to you shortly.");
    }

    public function knowledgeBase()
    {
        $categories = KnowledgeBaseCategory::active()
            ->ordered()
            ->with(['articles' => fn($q) => $q->active()->ordered()])
            ->get()
            ->filter(fn($category) => $category->articles->isNotEmpty())
            ->values();

        return view('front-pages.knowledge-base', compact('categories'));
    }

    public function knowledgeBaseEnquiry(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:20',
            'need' => ['required', Rule::in(array_keys(KnowledgeBaseEnquiry::NEEDS))],
            'message' => 'required|string|max:2000',
        ]);

        KnowledgeBaseEnquiry::create($data + [
            'status' => 'new',
            'ip_address' => $request->ip(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Our team will contact you shortly.',
        ]);
    }

    public function dynamicPage(string $slug)
    {
        // Small table, so match the slug in PHP (the slug is derived from page_name)
        $page = DynamicPage::active()->get()->first(fn($p) => $p->slug === $slug);

        abort_if(!$page, 404);

        return view('front-pages.dynamic-page', compact('page'));
    }

    public function packageEnquiryStore(Request $request)
    {
        // Honeypot
        if ($request->filled('website')) {
            return response()->json(['success' => true, 'message' => 'Thank you! We will contact you shortly.']);
        }

        $data = $request->validate([
            'name' => 'required|string|max:100',
            'mobile' => ['required', 'regex:/^[0-9+\-\s]{10,15}$/'],
            'email' => 'nullable|email|max:150',
            'business_name' => 'nullable|string|max:150',
            'business_type' => 'required|string|max:100',
            'requirements' => 'nullable|string|max:2000',
            'extra' => 'nullable|array',
            'extra.*' => 'nullable|string|max:255',
            'page' => 'required|string|max:100',
        ], [
            'mobile.regex' => 'Please enter a valid mobile number.',
        ]);

        PackageEnquiry::create($data + [
            'page_url' => url()->previous(),
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! We will contact you shortly.',
        ]);
    }

}