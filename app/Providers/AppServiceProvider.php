<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View as FacadesView;
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
    public function boot(): void
    {
        try {
             FacadesView::share('setting', Setting::first());
        } catch(\Exception $e) {
            // Database not ready

        }   
     }
}
