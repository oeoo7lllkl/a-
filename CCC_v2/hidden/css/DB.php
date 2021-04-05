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
    <?php }else if($W==768){?>
        width:<?=850?>;
    <?php }else{?>
        width:<?=$_*750?>;
    <?php }?>
    margin:0 auto;
    padding:<?=$_*20?>;
}
.table{
    background:rgb(85,187,85);/*녹*/
    margin:0 auto;
    width:<?=$_*350?>;
    <?php
    if($W==412){?>
        width:<?=$_*430?>;<?php
    }else if($W==768){?>
        width:<?=475?>;
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
    }
    ?>
    <?php
    if($W==412){?>
        width:<?=$_*400?>;<?php
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