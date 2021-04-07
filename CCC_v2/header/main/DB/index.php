<?php
// d($_SESSION['settingid']);
$S=$_SESSION['settingid'];//아이디별로 나눈다
include "header/DB/function/$S.php";
include "header/DB/tables/$S.php";

include "header/DB/css/index.php";
include "header/DB/css/$S.php";
?>