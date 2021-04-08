<?php
function makeRow($title,$name,$title2,$name2){
    ?>
    <div class="row">
        <div class="middle">
            <div class="table">
            <div class="title">
            <?=$title?>
            </div>
            <?=$name?>
            </div>
            <div class="table">
            <div class="title">
            <?=$title2?>
            </div>
            <?=$name2?>
            </div>
        </div>
    </div>
    <?php
    }
?>