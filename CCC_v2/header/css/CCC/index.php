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

body{
    background:red;
    background:black;
    color:white;/* 전체 글자색 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
}

.box{
    background:white;/** 넓이:높이=700:937 */
    <?php
    // aic($_SESSION['screen-height']);
    /** 박스넓이 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
    if($_SESSION['screen-height']==823){//폰
        $box_width=979.5;
    }else if($_SESSION['screen-height']==900){//맥북
        $box_width=593.8;
    }else if ($_SESSION['screen-height']==1024){//미니
        $box_width=$_SESSION['screen-width'];
        $box_width=878;
    }else{
        // dic($_SESSION['screen-height']);
        dic("hidden/css/ccc로 가서 박스넓이를 설정해주세요~");
    }
    $box_height=$box_width/700*937;?>/** 박스높이 */
    width:<?=$box_width?>;
    height:<?=$box_height?>;
    margin:0 auto;
}
.outside-buttons{
    background:rgb(30,30,30);
    /* background:red; */
    <?php $box_space_outside_width=$box_width;?>/** 전체넓이 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
    width:<?=$box_space_outside_width?>;
    margin: 0 auto;
    padding:0 0;/** !! */
}
.buttons{
    width:120;
    background:rgb(50,50,50);
}
.buttons-upper{
    /* background:white; */
    padding-bottom:300;
    /* margin-bottom:300; */
}

.space{<?php //iic($rgb);
    $rgb=255;/* 사람 배경색 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    $space_color="rgb($rgb,$rgb,$rgb)";
    ?>
    background:<?=$space_color?>;
    /* background:blue; */
    /** 위에높이 */
    height:<?=$box_height/937*857?>;
    <?php $box_space_width=$box_space_outside_width/700*540;?>/** 가운데넓이 */
    width:<?=$box_space_width?>;
}
.sky{<?php 
    //사람크기설정@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    $m=20;
    $sky_height=3;$ground_height=3;// 하늘, 땅 높이 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    $middle_height=100-$ground_height-$sky_height;
    $sky_height+=($middle_height-$m/100*$middle_height)*4/5;
    $ground_height+=($middle_height-$m/100*$middle_height)/5;
    ?>
    background:blue;
    height:<?=$sky_height?>%;
}
.space-man{/**몸에 글자색@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
    /* color:rgb(100,100,100); */
    /* color:white; */
    color:transparent;
    text-align:center;
    /* background:transparent; */
    background:rgb(255,255,255);
    /* background:red; */
    margin:auto auto 0 auto;
    <?php 
    $to100percent=1.02008;/**!! */
    $to100percent=1.0202;/**!! */
    $space_man_width=$middle_height/100*$to100percent*$box_space_width*0.44444*$m/100;/** 사람공간넓이 */
    ?>
    width:<?=$space_man_width?>;
    height:<?=$space_man_width/2*7?>;
}
.ground{
    background:brown;
    height:<?=$ground_height?>%;
}

.colors{
    background:rgb(30,30,30);
}

.options{
    /** 밑에높이 */
    height:<?=$box_height/937*80?>;
    background:rgb(200,200,200);
}

.note{
    background:white;
    color:red;
    font-size:30;
    text-align:center;
    padding-top:50;
    background:rgb(100,100,100);
    /* background:red; */
}
</style>