<?php

namespace Minhyung\Synology\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Minhyung\LaravelSynology\Skeleton\SkeletonClass
 */
class Synology extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Minhyung\Synology\Synology::class;
    }
}
