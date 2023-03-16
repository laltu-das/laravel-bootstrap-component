<?php

namespace Laltu\LaravelBootstrapComponent;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\LaravelBootstrapComponent\Skeleton\SkeletonClass
 */
class LaravelBootstrapComponentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-bootstrap-component';
    }
}
