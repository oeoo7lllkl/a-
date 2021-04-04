<?php
$conn=msC();
##############################
/*#######*/ $I=8; /*#######*/
##############################
//================================ clothes ====================================
########################################
/*#######*/ $count_column=4; /*#######*/
########################################
$sql="select * FROM clothes";
$result=msQ($conn,$sql);
$N=$_*$count_column*$I;
$table_clothes="<table style='width:$N%;'>";
$table_clothes.="
<tr>
    <th>
        id
    </th>
    <th>
        name
    <th>
    <th>
        colorName
    <th>
    <th>
        value
    <th>
</tr>
";
while($row=msFA($result)){
    $table_clothes.="
    <tr>
        <td>
            {$row['id']}
        </td>
        <td>
            {$row['name']}
        <td>
        <td>
            {$row['colorName']}
        <td>
        <td>
            {$row['value']}
        <td>
    </tr>
    ";
}
$table_clothes.="</table>";
//================================ options ====================================
########################################
/*#######*/ $count_column=3; /*#######*/
########################################
$sql="select * FROM options";
$result=msQ($conn,$sql);
$N=$_*$count_column*$I;
$table_options="<table style='width:$N%;'>";
$table_options.="
<tr>
    <th>
        text
    </th>
    <th>
        name
    <th>
    <th>
        value
    <th>
</tr>
";
while($row=msFA($result)){
    $table_options.="
    <tr>
        <td>
            {$row['text']}
        </td>
        <td>
            {$row['name']}
        <td>
        <td>
            {$row['value']}
        <td>
    </tr>
    ";
}
$table_options.="</table>";
//================================ colors ====================================
########################################
/*#######*/ $count_column=3; /*#######*/
########################################
$sql="select * FROM _colors";
$result=msQ($conn,$sql);
$N=$_*$count_column*$I;
$table_colors="<table style='width:$N%;'>";
$table_colors.="
<tr>
    <th>
        id
    </th>
    <th>
        name
    <th>
    <th>
        value
    <th>
</tr>
";
while($row=msFA($result)){
    $table_colors.="
    <tr>
        <td>
            {$row['id']}
        </td>
        <td>
            {$row['name']}
        <td>
        <td>
            {$row['value']}
        <td>
    </tr>
    ";
}
$table_colors.="</table>";