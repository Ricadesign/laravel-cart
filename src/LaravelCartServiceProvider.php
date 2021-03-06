<?php

namespace Ricadesign\LaravelCart;

use Illuminate\Support\ServiceProvider;

class LaravelCartServiceProvider extends ServiceProvider 
{
     /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        // $this->loadViewsFrom(__DIR__.'/views', 'contact');
        // $this->publishes([
        //     __DIR__.'/views' => resource_path('views/vendor/contact'),
        // ]);
        // $this->publishes([
        //     __DIR__.'/config/contact.php' => config_path('contact.php'),
        // ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Ricadesign\LaravelCart\CartController');
        // $this->mergeConfigFrom(
        //      __DIR__.'/config/contact.php', 'contact'
        //  );
    }
}

