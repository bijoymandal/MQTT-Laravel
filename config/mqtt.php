<?php

return [
    'client_id' => env('MQTT_CLIENT_ID', 'laravel-mqtt-client'),
    'host' => env('MQTT_HOST', '127.0.0.1'),
    'port' => env('MQTT_PORT', 1883),
    'username' => env('MQTT_USERNAME', ''),
    'password' => env('MQTT_PASSWORD', ''),
    'certfile' => env('MQTT_CERTFILE', ''),
    'protocol' => env('MQTT_PROTOCOL', 'tcp'), // or 'tls'
];
