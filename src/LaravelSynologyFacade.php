<?php

namespace Minhyung\LaravelSynology;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Minhyung\LaravelSynology\Skeleton\SkeletonClass
 */
class LaravelSynologyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-synology';
    }
}
