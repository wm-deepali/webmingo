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
use App\Services\Enquiry\EnquiryNotifier;
use App\Services\Otp\OtpService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
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

    /**
     * Business / service enquiry.
     *
     * The enquiry is always saved. When the page's JS supports the OTP step (it sends
     * otp_ui=1) an OTP is sent and the admin + thank-you emails wait for the outcome
     * (see OtpController). Without OTP (JS off, SMS off, rate limited) the admin is
     * notified straight away as "Mobile Verified: No".
     */
    public function contactStore(Request $request, OtpService $otp)
    {
        $message = "Thanks! We've received your enquiry and will get back to you shortly.";

        // Honeypot: real visitors never fill this hidden field
        if ($request->filled('hp_check')) {
            return $this->wantsJsonFlow($request)
                ? $this->doneJson($message)
                : redirect()->route('contact');
        }

        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => ['required', 'string', 'max:30', $this->mobileRule()],
            'service' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $data['phone'] = OtpService::normaliseMobile($data['phone']);

        $enquiry = ContactEnquiry::create($data + [
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 255),
        ]);

        if ($response = $this->startOtp($request, $enquiry, $enquiry->phone, $otp)) {
            return $response;
        }

        EnquiryNotifier::resolve($enquiry, false);

        if ($this->wantsJsonFlow($request)) {
            return $this->doneJson($message);
        }

        return redirect()
            ->to(route('contact') . '#contact-form')
            ->with('success', $message);
    }

    public function careerApply(Request $request, OtpService $otp)
    {
        $message = "Thanks! We've received your application and will get back to you shortly.";

        // Honeypot: real visitors never fill this hidden field
        if ($request->filled('hp_check')) {
            return $this->wantsJsonFlow($request) ? $this->doneJson($message) : back();
        }

        $data = $request->validate([
            'career_id' => 'nullable|integer',
            'apply_type' => 'nullable|string|max:50',
            'position' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => ['required', 'string', 'max:30', $this->mobileRule()],
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
                return $this->failure($request, 'position', 'This opening is no longer available.');
            }
        }

        $position = $career ? $career->title : ($data['position'] ?? null);

        if (!$position) {
            return $this->failure($request, 'position', 'Please select a position.');
        }

        // Careers page: link to the opening when the chosen title matches one
        if (!$career) {
            $career = Career::active()->where('title', $position)->first();
        }

        $application = CareerApplication::create([
            'career_id' => $career?->id,
            'position' => $position,
            'apply_type' => $data['apply_type'] ?: 'Job',
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => OtpService::normaliseMobile($data['phone']),
            'location' => $data['location'] ?? null,
            'experience' => $data['experience'] ?? null,
            'notice_period' => $data['notice_period'] ?? null,
            'portfolio' => $data['portfolio'] ?? null,
            'linkedin' => $data['linkedin'] ?? null,
            'resume_path' => $request->file('resume')->store('career-resumes'), // private disk, not public
            'cover_letter' => $data['cover_letter'] ?? null,
            'ip_address' => $request->ip(),
        ]);

        if ($response = $this->startOtp($request, $application, $application->phone, $otp)) {
            return $response;
        }

        EnquiryNotifier::resolve($application, false);

        if ($this->wantsJsonFlow($request)) {
            return $this->doneJson($message);
        }

        return back()->with('success', $message);
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

    /**
     * Knowledge base "Get a free consultation" form (always JSON).
     * Same OTP flow as the other enquiry forms.
     */
    public function knowledgeBaseEnquiry(Request $request, OtpService $otp)
    {
        $message = 'Thank you! Our team will contact you shortly.';

        // Honeypot: real visitors never fill this hidden field
        if ($request->filled('hp_check')) {
            return $this->doneJson($message);
        }

        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => ['required', 'string', 'max:20', $this->mobileRule()],
            'need' => ['required', Rule::in(array_keys(KnowledgeBaseEnquiry::NEEDS))],
            'message' => 'required|string|max:2000',
        ]);

        $data['phone'] = OtpService::normaliseMobile($data['phone']);

        $enquiry = KnowledgeBaseEnquiry::create($data + [
            'status' => 'new',
            'ip_address' => $request->ip(),
        ]);

        if ($response = $this->startOtp($request, $enquiry, $enquiry->phone, $otp)) {
            return $response;
        }

        EnquiryNotifier::resolve($enquiry, false);

        return $this->doneJson($message);
    }

    public function dynamicPage(string $slug)
    {
        // Small table, so match the slug in PHP (the slug is derived from page_name)
        $page = DynamicPage::active()->get()->first(fn($p) => $p->slug === $slug);

        abort_if(!$page, 404);

        return view('front-pages.dynamic-page', compact('page'));
    }

    public function packageEnquiryStore(Request $request, OtpService $otp)
    {
        $message = 'Thank you! We will contact you shortly.';

        // Honeypot
        if ($request->filled('website')) {
            return $this->doneJson($message);
        }

        $data = $request->validate([
            'name' => 'required|string|max:100',
            'mobile' => ['required', 'string', 'max:30', $this->mobileRule()],
            'email' => 'nullable|email|max:150',
            'business_name' => 'nullable|string|max:150',
            'business_type' => 'required|string|max:100',
            'requirements' => 'nullable|string|max:2000',
            'extra' => 'nullable|array',
            'extra.*' => 'nullable|string|max:255',
            'page' => 'required|string|max:100',
        ]);

        $data['mobile'] = OtpService::normaliseMobile($data['mobile']);

        $enquiry = PackageEnquiry::create($data + [
            'page_url' => url()->previous(),
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        if ($response = $this->startOtp($request, $enquiry, $enquiry->mobile, $otp)) {
            return $response;
        }

        EnquiryNotifier::resolve($enquiry, false);

        return $this->doneJson($message);
    }

    // ── OTP helpers ──────────────────────────────────────────────────────────

    /**
     * Validation rule: must be a valid Indian mobile number.
     */
    private function mobileRule(): \Closure
    {
        return function (string $attribute, mixed $value, \Closure $fail) {
            if (!OtpService::normaliseMobile((string) $value)) {
                $fail('Please enter a valid 10-digit Indian mobile number.');
            }
        };
    }

    /**
     * Forms whose JS can show the OTP step send otp_ui=1. Older forms keep working:
     * they just skip the OTP step and the admin is notified as unverified.
     */
    private function wantsJsonFlow(Request $request): bool
    {
        return $request->boolean('otp_ui') || $request->expectsJson();
    }

    /**
     * Start the OTP step. Returns the JSON for the browser, or null when no OTP step
     * will happen (the caller then notifies the admin as unverified).
     */
    private function startOtp(Request $request, Model $record, string $mobile, OtpService $otp): ?JsonResponse
    {
        if (!$request->boolean('otp_ui')) {
            return null;
        }

        $started = $otp->start($record, $mobile, $request->ip());

        if (!$started) {
            return null;
        }

        return response()->json([
            'success' => true,
            'requires_otp' => true,
            'message' => 'Enter the OTP we sent to your mobile number.',
        ] + $started);
    }

    private function doneJson(string $message): JsonResponse
    {
        return response()->json([
            'success' => true,
            'requires_otp' => false,
            'message' => $message,
        ]);
    }

    private function failure(Request $request, string $field, string $message)
    {
        if ($this->wantsJsonFlow($request)) {
            return response()->json([
                'success' => false,
                'message' => $message,
                'errors' => [$field => [$message]],
            ], 422);
        }

        return back()->withInput()->withErrors([$field => $message]);
    }

}