<body>
    <?php
    include "hidden/topnavi.php";

    if($_SESSION['main']=="CCC"){
        $_SESSION['topnavi-where']="bottom";
    }else{
        $_SESSION['topnavi-where']="top";
    }

    if($_SESSION['topnavi-where']=="top"){
        include "show/part/topNavi.php";
    }

    if($_SESSION['main']=="index"){
        e("this is index main");
    }else{
        include "show/main/{$_SESSION['main']}.php";
    }

    if($_SESSION['topnavi-where']=="bottom"){
        include "show/part/topNavi.php";
    }
    ?>
</body>