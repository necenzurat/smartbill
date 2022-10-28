<?php

namespace Necenzurat\SmartBill;

use Illuminate\Support\ServiceProvider;

class SmartBillServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'smartbill');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'smartbill');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            //sdd(__DIR__);
            $this->publishes([
                __DIR__.'/../config/smartbill.php' => config_path('smartbill.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/smartbill'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/smartbill'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/smartbill'),
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
        $this->mergeConfigFrom(__DIR__.'/../config/smartbill.php', 'smartbill');

        // Register the main class to use with the facade
        $this->app->singleton('smartbill', function () {
            return new SmartBill;
        });
    }
}
