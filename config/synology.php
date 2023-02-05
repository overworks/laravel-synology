<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'dsm_url' => env('SYNOLOGY_DSM_URL', 'http://your.synology.me:5000'),
    'session' => env('SYNOLOGY_API_SESSION', 'laravel-synology'),
    'account' => env('SYNOLOGY_API_ACCOUNT', 'admin'),
    'password' => env('SYNOLOGY_API_PASSWORD', 'password'),
];
