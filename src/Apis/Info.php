<?php

namespace Minhyung\Synology\Apis;

use Minhyung\Synology\Synology;

class Info extends Api
{
    protected $cgi_path = '/webapi/query.cgi';
    protected $api_name = 'SYNO.API.Info';
    protected $version = '1';

    public function __construct(Synology $synology)
    {
        parent::__construct($synology);
    }

    public function query()
    {
        return $this->request('query', ['query' => 'all']);
    }
}
