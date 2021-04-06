<?php
include "hidden/topnavi.php";
if($_SESSION['topnavi-where']=="top"){
    include "show/part/topNavi.php";
}

if($_SESSION['main']=="index"){
    e("this is index main");
}else if($_SESSION['main']=="DB"){
    include "show/main/DB.php";
}else if($_SESSION['main']=="CCC"){
    include "show/main/CCC.php";
}

if($_SESSION['topnavi-where']=="bottom"){
    include "show/part/topNavi.php";
}
?>