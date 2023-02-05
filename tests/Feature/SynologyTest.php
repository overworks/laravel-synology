<?php

namespace Minhyung\Synology\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Minhyung\Synology\Synology;
use Minhyung\Synology\Apis\Info;
use Orchestra\Testbench\TestCase;

class SynologyTest extends TestCase
{
    private Synology $synology;

    protected function setUp(): void
    {
        parent::setUp();

        Config::set('synology.dsm_url', $_ENV['SYNOLOGY_DSM_URL']);

        $this->synology = new Synology();
    }

    public function testInfo(): void
    {
        $info = $this->synology->info();

        $this->assertNotNull($info);
        $this->assertInstanceOf(Info::class, $info);

        $response = $info->query();
        $this->assertTrue($response['success']);
    }
}
