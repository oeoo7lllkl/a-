<?php
$rgb=80;//사람 밝기@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
$t=0;/* 사람 배경색 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
$space_color="rgb($t,$t,$t)";
$space_color="transparent";

?>
<style>
.display-flex{
    display:flex;
}
.display-flex-end{
    display:flex;
    align-items:flex-end;
}
.display-flex-center{
    display:flex;
    align-items:center;
}

.space-man{
    /**몸에 글자색@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
    /* color:rgb(100,100,100); */
    color:white;
    color:transparent;
    text-align:center;
    /* background:transparent; */
    background:<?=$space_color?>;
    margin:auto auto 0 auto;
    width:100%;
    height:100%;
}
.head{
    background:rgb(<?=30+$rgb?>,<?=30+$rgb?>,<?=30+$rgb?>);
    width:35%;
    margin:0 auto;
    height:14.285%;
}
.hair{
    background:rgb(<?=0+$rgb?>,<?=0+$rgb?>,<?=0+$rgb?>);
    height:35%;
}
.neck{
    height:3%;
    background:rgb(<?=0+$rgb?>,<?=0+$rgb?>,<?=0+$rgb?>);
    width:22%;
    margin:0 auto;
}
.man-top{
    background:<?=$space_color?>;
    height:37%;
}
.arm{
    height:120%;
    background:rgb(<?=0+$rgb?>,<?=0+$rgb?>,<?=0+$rgb?>);
    <?php 
    //iic($aw);
    //팔넓이@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    $aw=16;
    ?>
    width:<?=$aw?>%;
}
.hand{
    background:rgb(<?=50+$rgb?>,<?=50+$rgb?>,<?=50+$rgb?>);
    height:20%;
    width:100%;
}
.body{
    background:rgb(<?=10+$rgb?>,<?=10+$rgb?>,<?=10+$rgb?>);
    width:<?=100-$aw*2?>%;
}
.under-shoulder{
    background:rgb(<?=5+$rgb?>,<?=5+$rgb?>,<?=5+$rgb?>);
    width:100%;
    height:70%;
}
.void{
    background:<?=$space_color?>;
    <?php //iic($vw);//틈넓이@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    $vw=1;?>
    width:<?=$vw?>%;
}
.body-under-shoulder{
    background:transparent;
    width:<?=100-2*$vw?>%;
}
<?php 
// iis($pw);
$lw=45;//다리넓이@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
$lsw=65;//다리들넓이@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
$pw=$lsw*($lw*2+(100-$lw*2)/2)/100;//골반넓이
// iis($lw);
// iis($lsw);
// iis($pw);
?>
.pelvis{
    background:rgb(<?=0+$rgb?>,<?=0+$rgb?>,<?=0+$rgb?>);
    width:<?=$pw?>%;
    margin:0 auto;
    height:5%;
}
.legs{
    background:<?=$space_color?>;
    height:40.715%;
    width:<?=$lsw?>%;
    margin:0 auto;
}
.leg{
    background:rgb(<?=0+$rgb?>,<?=0+$rgb?>,<?=0+$rgb?>);
    width:<?=$lw?>%;
    margin:0 auto;
}
.foot{
    background:rgb(<?=50+$rgb?>,<?=50+$rgb?>,<?=50+$rgb?>);
    height:12%;
    width:100%;
    /* background:red; */
}
</style>