<?php
function makeRow($title,$name){
    ?>
    <div class="row">
        <div class="middle">
            <div class="table">
            <div class="title">
            <?=$title?>
            </div>
            <?=$name?>
            </div>
        </div>
    </div>
    <?php
    }
?>