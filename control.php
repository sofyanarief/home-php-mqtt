<?php
include 'mqtt_conn.php';
if($_POST['action'] == 'set'){
    switch ($_POST['ctrltype']) {
        case 'swonoff':
            if($_POST['setstatus'] == 0){
                $_POST['setstatus'] = 'off';
            }else{
                $_POST['setstatus'] = 'on';
            }
            setcontrolswonoff($_POST['setstatus'], $_POST['swname']);
            break;
        
        default:
            break;
    }
}else{
    // switch ($_POST['ctrltype']) {
    //     case 'swonoff':
    //         // if($_POST['setstatus'] == 0){
    //         //     $_POST['setstatus'] = 'off';
    //         // }else{
    //         //     $_POST['setstatus'] = 'on';
    //         // }
    //         getcontrolswonoff($_POST['swname']);
    //         break;
        
    //     default:
    //         break;
    // }
}

function setcontrolswonoff($setstatus, $swname){
    $mqtt = new \vendor\php-mqtt\src\Client\MqttClient($server, $port, $clientId);
    $mqtt->connect();
    $mqtt->publish($swname, $setstatus, 0);
    $mqtt->disconnect();
    echo json_encode('done');
}

// function getcontrolswonoff($swname){
//     global $mqtt;
//     $msg = 'ahay';
//     // $mqtt->subscribe($swname, function ($topic, $message) {
//     //     $msg = $message;
//     // }, 0);
//     // $mqtt->loop(true);
//     // $mqtt->disconnect();
//     echo json_encode($msg);
// }

?>