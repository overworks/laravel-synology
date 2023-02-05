<?php

namespace Minhyung\Synology;

use Illuminate\Support\Facades\Http;
use Minhyung\Synology\Apis\Api;
use Minhyung\Synology\Apis\Info;

class Synology
{
    public readonly string $dsm_url;

    public function __construct()
    {
        $this->dsm_url = config('synology.dsm_url');
    }

    public function info()
    {
        return new Info($this);
    }
}
