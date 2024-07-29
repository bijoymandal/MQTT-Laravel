<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MQTTService;

class MqttController extends Controller
{
    protected $mqttService;

    public function __construct(MQTTService $mqttService)
    {
        $this->mqttService = $mqttService;
    }

    public function publishMessage(Request $request)
    {
        $topic = $request->input('topic');
        $message = $request->input('message');

        $this->mqttService->publish($topic, $message);

        return response()->json(['status' => 'Message published']);
    }

    public function subscribeToTopic($topic)
    {
        $this->mqttService->subscribe($topic, function ($topic, $message) {
            echo "Received message on topic [{$topic}]: {$message}\n";
        });

        return response()->json(['status' => 'Subscribed to topic']);
    }
}
