<style>
    <?php 
    $one=$menuW*0.01;

    //:지퍼.목.중앙;~~~~~~~~
    if($_SESSION['screenH']==900){//맥북에어
        $ZNC=$one*2;
    }else if($_SESSION['screenH']==1024){//아이패드미니5
        $ZNC=$one*1.2;
    }else if($_SESSION['screenH']==1080){//윈도우
        $ZNC=$one*1.2;
    }else if($_SESSION['screenH']==823){//내폰
        $ZNC=$one*0.4;
    }
    //:지퍼.목.옆;
    if($_SESSION['screenH']==900){//맥북에어
        $ZSN=$one*6;
    }else if($_SESSION['screenH']==1024){//아이패드미니5
        $ZSN=$one*4;
    }else if($_SESSION['screenH']==1080){//윈도우
        $ZSN=$one*6;
    }else if($_SESSION['screenH']==823){//내폰
        $ZSN=$one*1.7;
    }
    $ZOSS=$one*1;//:지퍼.셔츠위.사이드;
    //:지퍼.셔츠위.중앙;
    if($_SESSION['screenH']==900){//맥북에어
        $ZOS1=$one*4;
    }else if($_SESSION['screenH']==1024){//아이패드미니5
        $ZOS1=$one*2;
    }else if($_SESSION['screenH']==1080){//윈도우
        $ZOS1=$one*2;
    }else if($_SESSION['screenH']==823){//내폰
        $ZOS1=$one*0.6;
    }
    $ZOS2=$ZOS1*2;
    $ZSO=$one*1;//:지퍼.셔츠.가장자리;
    //:지퍼.셔츠.중앙;~~~~~~~
    if($_SESSION['screenH']==900){//맥북에어
        $ZS1=$one*4;
    }else if($_SESSION['screenH']==1024){//아이패드미니5
        $ZS1=$one*2;
    }else if($_SESSION['screenH']==1080){//윈도우
        $ZS1=$one*2;
    }else if($_SESSION['screenH']==823){//내폰
        $ZS1=$one*0.59;
    }
            $ZS2=$ZS1/2*4.5;
    $ZJ=$one*3;//:지퍼.자켓;
        
//:다리.길이;
    if($_SESSION['screenH']==900){//맥북에어
        $LH=$one*39.6;
    }else if($_SESSION['screenH']==1024){//아이패드미니5
        $LH=$one*30;
    }else if($_SESSION['screenH']==1080){//윈도우
        $LH=$one*39.6;
    }else if($_SESSION['screenH']==823){//내폰
        $LH=$one*13.2;
    }
        //:발목.높이;
        if($_SESSION['screenH']==900){//맥북에어
            $FH=$one*0.9+$one*3.5-$SH+$one*9.26;
            $FH=2.6;
        }else if($_SESSION['screenH']==1024){//아이패드미니5
            $FH=2.6;
        }else if($_SESSION['screenH']==1080){//윈도우
            $FH=$one*0.9+$one*3.5-$SH+$one*9.26;
        }else if($_SESSION['screenH']==823){//내폰
            $FH=2.7;
        }

    //:신발.높이;
    if($_SESSION['screenH']==900){//맥북에어
        $SH=$one*11;
    }else if($_SESSION['screenH']==1024){//아이패드미니5
        $SH=$one*6.5;
    }else if($_SESSION['screenH']==1080){//윈도우
        $SH=$one*11;
    }else if($_SESSION['screenH']==823){//내폰
        $SH=$one*3;
    }
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
/* .percent 제일 밑으로 옮겼습니다. */
.man{
    width: /*넓이*/83%;
    height: /*높이*/662%;
    /*초기비율: width:176,height:662*/
    margin:0 auto;
    background:blue;
    background-color: /*배경*/transparent;
}
.head{
    background-color: <?=$skin?>;
    width: 34%;height: 13.5%;
    margin:0 auto;
    border-bottom:<?=$menuW*0.01?>px solid black;
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
                    border:<?=$menuW*0.01?>px solid 
                    rgb(211, 180, 8);
                    border:<?=$menuW*0.01?>px solid 
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
    .mask{<?php
        if($_SESSION['screenH']==900){//맥북에어
            $maskHeight=0.3676;
        }else if($_SESSION['screenH']==1024){//아이패드미니5
            $maskHeight=0.259;
        }else if($_SESSION['screenH']==1080){//윈도우
            $maskHeight=0.366652;
        }else if($_SESSION['screenH']==823){//내폰
            $maskHeight=0.114477;
        }?>
        height: <?=$menuW*$maskHeight//맥북에어?>%;
        background-color: /*마스크*/<?=$color_mask?>;
        <?php if($mask==0){?>background-color:transparent;<?php }?>
    }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 목 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
.neck-center{
    margin:0 auto;
    width: 35%;
    height: 5.2%;
}
    .neckColumns{
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
                .neck.skin .box1{
                    background-color: transparent;
                    height: 30%;
                }
                .neck.skin .box2{
                    background-color: /*목자켓*/<?=$color_jacketCoveringFront?>;
                    height: 70%;
                    display:flex;
                }           
                    .jacketSideNeckMore{
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
                        .sideZipperRight{/*:지퍼.목.옆;*/
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
                        .sideZipperLeft{
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
                    .verticalZipper{
                        margin:0 auto;
                        height:110%;
                        width:<?=$ZNC?>%;
                    }
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@[ 팔 ]@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
/*@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@*/
.body{
    display: flex;
    height: 81%;
}
    .columnArm{
        margin: 0ch;
        width: 16%;
        height: 49.38%;
    }
        .shoulder{
            background-color: /*자켓*/<?=$color_jacket?>;
            width: 100%;height:21.25%;
        }
        .arm.first{
            <?php
            //:팔.넓이;
            if($_SESSION['screenH']==900){//맥북에어
                $armWidth=98.5;
            }else if($_SESSION['screenH']==1024){//아이패드미니5
                $armWidth=99;
            }else if($_SESSION['screenH']==1080){//윈도우
                $armWidth=99;
            }else if($_SESSION['screenH']==823){//내폰
                $armWidth=99;
            }?>
            width: <?=$armWidth?>%;height: 22%;
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
                width: <?=$armWidth?>%;
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
    .middle{
        background-color: transparent;
        width: 68%;
        height: 100%;
    }
        .top{
            display: flex;
            height: 42%;
        }
            .jacket{
                background-color: /*자켓*/<?=$color_jacket?>;
                height: 100%;width: 100%;
                margin:0 auto;
            }   
                .skinOverShirts{
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
                    .zipperOverShirts{
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
                .shirts{/*:셔츠;*/
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
                        .verticalZipper.inShirts{
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
                        .verticalZipper{
                            background:black;
                            background-color:<?=$color_zipper?>;
                        }
                        .horizonZipper{
                            background-color: transparent;
                        }
                        <?php
                    }else{
                        //지퍼 수평
                        ?>
                        .verticalZipper{
                            background-color:transparent;
                        }
                        .horizonZipper{
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
        .pants-top{
            background-color: <?=$color_pants?>;
            width: 98%;height: 8.2%;
            margin:0 auto;
        }
        .pants-bottom{
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
        .foots{
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
        .shoes{
            display: flex;
            <?php 
            //기기에 맞게
            if($_SESSION['screenH']==900){//맥북에어
                $SHB=0;
                $SHG=0;
            }else if($_SESSION['screenH']==1024){//아이패드미니5
                $SHB=0;
                $SHG=0;
            }else if($_SESSION['screenH']==1080){//윈도우
                $SHB=0;
                $SHG=0;
            }else if($_SESSION['screenH']==823){//내폰
                $SHB=0;
                $SHG=0;
            }
            if($color_shoes=='black'){
                $SH+=1.2+$SHB; ?>
                height:<?=$SH?>%;/*:신발.높이;*/
                <?php
            }else if($color_shoes=='gray'){
                $SH-=0.4+$SHG; ?>
                height:<?=$SH?>%;/*:신발.높이;*/
                <?php
            }else{
                ?>
                height:<?=$SH?>%;
                <?php
            }?>
        }
        <?php 
        //기기에 맞게
        if($_SESSION['screenH']==900){//맥북에어
            $topPercentGray=2.28;
            $topPercentBlack=3;
            $topPercentWhite=2.4;
        }else if($_SESSION['screenH']==1024){//아이패드미니5
            $topPercentGray=2.28;
            $topPercentBlack=3;
            $topPercentWhite=2.4;
        }else if($_SESSION['screenH']==1080){//윈도우
            $topPercentGray=1;
            $topPercentBlack=1;
            $topPercentWhite=1;
        }else if($_SESSION['screenH']==823){//내폰
            $topPercentGray=2.28;
            $topPercentBlack=3;
            $topPercentWhite=2.4;
        }
        if($color_shoes=='gray'){
            ?>
            .percent{
                top:<?=$topPercentGray*$menuW*0.17?>;
            }
            <?php
        }if($color_shoes=='black'){
            ?>
            .percent{
                top:<?=$topPercentBlack*$menuW*0.1?>;
            }
            <?php
        }if($color_shoes=='white'){
            ?>
            .percent{
                top: <?=$topPercentWhite*$menuW*0.15?>;
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
                
.percent{
    <?php 
    //기기에 맞게
    if($_SESSION['screenH']==900){//맥북에어
        $PH=94;$PW=37;
    }else if($_SESSION['screenH']==1024){//아이패드미니5
        $PH=14.092;$PW=44;
    }else if($_SESSION['screenH']==1080){//윈도우
        $PH=14.092;$PW=44;
    }else if($_SESSION['screenH']==823){//내폰
        $PH=14.092;$PW=44;
    }
    ?>
    width: <?=$PW?>%;height: <?=$PH?>%;
    /*width=2*height*/
    margin:0 auto;
    position: relative;
    /* background:red; */
}
</style>