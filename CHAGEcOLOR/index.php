<?php 
/*-------------삭제-------------------
if(isset($_POST['color']))
{$color= $_POST['color'];}
else{
    $color="black";
}
//--------------------------------*/
$color="a56878";
include "!include/header.php"?>

<?php 
//include "!include/삭제해.html"
?>

<div id="RefreshPage" onclick="location.href='.'">
    !!go Color!
</div>

<div id="columns">
    <?php include "!include/!menu/!LEFT/cloth.html"?>
        <?php $cloth="index";
            if(isset($_POST["cloth"])){$cloth=$_POST["cloth"];
                $_SESSION[$pageid.'cloth']=$cloth;}else if(isset($_SESSION[$pageid.'cloth'])){
                $cloth=$_SESSION[$pageid.'cloth'];}
        ?>
    <?php include "!include/man.php"?>
    <?php include "!include/!menu/!right/".$cloth.".html"?>
</div>