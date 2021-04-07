<title>CCC</title>
<?php
include "mine/index.php";

include "header/firstSetting/index.php";

include "header/function/index.php";


include "header/topnavi.php";

include "header/{$_SESSION['main']}.php";

include "header/css/index.php";
include "header/css/topNavi.php";    
   




if($_SESSION['main']=="CCC"){
    $_SESSION['topnavi-where']="bottom";
}else{
    $_SESSION['topnavi-where']="top";
}
?>