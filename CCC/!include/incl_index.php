<?php
include "!function/func_mysql.php";
$conn=mysqlC();
$sql="select * FROM _colors";
$result=MSQ($conn,$sql);
?>