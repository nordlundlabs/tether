<?php

namespace NordlundLabs\Tether;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use NordlundLabs\Tether\Commands\TetherCommand;

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
