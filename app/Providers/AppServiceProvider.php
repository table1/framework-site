<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Facades\Markdown;
use Statamic\Statamic;

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
        Markdown::extend('default', function ($parser) {
            return $parser->withStatamicDefaults()->withHeadingPermalinks();
        });

        // Statamic::vite('app', [
        //     'resources/js/cp.js',
        //     'resources/css/cp.css',
        // ]);
    }
}
