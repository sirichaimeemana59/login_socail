<?php

return [

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '4427296107300556',
        'client_secret' => '456d8ee8ab78d49a47acf02c220f4381',
        'redirect' => 'http://localhost:8000/auth/facebook/callback/',
    ],

    'google' => [
        'client_id' => '590569648188-o5hbba23ell7f1aqffg2f4u7n2kju5bc.apps.googleusercontent.com',
        'client_secret' => 'gRChoNwqfV645qq1UDwbItKi',
        'redirect' => 'http://localhost:8000/auth/google/callback/',
    ],

];
