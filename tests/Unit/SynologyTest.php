<?php declare(strict_types=1);

namespace Minhyung\Synology\Tests\Unit;

use Illuminate\Support\Facades\Config;
use Minhyung\Synology\Synology;
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

    public function testDsmUrl(): void
    {
        $this->assertEquals($_ENV['SYNOLOGY_DSM_URL'], $this->synology->dsm_url);
    }
}
