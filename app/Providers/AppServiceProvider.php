<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Models\SeoPage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
                ]
            );
        });



    }
}
