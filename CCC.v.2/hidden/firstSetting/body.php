<?php
session_start();
$HP=array("index","DB");
############[ 시작페이지 ]########################
/*##########*/$index=0; /*###############*/
###############################################
if(!isset($_SESSION['body'])){
    $_SESSION['body']=$HP[$index];
}
$settingbody=$HP[$index];
?>