<?php
session_start();
$HP=array("index","DB","CCC");
############[ 시작페이지 ]########################
/*##########*/$index=2; /*###############*/
###############################################
if(!isset($_SESSION['body'])){
    $_SESSION['body']=$HP[$index];
}
$settingbody=$HP[$index];
?>