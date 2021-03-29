<?php
/*-------------삭제------------------
if(isset($_POST['color']))
{$color= $_POST['color'];}
else{
    $color="black";
}
//--------------------------------*/
?>

<header>
                                                                                        <meta charset="utf-8">
    <link rel="stylesheet" href="!CSS/index.css">
        <?php
        session_start();
        include "!include/!-/_pageid.php";

        // 포스트 모자색을 받으면 적용
        if(isset($_POST['color_hat']))
        {$color_hat= $_POST['color_hat'];
            //세션 모자색도 변경
            $_SESSION[$_pageid.'color_hat']=$color_hat;}
        // 세션에 모자색 적용 
        else if(isset($_SESSION[$_pageid.'color_hat'])){
            $color_hat=$_SESSION[$_pageid.'color_hat'];
        }
        else{//세션도 포스트도 없으면 모자없음
            $color_hat="black";
        }

        // 포스트 자켓색을 받으면 적용
        if(isset($_POST['color_jacket']))
        {$color_jacket= $_POST['color_jacket'];
            //세션 자켓색도 변경
            $_SESSION[$_pageid.'color_jacket']=$color_jacket;}
        // 세션에 자켓색 적용 
        else if(isset($_SESSION[$_pageid.'color_jacket'])){
            $color_jacket=$_SESSION[$_pageid.'color_jacket'];
        }
        else{//세션도 포스트도 없으면 자켓없음
            $color_jacket="black";
        }
        ?>
    <?php $color="a56878";include "!CSS/man.php"?>
    
    <title>!!dddd</title>

</header>

<?php // include "!include/!-/____삭제해.html"?>