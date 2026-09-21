<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Force Laravel to use HTTPS and trust proxies when running in Codespaces
    if (env('CODESPACES') || str_contains(request()->header('X-Forwarded-Host'), 'github.dev')) {
        URL::forceScheme('https');
        //request()->server->set('HTTPS', env('HTTPS', 'on'));
    }
    
    }
}
