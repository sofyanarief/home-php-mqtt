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
}else if($_POST['action'] == 'get'){
    switch ($_POST['ctrltype']) {
        case 'swonoff':
            getcontrolswonoff($_POST['swname']);
            break;
        
        default:
            break;
    }
}

function setcontrolswonoff($setstatus, $swname){
    // $mqtt = new MqttClient($server, $port, $clientId);
    // $mqtt->connect();
    $GLOBALS['mqtt']->publish($swname, $setstatus, 0);
    $GLOBALS['mqtt']->disconnect();
    echo json_encode('done');
}

function getcontrolswonoff($swname){
    include '../common/sqlite/sqlitesvc.php';
    $dbsvc = new Sqlitesvc('../common/sqlite/subs-db.sqlite');
    $ret = $dbsvc->dbselect("tbl_subs",null,"topic_subs = '$swname'","timestamp_subs","DESC");
    $ret = $ret[0]['value_subs'];
    echo json_encode($ret);
}

?>