<?php

namespace Ejntaylor\LaravelCustomSqs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ejntaylor\LaravelCustomSqs\LaravelCustomSqs
 */
class LaravelCustomSqs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ejntaylor\LaravelCustomSqs\LaravelCustomSqs::class;
    }
}
