<?php
include "!php/!function/func_mysql.php";
$conn=mysqlC();
$sql="select * FROM _colors";
$result=MSQ($conn,$sql);
$row="";
while($readMSF=MSF($result)){
    $row.="
    <tr>
        <td>
            {$readMSF['name']}
        </td>
        <td>
            {$readMSF['value']}
        <td>
    </tr>
    ";
}
?>