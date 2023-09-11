<?php

namespace Ejntaylor\LaravelCustomSqs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ejntaylor\LaravelCustomSqs\Commands\LaravelCustomSqsCommand;

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
