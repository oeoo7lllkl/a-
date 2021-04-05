<style>
.row{
    opacity:80%;
    padding:<?=$_*5?> auto;
    width:100%;
    background:rgb(40,63,21);/*녹*/
}
.middle{
    display:flex;
    background:rgb(85,127,42);/*녹*/
    <?php if($W==412){?>
        width:<?=$_*450?>;
        padding:<?=$_*2?>;
    <?php }else if($W==768){?>
        width:<?=850?>;
        padding:<?=$_*0.0001?>;
    <?php }else{?>
        width:<?=$_*1200?>;
        padding:<?=$_*2?>;
    <?php }?>
    margin:0 auto;
}
.table{
    background:rgb(85,187,85);/*녹*/
    margin: 5 auto;
    width:<?=$_*350?>;
    <?php
    if($W==412){?>
        width:<?=$_*430?>;<?php
    }else if($W==768){?>
        width:<?=415?>;
    <?php }else{?>
        width:<?=560?>;
    <?php }
    ?>
}
table{<?php $wth=$R*10;?>
    background:rgb(85,255,170);/*녹*/
    opacity:80%;
    margin:0 auto; 
    text-align:center;
    padding:<?=$wth?> 0 <?=$wth?> <?=$wth?>;
    <?php
    if($W==412){?>
        font-size:<?=$W*0.1?>;<?php
    }else
    if($W==768){?>
        font-size:<?=$W*0.028?>;<?php
    }else{?>
        font-size:<?=$W*0.02?>;<?php
    }
    ?>
}
th{
    padding-left:<?=$wth?>;
    /* background:red; */
    border-bottom:<?=$wth/10?>px solid white;
}
td{
    border-top:<?=$wth/20?>px solid rgb(40,125,80);/*녹*/
}
</style>