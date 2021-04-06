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
    background:black;
    color:white;/* 전체 글자색 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
}

.outside-buttons{
    background:rgb(30,30,30);
    width:700;
    margin: 0 auto;
    padding:0 20;
}
.buttons{
    width:100;
}
.clothes{
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
    /* background:black; */
    background:<?=$space_color?>;
    height:857;
    width:500;
    display:flex;
    border-left:20px solid rgb(30,30,30);
    border-right:20px solid rgb(30,30,30);
}
.space-man{/**몸에 글자색@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
    color:rgb(100,100,100);
    color:white;
    color:transparent;
    text-align:center;
    background:rgb(255,255,255);
    background:transparent;
    margin:auto auto 0 auto;
    <?php 
    //사람크기설정@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    $w=225;
    $w=240;
    ?>
    width:<?=$w?>;
    height:<?=$w/2*7?>;
}
.colors{
    background:rgb(30,30,30);
}

.options{
    height:80;
    background:rgb(200,200,200);
}

.note{
    background:black;
    color:red;
    font-size:30;
    text-align:center;
}
</style>