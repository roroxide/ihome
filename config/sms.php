<?php

return [

    'default' => 'melli',

    'melli' => [
        'service' => 'App\SmsProviders\Melli',
        'username' => '',
        'password' => '',
        'from' => '',
    ],

    'ghasedak' => [
        'service' => 'App\SmsProviders\Ghasedak',
        'apikey' => '',
    ],

    'kavenegar' => [
        'service' => 'App\SmsProviders\KaveNegar',
	'sender' => '',
	'date' => '',
	'type' => ''
    ]
];
