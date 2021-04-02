<?php
include "../!include/!function/mysql.php";
$conn=mysqlC();
$sql="select * FROM _colors";
$result=MSQ($conn,$sql);
while($row=MSF($result)){
    echo "<li>{$row['name']}</li>";
}
?>
