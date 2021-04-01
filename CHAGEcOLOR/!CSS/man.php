<style>
    <?php 
    $ZNC=2;//:지퍼.목.중앙;
    $ZSN=6;//:지퍼.목.옆;
    $ZOSS=1;//:지퍼.셔츠위.사이드;
    $ZOS1=3;//:지퍼.셔츠위.중앙;
    $ZOS2=7;
    $ZSO=1;//:지퍼.셔츠.가장자리;
    $ZS1=3;//:지퍼.셔츠.중앙;
    $ZS2=7;
    $ZJ=3;//:지퍼.자켓;
        
    $LH=39.6;//:다리.높이;

    $SH=11;//:신발.높이;
        $FH=0.9+3.5-$SH+9.26;//:발목.높이;
    ?>
    /*
            -위치-
            배경 
            모자 마스크
            목깃자켓 목자켓 
            자켓 팔자켓 셔츠자켓 지퍼
            신발
            -색상-

            #c0b498
                베이지 모자
            #d7d8dd
                그레이 모자
            rgb(46, 45, 45)
                검정 모자
            rgb(207, 42, 42)
                비건디 모자

            #c3c3c0
                지퍼색
            transparent
                투명
                
            a56878
                초코
            $khaki
                카키
            black
                검정
            rgb(1, 1, 95)
                네이비

            $skin
                피부

            rgb(1, 1, 95)
                네이비
            #dbcbba
                베이지
            brown
                갈색

            383b46
                슬리퍼
    */
    
#percent{<?php 
$PH=110;$PW=$PH*2;
$PH=14.092;$PW=44;
?>/* PH=110 */
    width: <?=$PW?>;height: <?=$PH?>;
    width: <?=$PW?>%;height: <?=$PH?>%;
    /*width=2*height*/
    margin:0 auto;
    position: relative;
    top: 20;
    top: 35;
}
#man{
    background-color: /*배경*/transparent;
    width: /*넓이*/83%;
    height: /*높이*/662%;
    /*초기비율: width:176,height:662*/
    margin:0 auto;
}
#head{
    background-color: <?=$skin?>;
    width: 34%;height: 13.5%;
    margin:0 auto;
    border-bottom:1px solid black;
}
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 모자 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    .hat{
        height: 44%;
        <?php if($hat==0){$color_hat=$color_hair;}?>
        background-color: /*모자*/<?=$color_hat?>;
        display: flex;
        align-items:flex-end;
    }
        .hair{
            width:90%;height: 30%;
            margin: 0 auto;
            background-color: black;
        }
    .face{
        height: 20%;
    }
        .glasses{
            height: 85%;
            position: relative;
            top: 20%;
            display: flex;
        }
            .glasses .line{
                border-top:1px solid 
                rgb(172, 146, 4);
                border-left:1px solid 
                rgb(172, 146, 4);
                border-right:1px solid 
                rgb(172, 146, 4);
                <?php if($glasses==0){?>border-color:transparent;<?php }?>
            }
                .side{
                    width: 5%;height: 0%;
                    position: relative;
                    top: 33%;
                }
                .glass.line{
                    width: 40%;height: 100%;
                    border:1px solid 
                    rgb(211, 180, 8);
                    border:1px solid 
                    black;
                    <?php if($glasses==0){?>border-color:transparent;<?php }?>
                }
                .nose{
                    width: 10%;height: 0%;
                    position: relative;
                    top: 25%;
                }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 마스크 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    .mask{
        height: 36%;
        background-color: /*마스크*/<?=$color_mask?>;
        <?php if($mask==0){?>background-color:transparent;<?php }?>
    }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 목 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
#neck-center{
    margin:0 auto;
    width: 35%;
    height: 5.2%;
}
    #neck{
        display: flex;
        height: 100%;
    }
        .neck{
            height: 100%;
        }
            .neck.jacket{
                margin-top:auto;
                width: 15%;height: 83%;
                    background-color: /*목깃자켓*/<?=$color_jacket?>;
                <?php //열려있고 자켓색이 카키나 하양이면 목깃 투명색
                if($jacketCovered!='yes'&($color_jacket==$khaki|$color_jacket==$cream)){
                    ?>
                    height:33%;
                    <?php
                }else{
                    ?>
                    <?php
                }
                ?>
            }
            .neck.skin{
                background-color: 
                <?=$skin?>;
                width: 70%;
            }
                .neck.skin #box1{
                    background-color: transparent;
                    height: 30%;
                }
                .neck.skin #box2{
                    background-color: /*목자켓*/<?=$color_jacketCoveringFront?>;
                    height: 70%;
                    display:flex;
                }           
                    #jacketSideNeckMore{
                        background:<?=$color_jacket?>;
                        width:30%;
                        height:100%;
                        <?php //열려있고 자켓색이 카키나 하양이면 목깃 투명색
                        if($jacketCovered!='yes'&($color_jacket==$khaki|$color_jacket==$cream)){
                            ?>
                            background:transparent;
                            <?php
                        }
                        ?>
                    }
                        #sideZipperRight{/*:지퍼.목.옆;*/
                            margin-left:auto;
                            height:100%;
                            width:<?=$ZSN?>%;
                            <?php //열려있고 자켓색이 카키나 하양이면 목깃 투명색
                            if($color_jacket==$khaki|$color_jacket==$cream){
                                ?>
                                background:transparent;
                                <?php
                            }else{
                                //덮혓을때
                                if($jacketCovered=="yes"){
                                    //투명색 적용
                                    ?>
                                    background:transparent;
                                    <?php
                                }else{//아닐때 지퍼색
                                    ?>  
                                    background:<?=$color_zipper?>;
                                    <?php
                                }
                            }
                            ?>
                        }
                        #sideZipperLeft{
                            margin-right:auto;
                            height:100%;
                            width:<?=$ZSN?>%;
                            <?php //자켓색이 카키나 하양이면 목깃 투명색
                            if($color_jacket==$khaki|$color_jacket==$cream){
                                ?>
                                background:transparent;
                                <?php
                            }else{
                                //덮혓을때
                                if($jacketCovered=="yes"){
                                    //투명색 적용
                                    ?>
                                    background:transparent;
                                    <?php
                                }else{//아닐때 지퍼색
                                    ?>  
                                    background:<?=$color_zipper?>;
                                    <?php
                                }
                            }
                            ?>
                        }
                    /*:지퍼.목.중앙;*/
                    #verticalZipper{
                        margin:0 auto;
                        height:110%;
                        width:<?=$ZNC?>%;
                    }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 팔 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
#body{
    display: flex;
    height: 81%;
}
    #side{
        margin: 0ch;
        width: 16%;
        height: 49.38%;
    }
        #shoulder{
            background-color: /*자켓*/<?=$color_jacket?>;
            width: 100%;height:21.25%;
        }
        .arm.first{
            width: 99%;height: 22%;
            background-color: /*자켓*/<?=$color_jacket?>;
        }
        .arm.second{
            <?php 
            if($armsUpOrDown=='up'){
                ?>
                width:70%;
                <?php
            }else{
                ?>
                width: 99%;
                <?php
            }
            ?>
            height: 40%;
            <?php 
            if($armsUpOrDown=='up'){
                ?>
                background: <?=$skin?>;
                <?php
            }else{
                ?>
                background-color: /*팔자켓*/<?=$color_jacket?>;
                <?php
            }
            ?>
        }
        <?php $inputNumber="20"; $input="rgb(".$inputNumber.", ".$inputNumber.", ".$inputNumber.")"?>
            .right.arm{
                margin-right: auto;
                border-right:0.5px solid <?=$input?>;
            }
                .right.arm.second{
                    <?php 
                    if($armsUpOrDown=='up'){
                        ?>
                        margin-left: 15%;
                        border-right:0px solid transparent ;
                        <?php
                    }else{
                        ?>

                        border-right:0.5px solid <?=$input?>;
                        <?php
                    }
                    ?>
                }
            .left.arm{
                margin-left: auto;
                border-left:0.5px solid <?=$input?>;
            }
                .left.arm.second{
                    <?php 
                    if($armsUpOrDown=='up'){
                        ?>
                        margin-right: 15%;
                        border-left:0px solid transparent ;
                        <?php
                    }else{
                        ?>

                        border-left:0.5px solid <?=$input?>;
                        <?php
                    }
                    ?>
                }
        .hand{
            background-color: <?=$skin?>;
            width: 80%;height: 16%;
        }
            .right.hand{
                margin-right: auto;
                margin-left: 9%;
            }
            .left.hand{
                margin-left: auto;
                margin-right: 9%;
            }

/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 몸통 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
    #middle{
        background-color: transparent;
        width: 68%;
        height: 100%;
    }
        #top{
            display: flex;
            height: 42%;
        }
            #jacket{
                background-color: /*자켓*/<?=$color_jacket?>;
                height: 100%;width: 100%;
                margin:0 auto;
            }   
                #skinOverShirts{
                    margin:0 auto;
                    height:1%;
                    <?php //카키나 크림일때 폭 넓게
                    if($color_jacket==$khaki|$color_jacket==$cream){
                        ?>
                        width: 27%;
                        <?php
                    }else{  //그외 폭 좁게 & 양옆 지퍼
                        ?>
                        width: 11%;
                        <?php //덮혓을때
                        if($jacketCovered=="yes"){
                            //투명색 적용
                        }else{//아닐때 지퍼색
                            ?>  /*:지퍼.셔츠위.사이드;*/
                            border-left:<?=$ZOSS?>px solid <?=$color_zipper?>;
                            border-right:<?=$ZOSS?>px solid <?=$color_zipper?>;
                            <?php
                        }
                    }?>
                    <?php
                    //자켓을 끝까지 잠궜을 때
                    if($jacketCovered=="yes"){
                        //자켓색 적용
                        ?>
                        background: <?=$color_jacket?>;
                        <?php
                    }else{//아닐때 피부색
                        ?>  
                        background: <?=$skin?>;
                        <?php
                    }
                    ?>
                }
                    #zipperOverShirts{
                        height:100%;
                        margin:0 auto;
                        <?php 
                        //자켓을 끝까지 잠궜을 때
                        if($jacketCovered=="yes"){
                            //지퍼색 적용
                            ?>
                            background: <?=$color_zipper?>;
                            <?php
                        }else{//아닐때 지퍼투명색
                            ?>  
                            background: transparent;
                            <?php
                        }
                        ?>
                        <?php //카키나 크림일때 폭 좁게
                        if($color_jacket==$khaki|$color_jacket==$cream){
                            ?>
                            width: <?=$ZOS1?>%;/*:지퍼.셔츠위.중앙;*/
                            <?php
                        }else{//그외 폭 넓게
                            ?>
                            width:<?=$ZOS2?>%;
                            <?php
                        }?>
                    }
                #shirts{/*:셔츠;*/
                    height: 24%;
                    margin:0 auto;
                    background-color: /*셔츠자켓*/<?=$color_shirts?>;
                    <?php 
                    //자켓을 끝까지 잠궜을 때
                    if($jacketCovered=="yes"){
                        //지퍼 닫기
                        ?>
                        
                        <?php
                    }else{  //열기
                        ?>  /*:지퍼.셔츠.가장자리;*/
                        border-bottom:<?=$ZSO?>px solid <?=$color_zipper?>;
                        <?php   //카키나 크림색일때 양옆지퍼색 투명
                        if($color_jacket==$khaki|$color_jacket==$cream){
                            ?>
                            <?php
                        }else{      //그외는 지퍼색적용
                            ?>
                            border-left:<?=$ZSO?>px solid <?=$color_zipper?>;
                            border-right:<?=$ZSO?>px solid <?=$color_zipper?>;
                            <?php
                        }
                        ?>
                        <?php
                    }
                    ?>
                    <?php //카키나 크림일때 폭 넓게
                    if($color_jacket==$khaki|$color_jacket==$cream){
                        ?>
                        width: 20%;
                        <?php
                    }else{  //그외 폭 좁게
                        ?>
                        width: 10%;
                        <?php
                    }
                    ?>
                }
                    .jacketCoveringFront{
                        height:100%;width:100%;
                        background: <?=$color_jacketCoveringFront?>;
                    }
                        #verticalZipper.inShirts{
                            <?php //:지퍼.셔츠.중앙;
                            if($color_jacket==$khaki|$color_jacket==$cream){
                                ?>
                                width:<?=$ZS1?>%;
                                <?php
                            }else{
                                ?>
                                width:<?=$ZS2?>%;
                                <?php
                            }
                            ?>
                        }
                    <?php 
                    //자켓을 끝까지 잠궜을 때
                    if($jacketCovered=="yes"){
                        //지퍼 수직
                        ?>
                        #verticalZipper{
                            background:black;
                            background-color:<?=$color_zipper?>;
                        }
                        #horizonZipper{
                            background-color: transparent;
                        }
                        <?php
                    }else{
                        //지퍼 수평
                        ?>
                        #verticalZipper{
                            background-color:transparent;
                        }
                        #horizonZipper{
                            background-color: <?=$color_zipper?>;
                        }
                        <?php
                    }
                    ?>
                .zipper{
                    background-color: /*:지퍼.자켓;*/<?=$color_zipper?>;
                    width: 0.5%;height: 74.5%;
                    margin:0 auto;
                }

/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 바지 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
        #pants-top{
            background-color: <?=$color_pants?>;
            width: 98%;height: 8.2%;
            margin:0 auto;
        }
        #pants-bottom{
            display: flex;
            width: 98%; 
            <?php 
            if($pantsShortOrLong=='long'){
                $LH-=0.8?>
                height:<?=$LH?>%;/*:다리.높이;*/
                <?php
            }else{
                $LH-=3.45; ?>
                height:<?=$LH?>%;
                <?php
            }
            ?>
            margin:0 auto;
        }
            .leg{
                background-color: <?=$color_pants?>;
                width: 50%;height: 100%;
            }
                .leg.right{
                    margin-left: auto;margin-right: 3%; 
                }
                .leg.left{        
                    margin-left: 3%;margin-right: auto;
                }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 발목 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
        #foots{
            display: flex;
            <?php 
            if($pantsShortOrLong=='long'){
                ?>
                height: 0%;
                <?php
            }else{
                ?>
                height: <?=$FH?>%;/*:발목.높이;*/
                <?php
            }
            ?>
        }
            .foot{
                width: 17%;height: 100%;
                margin: 20%;
                background-color: 
                /*
                gray;
                */
                black;
            }
                .foot.right{
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-right: auto;
                }
                .foot.left{        
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-left: auto;
                }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 신발 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
        #shoes{
            display: flex;
            <?php if($color_shoes=='black'){
                $SH+=1.2; ?>
                height:<?=$SH?>%;/*:신발.높이;*/
                <?php
            }else if($color_shoes=='gray'){
                $SH-=0.4; ?>
                height:<?=$SH?>%;/*:신발.높이;*/
                <?php
            }else{
                ?>
                height:<?=$SH?>%;
                <?php
            }?>
        }
        <?php if($color_shoes=='gray'){
                ?>
                #percent{
                    top:22.5;
                    top:37.5;
                }
                <?php
            }?>
        <?php if($color_shoes=='black'){
            ?>
            #percent{
                top:13;
                top:28;
            }
            <?php
        }
        ?>
            .shoe{
                width: 33%;height: 100%;
                margin: 10%;
                background-color: <?=$color_shoes?>;
            }
                .shoe.right{
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-right: auto;
                }
                .shoe.left{        
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-left: auto;
                }
</style>