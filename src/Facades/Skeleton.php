<?php

namespace Exolnet\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Exolnet\Skeleton\SkeletonClass
 */
class Skeleton extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'skeleton';
    }
}
