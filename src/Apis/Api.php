<?php

namespace Minhyung\Synology\Apis;

use Illuminate\Support\Facades\Http;
use Minhyung\Synology\Synology;

abstract class Api
{
    protected Synology $synology;

    protected $cgi_path;
    protected $api_name;
    protected $version;

    public function __construct(Synology $synology)
    {
        $this->synology = $synology;
    }

    public function request($method, $params)
    {
        $params = array_merge($params, [
            'api' => $this->api_name,
            'version' => $this->version,
            'method' => $method,
        ]);
        $response = Http::get($this->synology->dsm_url . $this->cgi_path, $params);

        return $response->json();
    }
}
