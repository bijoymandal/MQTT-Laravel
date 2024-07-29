<?php

namespace App\Services;

use PhpMqtt\Client\MqttClient;
use PhpMqtt\Client\ConnectionSettings;

class MQTTService
{
    protected $mqtt;

    public function __construct()
    {
        $host = config('mqtt.host');
        $port = config('mqtt.port');
        $clientId = config('mqtt.client_id');
        $username = config('mqtt.username');
        $password = config('mqtt.password');
        $protocol = config('mqtt.protocol');

        $this->mqtt = new MqttClient($host, $port, $clientId);

        $connectionSettings = (new ConnectionSettings)
            ->setUsername($username)
            ->setPassword($password)
            ->setUseTls($protocol === 'tls')
            ->setTlsSelfSignedAllowed(true);

        $this->mqtt->connect($connectionSettings, true);
    }

    public function publish($topic, $message)
    {
        $this->mqtt->publish($topic, $message, 0);
    }

    public function subscribe($topic, $callback)
    {
        $this->mqtt->subscribe($topic, $callback, 0);
    }

    public function __destruct()
    {
        $this->mqtt->disconnect();
    }
}
