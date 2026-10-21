<?php

namespace App\Providers;
use App\Models\SeoPage;
use App\Models\DynamicPage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $name = Route::currentRouteName();
            $general = \App\Models\Setting::first();
            $view->with(
                [
                    'seo' => $name ? SeoPage::forKey($name) : null,
                    'general' => $general,
                    'footerPages'=> DynamicPage::active()->orderBy('id')->get(),
                ]
            );
        });



    }
}
