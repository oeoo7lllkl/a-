<?php
include "hidden/css/DB.php";
// d($_SESSION['settingid']);
$S=$_SESSION['settingid'];//아이디별로 나눈다
include "hidden/function/$S.php";
include "hidden/css/$S.php";
include "hidden/tables/$S.php";
?>

<?php
include "show/part/rows.php";
?>