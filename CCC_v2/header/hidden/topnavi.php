<?php
if(isset($_POST['topnavi'])){
    if($_POST['topnavi']=="main"){
        $_SESSION['main']=$_POST['main'];
    }else if($_POST['topnavi']=="reset"){
        session_destroy();
        session_start();
    }else if($_POST['topnavi']=="memo"){
        if($_SESSION['hide-memo']==""){
            $_SESSION['hide-memo']=" hidden";
        }else{
            $_SESSION['hide-memo']="";
        }
    }
    // else if($_POST['topnavi']=="where"){
    //     if($_SESSION['topnavi-where']=="top"){
    //         $_SESSION['topnavi-where']="bottom";
    //     }else{
    //         $_SESSION['topnavi-where']="top";
    //     }
    // }
}
if(!isset($_SESSION['hide-memo'])){
    $_SESSION['hide-memo']="";
}
// if(!isset($_SESSION['topnavi-where'])){
//     $_SESSION['topnavi-where']="top";
// }
?>
<form hidden action="." method="post">
<input type="hidden" name="topnavi" id="topnavi">
<input type="hidden" name="main" id="topnavi_main" value="0">
<input type="submit" id="topnavisubmit">
</form>