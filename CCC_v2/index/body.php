<?php
include "hidden/topNavi.php";
if($_SESSION['topnavi-where']=="top"){
    include "show/part/topNavi.php";
}

if($_SESSION['body']=="index"){
    e("this is index body");
}else if($_SESSION['body']=="DB"){
    include "show/body/DB.php";
}else if($_SESSION['body']=="CCC"){
    include "show/body/CCC.php";
}

if($_SESSION['topnavi-where']=="bottom"){
    include "show/part/topNavi.php";
}
?>