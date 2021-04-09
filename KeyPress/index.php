<title>keydown</title>
<head>
    <?php 
    session_start();
    include "function.php";
    include "setting.php";
    include "-.php";
    include "css.php";
    ?>
</head>
<body onkeydown="keydown()">
    <div class="top">
        <div class="window">
            <div class="box">
                <?php include 'css-man.php'; include 'man.php';?>
            </div>
        </div>
    </div>
    <?php include "bottom.php";?>
</body>