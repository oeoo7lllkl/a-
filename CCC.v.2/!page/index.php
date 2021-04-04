<?php include "!css/index.php";?>

<?php include "!include/topNavi.php";?>

<?php if($_SESSION['htmlPage']=="DB"){
    include "!page/DB.php";
}else if($_SESSION['htmlPage']=="home"){
    include "!page/index.php";
}
v($_SESSION['htmlPage']);
?>