<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'url' => env('SYNOLOGY_API_URL', 'http://localhost:5000/webapi/'),
    'session' => env('SYNOLOGY_API_SESSION', 'laravel-synology'),
    'account' => env('SYNOLOGY_API_ACCOUNT', 'admin'),
    'password' => env('SYNOLOGY_API_PASSWORD', 'password'),
];
