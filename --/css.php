<?php
// a($ww);

$ww=$_SESSION['window-width'];
$wh=$_SESSION['window-height'];

$bt=$_SESSION['box-top'];
$bl=$_SESSION['box-left'];

$bw=$_SESSION['box-width'];
$bh=$_SESSION['box-height'];

$p=$_SESSION['window-size-percent']/100;
$fp=$_SESSION['font-size-percent']/100;

?>
<style>
*{
    margin:0;
}body{
    background:gray;
}
.top{
    background:gray;
    background:red;
    display:flex;
    width:100%;
}
    .side-window{
        background:gray;
        height:<?=$wh*$p?>;
        width:<?=$side_window_width?>;
        z-index:1;
        position:relative; 
    }
.window{
    background:black;
    width:<?=$ww*$p?>;
    height:<?=$wh*$p?>;
}
.box{
    width:<?=$bw*$p?>;
    height:<?=$bh*$p?>;
    <?php $T=155;?>
    position:relative;
    top:<?=$bt*$p?>;
    left:<?=$bl*$p?>;
    /* background:rgb(<?=$T?>,<?=$T?>,<?=$T?>); */
    /* background:blue; */
}
.information{
}
.bottom{
    height:<?=$_SESSION['box-height']*1.15?>;
    background:gray;
    background:black;
    position:relative;
}
table{
    margin:0 auto;
}
td{
    border:<?=1*$p?>px solid black;
    width:<?=110*$p?>;
    height:<?=90*$p?>;
    text-align:center;
    font-size:<?=13*$fp?>;
}
</style>