<?php
if(isset($_POST['topnavi'])){
    if($_POST['topnavi']=="index"){
        $_SESSION['body']="index";
    }else if($_POST['topnavi']=="DB"){
        $_SESSION['body']="DB";
    }else if($_POST['topnavi']=="reset"){
        session_destroy();
        session_start();
        $_SESSION['body']=$settingbody;
    }else if($_POST['topnavi']=="memo"){
        if($_SESSION['hide-memo']==""){
            $_SESSION['hide-memo']=" hidden";
        }else{
            $_SESSION['hide-memo']="";
        }
    }
}
if(!isset($_SESSION['hide-memo'])){
    $_SESSION['hide-memo']="";
}
?>
<form hidden action="." method="post">
<input type="hidden" name="topnavi" id="topnavi">
<input type="submit" id="topnavisubmit">
</form>