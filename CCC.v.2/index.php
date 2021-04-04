<title>CCC</title>
<?php
session_start();
//-----------------------헤더-------------------------
include "!function/basic.php";

include "!firstSetting/screenHeight.php";
include "!firstSetting/mysqlC.php";
include "!firstSetting/startPage.php";

include "!function/mysql.php";
//-----------------------본문-------------------------
include "!page/index.php";
//------------------------------------------------
// include "!page/html_box.php";
?>

