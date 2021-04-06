<?php
include "hidden/css/CCC.php";
include "hidden/css/clothes.php";
include "hidden/css/man.php";
include "hidden/clothes.php";
?>
<body>
    <div class="display-flex outside-buttons">
        <?php 
        include "show/part/clothes.php";
        include "show/part/man.php";
        include "show/part/colors.php";
        ?>
    </div>
    <div class="options">옵션들</div>
    <div class="note">
        화면 
        <br> 높이: <?=$H?>, 넓이: <?=$W?>
    </div>
</body>