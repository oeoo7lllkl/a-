<header>

    <meta charset="utf-8">
    <link rel="stylesheet" href="!CSS/index.css">
        <?php
        session_start();
        include "!include/_pageid.php";

        // 세션에 모자색 적용 
        if(isset($_SESSION[$_pageid.'color_hat'])){
            $color_hat=$_SESSION[$_pageid.'color_hat'];
        }
        ?>
        <?php
        // 포스트 모자색을 받으면 적용
        if(isset($_POST['color_hat']))
        {$color_hat= $_POST['color_hat'];
            //세션 모자색도 변경
            $_SESSION[$_pageid.'color_hat']=$color_hat;}
        else if(!isset($_POST['color_hat'])&isset($_SESSION[$_pageid.'color_hat'])){//세션도 포스트도 없으면 모자없음
            $color_hat="black";
        }
        ?>
    <?php include "!CSS/man.php"?>
    
    <title>!!dddd</title>

</header>