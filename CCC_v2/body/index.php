<body>
    <?php
    if($_SESSION['topnavi-where']=="top"){
        include "body/part/topNavi.php";
    }

    include "body/main/{$_SESSION['main']}.php";

    if($_SESSION['topnavi-where']=="bottom"){
        include "body/part/topNavi.php";
    }
    ?>
</body>