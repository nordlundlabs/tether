<?php

namespace NordlundLabs\Tether;

use NordlundLabs\Tether\Commands\TetherCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TetherServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tether')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tether_table')
            ->hasCommand(TetherCommand::class);
    }
}
