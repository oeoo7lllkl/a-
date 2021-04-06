<?php
include "hidden/css/CCC.php";

include "hidden/css/clothes.php";
include "hidden/css/man.php";
include "hidden/css/colors.php";

include "hidden/clothes.php";
include "hidden/colors.php";
?>
<div class="box">
    <div class="display-flex outside-buttons">
        <?php 
        include "show/part/clothes.php";
        include "show/part/man.php";
        include "show/part/colors.php";
        ?>
    </div>
    <div class="options">옵션들</div>
</div>
<div class="note">
    화면 
    <br> 높이: <?=$H?>, 넓이: <?=$W?>
</div>