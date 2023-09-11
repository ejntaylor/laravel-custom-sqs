<?php

namespace Ejntaylor\LaravelCustomSqs;

use Ejntaylor\LaravelCustomSqs\Commands\LaravelCustomSqsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCustomSqsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-custom-sqs')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-custom-sqs_table')
            ->hasCommand(LaravelCustomSqsCommand::class);
    }
}
