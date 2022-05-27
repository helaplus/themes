<?php

namespace Helaplus\Themes;

use Illuminate\Support\ServiceProvider;

class ThemesServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'helaplus');
         $this->loadViewsFrom(__DIR__.'/../resources/argon', 'helaplusthemes');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/themes.php', 'themes');

        // Register the service the package provides.
        $this->app->singleton('themes', function ($app) {
            return new Themes;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['themes'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
//        // Publishing the configuration file.
//        $this->publishes([
//            __DIR__.'/../config/themes.php' => config_path('themes.php'),
//        ], 'themes.config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/argon/layouts' => base_path('resources/views/argon/layouts'),
            __DIR__.'/../resources/argon/partials' => base_path('resources/views/argon/partials'),
            __DIR__.'/../resources/argon/public' => base_path('public/'),
        ], 'themes.views');

//        // Publishing assets.
//        $this->publishes([
//            __DIR__.'/../resources/argon/public' => public_path('helaplustheme'),
//        ], 'assets');

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/helaplus'),
        ], 'themes.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
