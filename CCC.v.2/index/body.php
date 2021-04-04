<?php
include "show/part/topNavi.php";

if($_SESSION['body']=="index"){
    e("this is index body");
}else if($_SESSION['body']=="DB"){
    include "show/body/DB.php";
}
//------------------------------------------------
// include "page/html_box.php";
// e($_SESSION['body']);
?>