<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

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
<<<<<<< HEAD
        'client_id' => '',
        'client_secret' => 'aefc810b703c8f6d69facde3312c3244',
=======
        'client_id' => '1438335089670656',
        'client_secret' => 'c98f095300f769bc6efdfaa338c523e8',
>>>>>>> 5bc31c573272b14bf51bbfb8ac575833a3f5ed7f
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

//    'facebook' => [
//        'client_id' => env('1438335089670656'),
//        'client_secret' => env('c98f095300f769bc6efdfaa338c523e8'),
//        'redirect' => 'http://localhost:8000/login/facebook/callback',
//    ],



];
