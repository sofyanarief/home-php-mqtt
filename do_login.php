<?php
if(isset($_POST['submit'])){
    if($_POST['username'] == 'admin' &&  md5($_POST['password']) == '21232f297a57a5a743894a0e4a801fc3'){
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header("location: dashboard.php");
    }else{
        header("location: login.php");
    }
}else{
    header("location: index.php");
}
?>