<?php
    session_start();
    
    if(!isset($_SESSION['article'])){
        $_SESSION['article']="main";
    }
    if(!isset($_SESSION['clicked'])){
        $_SESSION['clicked']=array();
    }
    $_SESSION['menu_id_click']="";
    $_SESSION['app_id_click']="";
?>