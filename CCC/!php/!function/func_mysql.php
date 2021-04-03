<?php
include "!php/!function/func_basic.php";
include "!php/!process/prcc_session.php";
include "!firstSetting/fsts_screenHeight.php";
include "!firstSetting/fsts_mysqlC.php";
function MSQ($conn,$sql){
    return mysqli_query($conn,$sql);
}
function MSF($result){
    return mysqli_fetch_array($result);
}
?>