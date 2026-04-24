<?php

namespace MichaelOrenda\Ui;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Optional: merge config in future
        // $this->mergeConfigFrom(__DIR__.'/../config/ui.php', 'ui');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Load Package Views
        |--------------------------------------------------------------------------
        */
        $this->loadViewsFrom(
            __DIR__ . '/../resources/views',
            'ui'
        );

        /*
        |--------------------------------------------------------------------------
        | Register Blade Component Namespace
        |--------------------------------------------------------------------------
        */
        Blade::componentNamespace(
            'MichaelOrenda\\Ui\\View\\Components',
            'ui'
        );

        /*
        |--------------------------------------------------------------------------
        | Publish Assets (Alpine, JS, etc.)
        |--------------------------------------------------------------------------
        */
        $this->publishes([
            __DIR__ . '/../resources/js/ui.js' => public_path('vendor/ui/ui.js'),
        ], 'ui-assets');

        /*
        |--------------------------------------------------------------------------
        | Publish Views (Allow Overrides)
        |--------------------------------------------------------------------------
        */
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/ui'),
        ], 'ui-views');

        /*
        |--------------------------------------------------------------------------
        | Publish Config (Optional for future)
        |--------------------------------------------------------------------------
        */
        // $this->publishes([
        //     __DIR__ . '/../config/ui.php' => config_path('ui.php'),
        // ], 'ui-config');
    }
}