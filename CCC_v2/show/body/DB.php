<?php
include "hidden/css/DB.php";
?>
<?php
// d($_SESSION['settingid']);
$S=$_SESSION['settingid'];
include "hidden/tables/$S.php";
if($S==1){
    makeRow("options",$table_options);
    makeRow("colors",$table_colors);
    makeRow("clothes",$table_clothes);
 }else{
    makeRow("Options",$table_options,"Colors",$table_colors);
    makeRow("Clothes",$table_clothes,null,null);
}?>
