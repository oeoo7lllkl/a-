<html>
    <head>
        <title>MY PAGE</title>


            <?php
                include "base.php";
        
                include "form.php";
                include "PHPonSCRIPT.php";
                include "script.php";
                include "PHPunderSCRIPT.php";
        
                include "css.php";
            ?>
        
    </head>
    <body onkeypress="keyPress();">
        <header id="header"onclick="form_id.value='header_click';form.submit();">MY PAGE</header>
        <!-- 위치 보는 도구 -->
        <div class="ruler"></div>

        <article>
            <?php
                                                                                                // die($_SESSION['article']);
            include "article/{$_SESSION['article']}.php";
            ?>
        </article>
    </body>
</html>