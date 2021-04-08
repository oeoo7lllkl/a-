<title>CCC</title>
<?php
include "mine/index.php";

include "header/hidden/topnavi.php";
include "header/firstSetting/index.php";

include "header/function/index.php";


include "header/css/index.php";
include "header/css/topNavi.php";    


if(in_array($_SESSION['main'],array("index","DB","CCC"))){
    include "header/main/{$_SESSION['main']}.php";
}




if($_SESSION['main']=="CCC"){
    $_SESSION['topnavi-where']="bottom";
}else{
    $_SESSION['topnavi-where']="top";
}
?>