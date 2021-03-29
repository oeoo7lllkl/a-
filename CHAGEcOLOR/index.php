<?php include "!include/!-/header.php"?>

<div id="RefreshPage" onclick="location.href='.'">
    !!go Color!
</div>

<div id="columns">
    <?php include "!include/!menu/!LEFT/cloth.php"?>
        <?php $cloth="index";
            if(isset($_POST["cloth"])){$cloth=$_POST["cloth"];
                $_SESSION[$_pageid.'cloth']=$cloth;}else if(isset($_SESSION[$_pageid.'cloth'])){
                $cloth=$_SESSION[$_pageid.'cloth'];}
        ?>
    <?php include "!include/!-/man.php"?>
    <?php include "!include/!menu/!right/".$cloth.".php"?>
</div>