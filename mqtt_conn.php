<?php
require('../vendor/autoload.php');

use \PhpMqtt\Client\MqttClient;
use \PhpMqtt\Client\ConnectionSettings;

include '../common/mqtt-client/mqtt-server-config.php';

$connectionSettings  = new ConnectionSettings();
$connectionSettings
    ->setUsername($username)
    ->setPassword($password)
    ->setLastWillQualityOfService(1);

$mqtt = new MqttClient($server, $port, $clientId);
$mqtt->connect($connectionSettings, $clean_session);

?>