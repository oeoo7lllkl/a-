<?php
$HP=array("index","DB","CCC","keypress");
############[ 시작페이지 ]########################
/*##########*/$index=2; /*###############*/
###############################################
if(!isset($_SESSION['main'])){
    $_SESSION['main']=$HP[$index];
}
$settingbody=$HP[$index];
?>