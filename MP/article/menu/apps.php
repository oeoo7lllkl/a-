<style>
<?php

$app_row=2;
$app_width=100;
$app_margin=5;
$app_domain=$app_width+2*$app_margin;
?>
.apps{margin:0 auto;width:<?=$app_domain*$app_count/$app_row?>;
}
.app{
    background:white;cursor:hand;
    color:black;
    width: <?=$app_width?>;
    height: <?=$app_width?>;
    margin: <?=$app_margin?>;
    font-size:16;
    float:left;
    display:flex;align-items:center;
}.app:hover{opacity:50%;}
.box{opacity:80%;display:none;
    width:<?=$app_domain?>;
    height:<?=$app_domain?>;
    background:red;
    position:absolute;
}
</style>
<div class="box"></div>
<div class="apps">
    <?php
    function app($number,$name){?>
        <div id="app<?=$number?>"class="app"onclick="alert('app<?=$number?> clicked');">
            <div class="text">
                <?=$name?>
            </div>
        </div>
    <?php }
    for($i=0;$i<$app_count;$i++){
        app($i+1,$app_name[$i]);
    }
    ?>
</div>