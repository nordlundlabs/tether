<?php

namespace NordlundLabs\Tether\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NordlundLabs\Tether\Tether
 */
class Tether extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \NordlundLabs\Tether\Tether::class;
    }
}
