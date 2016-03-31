<?php

return [

    /*
      |--------------------------------------------------------------------------
      | Third Party Services
      |--------------------------------------------------------------------------
      |
      | This file is for storing the credentials for third party services such
      | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
      | default location for this type of information, allowing packages
      | to have a conventional place to find your various credentials.
      |
     */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],
    'mandrill' => [
        'secret' => '',
    ],
    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],
    'stripe'   => [
        'model'  => 'App\User',
        'key'    => '',
        'secret' => '',
    ],
    'facebook' => [
        'client_id'     => '268334416831084',
        'client_secret' => '5befaf46c0fca2e0fabb8df13b44ae5e',
        'redirect'      => 'http://localhost:81/dacn/facebook-login-callbak',
    ],
];
