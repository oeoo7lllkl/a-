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
    }
}
?>
<form hidden action="." method="post">
<input type="hidden" name="topnavi" id="topnavi">
<input type="submit" id="topnavisubmit">
</form>