<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        View::share('author', 'Медведев Алексей');

        View::composer('user*', function ($view) {
            $view->with('balance', 123);
        });

        View::composer('admin*', function ($view) {
            $view->with('balance', 123);
        });
    }
}
