<?php

namespace Keraken\Zaman\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Zaman
 * @package Keraken\Zaman
 * @author  Tartan <iamtartan@gmail.com>
 */
class Zaman extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor ()
    {
        return 'Keraken\Zaman\Helpers\PersianDateHelper';
    }
}