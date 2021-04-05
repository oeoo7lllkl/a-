<?php
$tables=0;
if($_SESSION['settingid']==3)$tables=1;
include "hidden/tables/$tables.php";

include "hidden/css/DB.php";
?>
<?php
if($W==412){?>
    <div class="row">
        <div class="middle">
            <div class="table">
            <?=$table_options?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="middle">
            <div class="table">
            <?=$table_colors?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="middle">
            <div class="table">
            <?=$table_clothes?>
        </div>
    </div>
    <div class="row">
        <div class="middle">
            <div class="table">
            </div>
        </div>
    </div>
<?php }else{?>
<div class="row">
    <div class="middle">
        <div class="table">
        <?=$table_options?>
        </div>
        <div class="table">
        <?=$table_colors?>
        </div>
    </div>
</div>
<div class="row">
    <div class="middle">
        <div class="table">
        <?=$table_clothes?>
        </div>
        <div class="table">
        </div>
    </div>
</div>
<?php }?>
