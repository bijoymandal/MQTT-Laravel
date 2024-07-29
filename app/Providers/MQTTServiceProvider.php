<?php

namespace App\Providers;

use App\Services\MQTTService;
use Illuminate\Support\ServiceProvider;

class MQTTServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(MQTTService::class, function ($app) {
            return new MQTTService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

    }
}
