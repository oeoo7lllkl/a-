<?php
include "header/function/mysql.php";
if(in_array($_SESSION['main'],array("index","DB","CCC"))){
    include "header/function/{$_SESSION['main']}/index.php";
}
?>