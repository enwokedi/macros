<?php

namespace App\Providers;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Str::macro('partNumber', function($part) {
            return 'AB-' . substr($part, 0, 3) . '-' . substr($part, 3);
        });

        ResponseFactory::macro('errorJson', function($message = 'Default error message') {
            return [
                'message' => $message,
                'error_code' => 123,
            ];
        });
    }
}
