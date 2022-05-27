<?php

namespace Helaplus\Themes\Facades;

use Illuminate\Support\Facades\Facade;

class Themes extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'themes';
    }
}
