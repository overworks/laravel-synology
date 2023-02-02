<?php

if (!function_exists('synology')) {
    /**
     * @return \Minhyung\Synology\Synology
     */
    function synology()
    {
        return app(\Minhyung\Synology\Synology::class);
    }
}
