<?php

use App\Http\Controllers\Admin\{
    AdminSettingController,
    BlogController,
    DashboardController,
    DynamicPageController,
    FaqController,
    LogoutController,
    ProfileSettingController,
    SeoController,
    EmailTemplateController,
    NotificationController,
    SystemLogController,
    RedirectController,
    CareerController,
    ContactEnquiryController,
    CareerApplicationController,
    PageHeroController,
    KnowledgeBaseArticleController,
    KnowledgeBaseCategoryController,
    KnowledgeBaseEnquiryController
};

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SitemapController;


Route::middleware('maintenance.mode')->group(function () {

    Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/faqs', 'faqs')->name('faqs');
        Route::get('/blogs', 'blogs')->name('blog');
        Route::get('/blog/{slug}', 'blogDetail')->name('blog-detail');
        Route::get('/careers', 'careers')->name('career');
        Route::get('/career/{slug}', 'careerDetail')->name('career-detail');
        Route::get('/contact', 'contact')->name('contact');
        Route::post('/contact', 'contactStore')->name('contact.store')->middleware('throttle:5,1');
        Route::post('/career/apply', 'careerApply')->name('career.apply')->middleware('throttle:3,1');
        Route::get('/Knowledge-base', 'knowledgeBase')->name('Knowledge-base');
        Route::post('/knowledge-base/enquiry', 'knowledgeBaseEnquiry')->middleware('throttle:5,1')->name('knowledge-base.enquiry');
        Route::get('/page/{slug}', 'dynamicPage')->name('dynamic-page');

        Route::view('/about', 'front-pages.about')->name('about');
        Route::view('/lifeAt', 'front-pages.lifeAt')->name('lifeAt');
        Route::view('/our-works', 'front-pages.our-works')->name('our-works');

        /* ── Service pages (main + sub) → FAQs by service ── */
        Route::get('/website-design-development', 'servicePage')->name('website-design-development');
        Route::get('/business-website-development', 'servicePage')->name('business-website-development');
        Route::get('/E-Commerce-website-development', 'servicePage')->name('E-Commerce-website-development');
        Route::get('/E-Learning-LMS-development', 'servicePage')->name('E-Learning-LMS-development');
        Route::get('/classified-portals-development', 'servicePage')->name('classified-portals-development');
        Route::get('/custom-web-applications-development', 'servicePage')->name('custom-web-applications-development');

        Route::get('/digital-marketing', 'servicePage')->name('digital-marketing');
        Route::get('/search-engine-optimisation', 'servicePage')->name('search-engine-optimisation');
        Route::get('/social-media-marketing', 'servicePage')->name('social-media-marketing');
        Route::get('/google-ads-management', 'servicePage')->name('google-ads-management');
        Route::get('/meta-ads-management', 'servicePage')->name('meta-ads-management');

        Route::get('/mobile-app-development', 'servicePage')->name('mobile-app-development');
        Route::get('/android-applications-development', 'servicePage')->name('android-applications-development');
        Route::get('/iOS-applications-development', 'servicePage')->name('iOS-applications-development');
        Route::get('/flutter-app-development', 'servicePage')->name('flutter-app-development');

        Route::get('/digital-branding', 'servicePage')->name('digital-branding');
        Route::get('/graphic-designing', 'servicePage')->name('graphic-designing');
        Route::get('/video-creations', 'servicePage')->name('video-creations');

        /* ── Industry pages → FAQs by industry ── */
        Route::get('/education-coaching', 'industryPage')->name('education-coaching');
        Route::get('/retail-E-Commerce-D2C', 'industryPage')->name('retail-E-Commerce-D2C');
        Route::get('/real-state', 'industryPage')->name('real-state');
        Route::get('/healthcare-clinics', 'industryPage')->name('healthcare-clinics');
        Route::get('/NGO-Non-Profits', 'industryPage')->name('NGO-Non-Profits');
        Route::get('/manufacturing-export', 'industryPage')->name('manufacturing-export');
        Route::get('/hotels-hospitality', 'industryPage')->name('hotels-hospitality');
        Route::get('/travel-tourism', 'industryPage')->name('travel-tourism');
        Route::post('/package-enquiry', 'packageEnquiryStore')->name('package-enquiry.store')->middleware('throttle:5,1');
    });

});


Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', [SitemapController::class, 'robots'])->name('robots');

// Admin Routes list
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/get-cities', [AdminSettingController::class, 'getCities'])->name('get-cities');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['auth', 'admin.timeout'])->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/profile-setting', ProfileSettingController::class);
        Route::post('/resetpassword', [ProfileSettingController::class, 'resetPassword'])->name('reset.password');

        Route::resource('pages', DynamicPageController::class)->names('pages');

        Route::resource('faqs', FaqController::class)->names('faqs');

        Route::resource('blogs', BlogController::class)->names('blogs');

        Route::resource('careers', CareerController::class)->except(['show']);

        // Inbox: website enquiries + job applications
        Route::resource('enquiries', ContactEnquiryController::class)->only(['index', 'show', 'update', 'destroy'])->parameters(['enquiries' => 'enquiry']);
        Route::resource('kb-enquiries', KnowledgeBaseEnquiryController::class)->only(['index', 'show', 'update', 'destroy'])->parameters(['kb-enquiries' => 'enquiry']);

        Route::get('career-applications/{application}/resume', [CareerApplicationController::class, 'resume'])->name('career-applications.resume');
        Route::resource('career-applications', CareerApplicationController::class)->only(['index', 'show', 'update', 'destroy'])->parameters(['career-applications' => 'application']);

        Route::get('page-heroes', [PageHeroController::class, 'index'])->name('page-heroes.index');
        Route::get('page-heroes/{pageKey}/edit', [PageHeroController::class, 'edit'])->name('page-heroes.edit');
        Route::put('page-heroes/{pageKey}', [PageHeroController::class, 'update'])->name('page-heroes.update');
        Route::delete('page-heroes/{pageKey}', [PageHeroController::class, 'destroy'])->name('page-heroes.destroy');

        Route::resource('kb-categories', KnowledgeBaseCategoryController::class)->only(['index', 'store', 'update', 'destroy'])->parameters(['kb-categories' => 'category']);

        Route::resource('kb-articles', KnowledgeBaseArticleController::class)->except(['show'])->parameters(['kb-articles' => 'article']);

        Route::get('/seo', [SeoController::class, 'index'])->name('seo.index');
        Route::put('/seo/{id}', [SeoController::class, 'update'])->name('seo.update');


        Route::prefix('redirect-settings')->name('redirect-settings.')->group(function () {
            Route::get('/', [RedirectController::class, 'index'])->name('index');
            Route::post('/', [RedirectController::class, 'store'])->name('store');
            Route::put('/{redirect}', [RedirectController::class, 'update'])->name('update');
            Route::delete('/{redirect}', [RedirectController::class, 'destroy'])->name('destroy');
            Route::post('/bulk-delete', [RedirectController::class, 'bulkDestroy'])->name('bulk-delete');
            Route::post('/bulk-toggle', [RedirectController::class, 'bulkToggle'])->name('bulk-toggle');
            Route::post('/{redirect}/toggle', [RedirectController::class, 'toggleStatus'])->name('toggle');
            Route::get('/export', [RedirectController::class, 'exportCsv'])->name('export');
            Route::get('/template', [RedirectController::class, 'downloadTemplate'])->name('template');
            Route::post('/import', [RedirectController::class, 'importCsv'])->name('import');
        });

        Route::get('/admin-setting', [AdminSettingController::class, 'index'])->name('admin-setting.index');
        Route::post('/smtp-settings/store', [AdminSettingController::class, 'smtpSettingStore'])->name('smtp-settings.store');
        Route::post('/settings/general', [AdminSettingController::class, 'generalSettingStore'])->name('settings.general.store');
        Route::post('admin-setting/google-setting', [AdminSettingController::class, 'googleSettingStore'])->name('admin-setting.google-setting');

        Route::get('/security/system-logs', [SystemLogController::class, 'index'])->name('security.system-logs');

        Route::get('/settings/email-templates', [EmailTemplateController::class, 'index'])->name('settings.email-templates.index');
        Route::post('settings/email-templates/test', [EmailTemplateController::class, 'sendTest'])->name('settings.email-templates.test');
        Route::post('settings/email-templates/{eventKey}', [EmailTemplateController::class, 'save'])->name('settings.email-templates.save');


        Route::prefix('notifications')->name('notifications.')->group(function () {
            Route::get('/', [NotificationController::class, 'index'])->name('index');
            Route::post('/read-all', [NotificationController::class, 'markAllRead'])->name('read-all');
            Route::delete('/clear-read', [NotificationController::class, 'clearRead'])->name('clear-read');
            Route::post('/{notification}/read', [NotificationController::class, 'markRead'])->name('read');
            Route::delete('/{notification}', [NotificationController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('roles-and-permission')->group(function () {

            // Roles Category
            Route::view('/roles-category', 'admin.roles-and-permission.roles-category.index')->name('roles-category.index');
            Route::view('/roles-category/create', 'admin.roles-and-permission.roles-category.create')->name('roles-category.create');
            Route::view('/roles-category/edit', 'admin.roles-and-permission.roles-category.edit')->name('roles-category.edit');

            // Permission and Settings
            Route::view('/permission-and-settings', 'admin.roles-and-permission.permission-and-settings.index')->name('permission-settings.index');
            Route::view('/permission-and-settings/create', 'admin.roles-and-permission.permission-and-settings.create')->name('permission-settings.create');
            Route::view('/permission-and-settings/edit', 'admin.roles-and-permission.permission-and-settings.edit')->name('permission-settings.edit');

            // Team
            Route::view('/team', 'admin.roles-and-permission.team.index')->name('team.index');
            Route::view('/team/create', 'admin.roles-and-permission.team.create')->name('team.create');
            Route::view('/team/edit', 'admin.roles-and-permission.team.edit')->name('team.edit');
            Route::view('/team/customise-permission', 'admin.roles-and-permission.team.customise-permission')->name('team.customise-permission');
            Route::view('/team/activity-logs', 'admin.roles-and-permission.team.activity-logs')->name('team.activity-logs');
            Route::view('/team/login', 'admin.roles-and-permission.team.login')->name('team.login');
            Route::view('/team/login-summary', 'admin.roles-and-permission.team.login-summary')->name('team.login-summary');
            Route::view('/team/login-history', 'admin.roles-and-permission.team.login-history')->name('team.login-history');


        });

        Route::get('/logout', [LogoutController::class, 'logout']);

    });
});



// ══════════════════════════════════════════════════
// FALLBACK ROUTE — must be the very last route registered.
// Only runs when NOTHING above matched (i.e. a genuine 404).
// Checks the redirects table before giving up with a real 404/410.
// ══════════════════════════════════════════════════
Route::fallback(function () {
    $path = '/' . ltrim(request()->path(), '/');

    $redirect = \App\Models\Redirect::active()->where('from_url', $path)->first();

    if ($redirect) {
        $redirect->increment('hits');

        if ($redirect->type === '410') {
            abort(410);
        }

        return redirect($redirect->to_url, (int) $redirect->type);
    }

    abort(404);
});