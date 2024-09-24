<?php

return [

    'url' => env('TBC_PAYMENT_URL','https://api.tbcbank.ge/v1/'),

    'client_id' => env('TBC_CLIENT_ID'),

    'client_secret' => env('TBC_CLIENT_SECRET'),

    'api_key' => env('TBC_API_KEY'),

    'callback_url' => env('TBC_CALLBACK_URL'),
];
