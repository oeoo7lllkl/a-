<?php
session_start();
$HP=array("index","DB","CCC");
############[ 시작페이지 ]########################
/*##########*/$index=0; /*###############*/
###############################################
if(!isset($_SESSION['main'])){
    $_SESSION['main']=$HP[$index];
}
$settingbody=$HP[$index];
?>