<?php

namespace Savvy\Laravel;

use Illuminate\Support\ServiceProvider;

class SavvyServiceProvider extends ServiceProvider
{
    public $bindings = [
        Contracts\Client::class => Services\DirectClient::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/savvy.php';

        $this->publishes([$configPath => config_path('savvy.php')], 'config');
        $this->mergeConfigFrom($configPath, 'savvy');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Savvy\Client::class, function($app) {
            return new \Savvy\Client(config('savvy'));
        });
    }
}
