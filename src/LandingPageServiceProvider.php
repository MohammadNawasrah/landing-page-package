<?php

namespace Mnawasrah\LandingPagePackage;

use Illuminate\Support\ServiceProvider;

class LandingPageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Publish views to the Laravel app's resources/views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'landing-page-package');

        // Optionally, allow the views to be published
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/landing-page-package'),
        ], 'views');

         // Publish the config file
        $this->publishes([
            __DIR__ . '/../config/landing-page.php' => config_path('landing-page.php'),
        ], 'config');
    }
}
