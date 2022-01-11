<?php

namespace AlirezaTahriri\MiAlert;

use AlirezaTahriri\MiAlert\Middleware\MiAlertMiddleware;
use Illuminate\Support\ServiceProvider;

class MiAlertServiceProvider extends ServiceProvider {
    
    public function register()
    {
        $this->app->singleton('mi-alert', function () {
            return new MiAlert;
        });

        $this->mergeConfigFrom(__DIR__ . '\config\mialert-config.php', 'mi-alert');
    }

    public function boot() 
    {
        require __DIR__ . '\routes\mialert-web.php';
        
        $this->loadViewsFrom(__DIR__ . '\views', 'mi-alert');

        // publishes mi-alert

        $this->app['router']->middleware('mi-alert', MiAlertMiddleware::class);

        $this->publishes([
            __DIR__ . '/config/mialert-config.php' => config_path('mi-alert.php'),
        ], 'mialert-config');
        
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/mi-alert'),
        ], 'mialert-views');

        $this->publishes([
            __DIR__ . '/database' => database_path('migrations'),
        ], 'mialert-database');
    }
}