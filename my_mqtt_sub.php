<?php
require __DIR__ . '/vendor/autoload.php';

$server   = '192.168.1.2';
$port     = 1883;
$clientId = rand(5, 15);

use PhpMqtt\Client\Examples\Shared\SimpleLogger;
use PhpMqtt\Client\Exceptions\MqttClientException;
use PhpMqtt\Client\MqttClient;

// $mqtt = new \PhpMqtt\Client\MqttClient($server, $port, $clientId);
// pcntl_async_signals(true);

// pcntl_signal(SIGINT, function (int $signal, $info) use ($mqtt) {
//     $mqtt->interrupt();
// });
// $mqtt->connect();
// $mqtt->subscribe('heaterlt2', function ($topic, $message) {
//     echo sprintf("Received message on topic [%s]: %s\n", $topic, $message);
// }, 0);
// $mqtt->loop(true);
// $mqtt->disconnect();

$mqtt = new \PhpMqtt\Client\MqttClient($server, $port, $clientId);
$mqtt->connect();
$mqtt->subscribe('heaterlt2', function ($topic, $message) {
    echo sprintf("Received message on topic [%s]: %s\n", $topic, $message);
}, 0);
$mqtt->loop(true);
$mqtt->disconnect();
?>