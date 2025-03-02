<?php

namespace Larix\Larix;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LarixServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Views - Load and Publish
        $viewPackageFolder = __DIR__ . '/Components/Views';
        $viewProjectFolder = resource_path('views/vendor/larix-labs/larix');
        $this->loadViewsFrom($viewPackageFolder, 'larix');
        $this->publishes([$viewPackageFolder => $viewProjectFolder], ['larix', 'larix-views']);

        // Translations - Load and Publish
        $translationsPackageFolder = __DIR__ . '/Translations';
        $translationsProjectFolder = app()->langPath('vendor/larix-labs/larix');
        $this->loadTranslationsFrom($translationsPackageFolder, 'larix');
        $this->publishes([$translationsPackageFolder => $translationsProjectFolder], ['larix', 'larix-translations']);

        // Components - Register
        Blade::componentNamespace('LarixLabs\\Larix\\Components\\Classes', 'larix');

        // Migrations - Load
        $migrationsPackageFolder = __DIR__ . '/Migrations';
        $this->loadMigrationsFrom($migrationsPackageFolder);

        // Config - Merge and Publish
        $configPackageFolder = __DIR__ . '/Config/larix.php';
        $configProjectFolder = config_path('larix.php');
        $this->mergeConfigFrom($configPackageFolder, 'larix');
        $this->publishes([$configPackageFolder => $configProjectFolder], ['larix', 'larix-config']);
    }

    public function register()
    {
        // Register services, routes, etc
    }
}
