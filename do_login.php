<?php
if(isset($_POST['submit'])){
    if($_POST['username'] == 'engine' &&  md5($_POST['password']) == '54eca697628137955e3ef2925ef887af'){
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