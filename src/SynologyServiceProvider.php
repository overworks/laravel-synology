<?php

namespace Minhyung\Synology;

class SynologyServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-synology');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-synology');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $configPath = __DIR__ . '/../config/synology.php';
            $this->publishes([
                $configPath => config_path('synology.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-synology'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-synology'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-synology'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $configPath = __DIR__ . '/../config/synology.php';
        $this->mergeConfigFrom($configPath, 'synology');

        // Register the main class to use with the facade
        $this->app->singleton(Synology::class, function ($app) {
            return new Synology;
        });

        //$this->app->alias(Synology::class, 'synology');
    }
}
