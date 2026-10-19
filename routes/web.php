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
};

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontController;


Route::middleware('maintenance.mode')->group(function () {

    Route::controller(FrontController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/faqs', 'faqs')->name('faqs');
        Route::get('/blogs', 'blogs')->name('blog');
        Route::get('/blog/{slug}', 'blogDetail')->name('blog-detail');
        Route::get('/careers', 'careers')->name('career');
        Route::get('/career/{slug}', 'careerDetail')->name('career-detail');

        Route::view('/about', 'front-pages.about')->name('about');
        Route::view('/contact', 'front-pages.contact')->name('contact');
        Route::view('/lifeAt', 'front-pages.lifeAt')->name('lifeAt');
        Route::view('/Knowledge-base', 'front-pages.Knowledge-base')->name('Knowledge-base');
        Route::view('/our-works', 'front-pages.our-works')->name('our-works');
        Route::view('/real-state', 'front-pages.real-state')->name('real-state');

        Route::view('/android-applications-development', 'front-pages.android-applications-development')->name('android-applications-development');
        Route::view('/business-website-development', 'front-pages.business-website-development')->name('business-website-development');
        Route::view('/classified-portals-development', 'front-pages.classified-portals-development')->name('classified-portals-development');
        Route::view('/custom-web-applications-development', 'front-pages.custom-web-applications-development')->name('custom-web-applications-development');
        Route::view('/digital-branding', 'front-pages.digital-branding')->name('digital-branding');
        Route::view('/digital-marketing', 'front-pages.digital-marketing')->name('digital-marketing');
        Route::view('/E-Commerce-website-development', 'front-pages.E-Commerce-website-development')->name('E-Commerce-website-development');
        Route::view('/E-Learning-LMS-development', 'front-pages.E-Learning-LMS-development')->name('E-Learning-LMS-development');
        Route::view('/education-coaching', 'front-pages.education-coaching')->name('education-coaching');
        Route::view('/flutter-app-development', 'front-pages.flutter-app-development')->name('flutter-app-development');
        Route::view('/google-ads-management', 'front-pages.google-ads-management')->name('google-ads-management');
        Route::view('/graphic-designing', 'front-pages.graphic-designing')->name('graphic-designing');
        Route::view('/healthcare-clinics', 'front-pages.healthcare-clinics')->name('healthcare-clinics');
        Route::view('/hotels-hospitality', 'front-pages.hotels-hospitality')->name('hotels-hospitality');
        Route::view('/iOS-applications-development', 'front-pages.iOS-applications-development')->name('iOS-applications-development');
        Route::view('/manufacturing-export', 'front-pages.manufacturing-export')->name('manufacturing-export');
        Route::view('/meta-ads-management', 'front-pages.meta-ads-management')->name('meta-ads-management');
        Route::view('/mobile-app-development', 'front-pages.mobile-app-development')->name('mobile-app-development');
        Route::view('/NGO-Non-Profits', 'front-pages.NGO-Non-Profits')->name('NGO-Non-Profits');
        Route::view('/retail-E-Commerce-D2C', 'front-pages.retail-E-Commerce-D2C')->name('retail-E-Commerce-D2C');
        Route::view('/search-engine-optimisation', 'front-pages.search-engine-optimisation')->name('search-engine-optimisation');
        Route::view('/social-media-marketing', 'front-pages.social-media-marketing')->name('social-media-marketing');
        Route::view('/travel-tourism', 'front-pages.travel-tourism')->name('travel-tourism');
        Route::view('/video-creations', 'front-pages.video-creations')->name('video-creations');
        Route::view('/website-design-development', 'front-pages.website-design-development')->name('website-design-development');
    });

});


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

        Route::get('/logout', [LogoutController::class, 'logout']);

        Route::get('/seo', [SeoController::class, 'index'])->name('seo.index');
        Route::put('/seo/{id}', [SeoController::class, 'update'])->name('seo.update');

        // Admin Settings routes
        Route::view('/admin-setting/whatsapp', 'admin.admin-settings.whatsapp')->name('admin-setting.whatsapp');
        Route::view('/admin-setting/sms-api', 'admin.admin-settings.sms-api')->name('admin-setting.sms-api');
        Route::view('/admin-setting/delivery-setting', 'admin.admin-settings.delivery-setting')->name('admin-setting.delivery-setting');
        Route::view('/security/security-settings', 'admin.security.security-settings')->name('security.security-settings');


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

        Route::view('/templates-setting', 'admin.admin-settings.template-setting')->name('templates.template-setting');

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
