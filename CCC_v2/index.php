<!-- ==================== form : 함수를 실행 시키는 폼 ==================== -->
    <form action=""method='post'id='form_if'>
        <input type="hidden"id='num'name='num'>
        <input type="hidden"id='value'name='value'>
        <input type="hidden"id='value2'name='value2'>
    </form>
<!-- ---------------------------------------------------------------- -->

<!-- ==================== php ==================== -->
    <?php
    session_start();
    // 기기가 미설정 됬을 때
        if(!isset($_SESSION['s6'])){
            $_SESSION['s6']=600; 
            $_SESSION['s7']=770;
            $_SESSION['s8']=90;
            $_SESSION['s13']=1;
            $_SESSION['s14']=1;
            $_SESSION['s15']=1;

            $_SESSION['s17']=100;//기기처음 맞출때 사람 크기 천장에 맞추기 위함
            $_SESSION['s17']=94;//!!1
        }
    // 폼이 포스트 제출 됬을 때
        if(isset($_POST['num'])){
            // ----- [ num 1 ] ---------------------------------------------------------------------------------
            // 세션 재시작
                if($_POST['num']==1){
                    session_destroy();
                    ?>
                    <script>location.href='';</script>
                    <?php
                }
            // ----- [ num 2 ] ---------------------------------------------------------------------------------
            // 정보 숨김 폰트 색 변경
                if($_POST['num']==3){
                    
                }
            // ----- [ num 2 ] ---------------------------------------------------------------------------------
            // 옷배경 투명색으로
                if($_POST['num']==2){
                    if($_SESSION['s5']=='')
                    $_SESSION['s5']='background:transparent;border-color:transparent;';
                    else
                    $_SESSION['s5']='';
                }
            // ----- [ num 4 ] ---------------------------------------------------------------------------------
            // 옷 클릭 
            if($_POST['num']==4){
                $_SESSION['s2']=$_POST['value'];
                // -------------------
                }
            // ------------------------------------------------------------------------------------------------
            // 색 클릭 
            if($_POST['num']==5){
                if($_SESSION['s2']=='shirts'){//        셔츠
                    $_SESSION['s3']=$_POST['value'];
                }else if($_SESSION['s2']=='pants'){//   바지
                    $_SESSION['s4']=$_POST['value'];
                }else if($_SESSION['s2']=='shoes'){//   신발
                    $_SESSION['s9']=$_POST['value'];
                }else if($_SESSION['s2']=='hat'){  //   모자
                    $_SESSION['s10']=$_POST['value'];
                }else if($_SESSION['s2']=='mask'){//    마스크
                    $_SESSION['s11']=$_POST['value'];
                }else if($_SESSION['s2']=='jacket'){//  자켓
                    $_SESSION['s12']=$_POST['value'];
                }
                // ---------------
                }
            // ------------------------------------------------------------------------------------------------
            // 기기 화면 높 너비 구하기 
            if($_POST['num']==6){
                    // 화면 넓이
                    $p1=$_POST['value'];
                    // 화면 높이
                    $p2=$_POST['value2'];
                    // 윈도우면-------------------------------------------------------
                    if($p1==1920&$p2==1080){// &다음 안띄우는 이게 왜 되지 윈도우에서만 되나?
                        // 기기 아이디
                        $_SESSION['s-1']=0;
                        // 디스플레이 너비
                        $_SESSION['s6']=600; 
                        // 디스플레이 높이
                        $_SESSION['s7']=900;
                        // 사람 크기 100프로일때 천장높이에 맞추기
                        $_SESSION['s8']=90;//!!1
                        // 화면 마진 탑
                        $_SESSION['s16']=25;
                        $_SESSION['s18']="font-size:10;";//!!
                        $_SESSION['s19']="margin-bottom:6;";
                        $_SESSION['s20']="margin:2 3 2 3;width:100%;";
                    }else// 맥북----------------------------------------------------
                    if($p1==1440&$p2==900){// &다음 안띄우는 이게 왜 되지 윈도우에서만 되나?
                        // 기기 아이디
                        $_SESSION['s-1']=1;
                        // 디스플레이 너비
                        $_SESSION['s6']=600; 
                        // 디스플레이 높이
                        $_SESSION['s7']=775;
                        // 사람 크기 100프로일때 천장높이에 맞추기
                        $_SESSION['s8']=107/100*80;
                        // 화면 마진 탑
                        $_SESSION['s16']=10;
                        $_SESSION['s18']="font-size:17;";
                        $_SESSION['s19']="margin-bottom:6;";
                        $_SESSION['s20']="margin:2 3 2 3;width:100%;";
                    }else// 레드미10 ----------------------------------------------------
                    if($p1==393&$p2==873){
                        // 기기 아이디
                        $_SESSION['s-1']=2;
                        // 디스플레이 너비
                        $_SESSION['s6']=970; 
                        // 디스플레이 높이
                        $_SESSION['s7']=1976;
                        // 사람 크기 100프로일때 천장높이에 맞추기
                        $_SESSION['s8']=214;//!!1
                        // 화면 마진 탑
                        $_SESSION['s16']=4;
                        $_SESSION['s18']="font-size:35;";
                        $_SESSION['s19']="margin-bottom:6;
                                          height:100;";
                        $_SESSION['s20']="margin:2 3 2 3;width:100%;";
                                          
                    }else{
                        die("화면<br>- 넓이: $p1<br>- 높이: $p2");
                    }               
                }
            // ------------------------------------------------------------------------------------------------
            // 옵션 클릭 !!!!
            if($_POST['num']==7){
                // 옵션 종류
                $value=$_POST['value'];
                if($value==0){//    모자
                    if($_SESSION['s13']==0)$_SESSION['s13']=1;
                    else
                    $_SESSION['s13']=0;
                }else if($value==1){//    자켓
                    if($_SESSION['s14']==0)$_SESSION['s14']=1;
                    else
                    $_SESSION['s14']=0;
                }else if($value==2){//    마스크
                    if($_SESSION['s15']==0)$_SESSION['s15']=1;
                    else
                    $_SESSION['s15']=0;
                }
                //----------------------------------
                }
            // ------------------------------------------------------------------------------------------------
            // - 클릭
            if($_POST['num']==8& $_SESSION['s17']>10){
                $_SESSION['s17']-=5;
                if($_SESSION['s17']<10)$_SESSION['s17']=10;
                //----------------------------------
                }
            // ------------------------------------------------------------------------------------------------
            // + 클릭 
            if($_POST['num']==9& $_SESSION['s17']<100){
                $_SESSION['s17']+=5;
                if($_SESSION['s17']>100){
                    $_SESSION['s17']=100;
                }
                //----------------------------------
            }
            
            // ------------------------------------------------------------------------------------------------
        }
    // 기기 화면 높 넓이 안구해졌을때  
        if(!isset($_SESSION['s-1'])){
            ?>
            <script>
                num.value=6;
                value.value=screen.width;
                value2.value=screen.height;
                form_if.submit();
            </script>
            <?php
            die();
        }
    // 함수
        // 색상 함수
            function rgb($num){
                ?>
                rgb(<?=$num?>,<?=$num?>,<?=$num?>)
                <?php
            }
        //-------------------------------------------
        // 색 버튼 만들기
            function f1($R,$RR,$RRR){
                // red 빨강 3
                //  value   텍스트  세션넘버
            ?>
            <!-- <?=$R.', '.$RR.', '.$RRR.'<br>'?> -->
            <div class="button<?php if($_SESSION['s'.$RRR]==$R)echo(' selected');?>"
            onclick='num.value=5;value.value="<?=$R?>";form_if.submit();'><?=$RR?></div>
            <?php
            }
        // 옷 버튼 만들기
            if(!isset($_SESSION['s2']))$_SESSION['s2']=0;
            function f2($R,$RR,$RRR){
                    // shirts 셔츠 2
                    //  value   텍스트  세션넘버
                ?>
                <div class="button<?php if($_SESSION['s'.$RRR]==$R)echo(' selected');?>"
                onclick='num.value=4;value.value="<?=$R?>";form_if.submit();'><?=$RR?></div>
                <?php 
            }
        // 옵션 버튼 만들기
            function f3($session_num,$value,$text){
                //      13          0          
                ?>
                <div class="button-horizon<?php if($_SESSION['s'.$session_num]==1)echo(' option-on');?>"
                onclick='num.value=7;value.value="<?=$value?>";form_if.submit();'><?=$text?></div>
                <?php 
            }
    ?>
<!-- ---------------------------------------------------------------- -->

<!-- ==================== script : 키 반응 ==================== -->
    <script>
    function keydown(){
    k=event.keyCode;
        // 키 코드 값 알아내기 --------------------

        // alert(k);

        //-----------------------------
    // 쓸데없는
        // --------------------------------------------------------------------------------------------
        // 세션 재시작 R 키 // post num = 1
            if(k==82){
                num.value=1;
                form_if.submit();
            }
        // --------------------------------------------------------------------------------------------
        // 페이지 리로드 [z][q][/] // post num = X
            if(k==90|k==81|k==191){
                location.href="";
                // num.value=t;
                // form_if.submit();
            }
        // --------------------------------------------------------------------------------------------
        // S 키 // post num = 2
            if(k==83){
            // 전부 손댈 필요없음 ===================
                num.value=2;
                form_if.submit();
            }
            // 차례로 추가만 하면됨 ==================
    // --------------------------------------------------------------------------------------------
    // - 키 // post num = 8
        if(k==109|k==189){
        // 전부 손댈 필요없음 ===================
            num.value=8;
            form_if.submit();
        }
        // 차례로 추가만 하면됨 ==================
    // --------------------------------------------------------------------------------------------
    // + 키 // post num = 9
            if(k==107|k==187){
            // 전부 손댈 필요없음 ===================
                num.value=9;
                form_if.submit();
            }
            // 차례로 추가만 하면됨 ==================
    }
    </script>
<!-- ---------------------------------------------------------------- -->

<!-- ==================== style : CSS ==================== -->
    <style>
    /*  */
        body{
            background:red;
            background:<?=rgb(55)?>;
            opacity:100%;
            color:white;
            font-size:100;
            text-align:center;
        }
        <?php // 화면 높 넓이 ////////////////////////////
            // ========================================
            if(0){
                sasdqwd;
                die();
            }
            $screen_width=$_SESSION['s6']*0.7;$screen_height=0.9*$_SESSION['s7'];?>
        .display{
            width:<?=$_SESSION['s6']?>;
            height:<?=$_SESSION['s7']?>;
            margin:0 auto;
            margin-top:<?=$_SESSION['s16']?>;
        }
        *{
            margin:0;
        }
        .display-flex{
            display:flex;
            margin:0 auto;
            justify-content:center;
        }
        .flex-centered{
            width:100%;
        }

    /* menues */
        .navi{
            height:4%;
        }
        /* menu-horizon */
            .menu-horizon{
                height:100%;
                display:flex;
                justify-content:center;
            }
            .button-horizon{
                background:<?=rgb(35)?>;
                <?=$_SESSION['s20']?>
                cursor:pointer;
                text-align:center;
                display:flex;
                align-items:center;
                <?=$_SESSION['s18']?>
            }
            .button-horizon:hover{
                opacity:50%;
            }
        /* menu */
            .menu{
                width:15%;
                display:flex;
                align-items:center;
            }
            .button{
                background:<?=rgb(35)?>;
                height:50;
                <?=$_SESSION['s19']?>
                cursor:pointer;
                text-align:center;
                display:flex;
                align-items:center;
                justify-content:center;
                <?=$_SESSION['s18']?>
            }
            .selected{
                background:<?=rgb(55)?>;
                border:1px solid red;
            }
            .button:hover{
                opacity:50%;
            }
        .option-on{
            background:green;
        }
    /* top */
        .top{
            height:90%;
            display:flex;
        }
        .screen{
            width:<?=$screen_width?>;
            height:<?=$screen_height?>;
        }
    /* bottom */
        .bottom{
            height:6%;
        }
    /* 사람 */
        /* // 사람 크기 설정 /////// */
            <?php
            // =====================
            $man_width=$_SESSION['s8']/100*270/100*120*$_SESSION['s17']/100;
            $man_height=$man_width/2*5?>
            .man{
                width:<?=$man_width?>;
                height:<?=$man_height?>;
                left:<?=($screen_width-$man_width)/2?>;
                top:<?=$screen_height-$man_height?>;
                position:relative;
            }
        /* 머리 목 */
            <?php // 사람키가 100%를 넘으면 다이
                $_SESSION['s0']=0;
                function h($R){
                    if(100<$_SESSION['s0']+=$R){
                        die('</style>키 전체 비율: '.$_SESSION['s0']);}
                    return $R;
                }    ?>
            <?php // 사람너비가 100%를 넘으면 다이
                $_SESSION['s1']=0;
                function w($R){
                    if(100<$_SESSION['s1']+=$R){
                        die('</style>너비 전체 비율: '.$_SESSION['s1']);}
                    return $R;
                }    ?>
            <?php $head_height_percent=15;// 머리 높이 퍼센트
                $head_height=$head_height_percent;
                $head_width=28;?>
            .head{
                background:<?=rgb(150)?>;
                width:<?=$head_width?>%;
                height:<?=h($head_height_percent)?>%;
                margin:0 auto;
            }
            .hair{
                background:black;
                height:<?=$hair_height=37?>%;
            }
            <?php $neck_height_percent=10-3.33-1.67;// 목 높이 퍼센트
                $neck_height=$neck_height_percent;?>
            .neck{
                background:<?=rgb(100)?>;
                height:<?=h($neck_height_percent)?>%;
                width:19%;
                margin:0 auto;
            }
        /* 상체 */
            .upper-body{
                <?php $E=50;// 몸통 너비 
                $upper_body_short=5;//!!!
                $lower_body_long=$upper_body_short;
                $arm_short=3;
                $width_percent_upper_body=$E;
                $height_percent_upper_body=37;
                $upper_body_width=$E;
                $upperbody_height=$height_percent_upper_body;
                $upper_body_width_slim=5;?>
                background:<?=rgb(150)?>;
                height:<?=h($height_percent_upper_body-$upper_body_short)?>%;
                width:<?=w($width_percent_upper_body-$upper_body_width_slim)?>%;
                position:absolute;
            }
            <?php $RR=17;// 팔 너비
                // 팔 높이
                $height_percent_arm=37;
                $width_percent_arm=$RR;
                $arm_width_percent=$width_percent_arm;
                $R=w($RR*2);
                $arm_width_percent=$RR;?>
            .arm{
                background:<?=rgb(110)?>;
                height:<?=$height_percent_arm-$arm_short?>%;
                position:absolute;
                z-index:0;
                <?php $arm_slim=8;?>
                width:<?=$RR-$arm_slim?>%;
            }
            .hand{
                background:<?=rgb(150)?>;
                margin:0 auto;
                position:relative;
                top:100%;
                height:20%;
                <?php $R=15;?>
                width:<?=100+$R?>%;
                left:<?=-$R/2?>%;
            }
            .arm.left{
                <?php // 왼팔 레프트
                    // 팔슬림퍼센트/2+중앙-몸통퍼센트/2-팔퍼센트
                    $left_arm_left=$arm_slim/2+50-$width_percent_upper_body/2-$width_percent_arm;?>
                left:<?=$left_arm_left?>%;
            }
            .arm.right{
                <?php // 오른팔 레프트
                    // 사람너비/2+몸통너비/2+슬림너비퍼센트/2
                    $right_arm_left=50+$width_percent_upper_body/2+$arm_slim/2;?>
                left:<?=$right_arm_left?>%;

                margin-left:auto;
            }
        /* 하체 */
            .lower-body{
                <?php $hip_width=40;$lower_body_height=43;
                    $lowerbody_width=$hip_width;
                    $lower_body_width=$hip_width;?>
                width:<?=$hip_width?>%;
                height:<?=h($lower_body_height+$lower_body_long)?>%;
                margin:0 auto;
                position:absolute;
                z-index:0;
                top:<?=$head_height+$neck_height_percent+$upperbody_height
                -$upper_body_short?>%;/*!!!*/
                left:<?=50-$hip_width/2?>%;
            }

            .hip{
                background:<?=rgb(120)?>;
                <?php $hip_height=15;?>
                height:<?=$hip_height?>%;
                position:absolute;
                width:100%;
            }
            .legs{<?php $legs_height=100-$hip_height;?>
                height:<?=$legs_height?>%;
                position:absolute;
                width:100%;
                top:<?=$hip_height?>%;
            }
            .leg{
                <?php $leg_width=50;$leg_slim=20;?>
                background:<?=rgb(130)?>;
                width:<?=$leg_width-$leg_slim?>%;
                display:flex;
                align-items:flex-end;
                position:absolute;
                height:100%;
                left:<?=50-$leg_width+$leg_slim/3?>%;
            }
            .leg.right{
                left:<?=50+$leg_slim*2/3?>%;
            }
            .foot{
                background:<?=rgb(150)?>;
                margin:0 auto;
                <?php $foot_height=15;?>
                height:<?=$foot_height?>%;
                <?php $foot_width=150;?>
                width:<?=$foot_width?>%;
                /* padding:0 95% 0 95%; */
                left:<?=-$foot_width/2+100/2?>%;
                position:absolute;
            }

    /* 옷 */
        /* 셔츠 */  
            .shirts *{
                border-bottom:1px solid black;
                <?php if(!isset($_SESSION['s3'])){$_SESSION['s3']='white';}?>
                background:<?=$_SESSION['s3']?>;
                <?php if(!isset($_SESSION['s5']))$_SESSION['s5']='';?>
                position:absolute;
                z-index:2;
                <?=$_SESSION['s5']?>
            }
            .shirts .body{
                /* background:blue; */
                <?php // 높 너비
                $shirts_short=1;
                
                // 몸통너비퍼센트
                $R=$width_percent_upper_body;
                // 몸통 슬림
                $body_slim=2;
                // 몸통높이퍼센트
                $Rr=$height_percent_upper_body+0?>
                width:<?=$R-$body_slim?>%;
                height:<?=$Rr-$shirts_short?>%;
                <?php 
                    // 머리높이+목높이
                    $R=$head_height_percent+$neck_height_percent;
                    // 중앙-몸통너비퍼센트/2
                    $Rr=50-$width_percent_upper_body/2?>
                top:<?=$R?>%;
                left:<?=$Rr+$body_slim/2?>%;
                /*!!!*/
            }
            .shirts .arm{
                /* background:green; */
                <?php // 팔 높 너비
                    $shirts_arm_slim=3;
                    $jacket_arm_slim=2;
                    // 팔너비퍼센트
                    $R=$width_percent_arm;
                    // 팔높이퍼센트
                    $Rr=$height_percent_arm+-$shirts_short?>
                width:<?=$R-$shirts_arm_slim?>%;
                height:<?=$Rr?>%;
                <?php // 탑 레프트
                    // 머리높이+목높이
                    $R=$head_height_percent+$neck_height_percent;
                    // 중앙-몸통너비퍼센트/2-팔너비퍼센트
                    $Rr=50-$width_percent_upper_body/2-$arm_width_percent?>
                top:<?=$R?>%;
                left:<?=$Rr+$shirts_arm_slim?>%;
            }
            .shirts .arm.right{
                <?php // 탑 레프트
                    // 중앙+몸통너비퍼센트/2
                    $Rr=50+$width_percent_upper_body/2?>
                left:<?=$Rr?>%;
            }
        /* 바지 */
            .pants *{
                border-bottom:1px solid black;
                <?php if(!isset($_SESSION['s4']))$_SESSION['s4']='white';?>
                background:<?=$_SESSION['s4']?>;
                position:absolute;
                z-index:1;
                <?=$_SESSION['s5']?>
                opacity:90%;
                /*!!!*/
            }
            .pants .upper{
                width:<?=$hip_width?>%;
                height:<?=$hip_height*$lower_body_height/100?>%;
                top:<?=$head_height+$neck_height+$upperbody_height
                -$upper_body_short?>%;
                left:<?=50-$lowerbody_width/2?>%;
            }
            .pants .leg{
                <?php $leg_short=8;?>
                width:<?=$lowerbody_width/100*$leg_width?>%;
                height:<?=$upper_body_short+$lower_body_height/100*$legs_height-$leg_short?>%;
                top:<?=-$upper_body_short+$head_height+$neck_height+$upperbody_height+$hip_height*$lower_body_height/100?>%;
                left:<?=50-$lowerbody_width/2?>%;
            }
            .pants .leg.right{
                left:<?=(50+$lowerbody_width*(50-$leg_width)/100)*1.001?>%;
            }
        /* 신발 */
            .shoe{
                <?php if(!isset($_SESSION['s9']))$_SESSION['s9']='white';?>
                background:<?=$_SESSION['s9']?>;
                border-bottom:1px solid black;
                height:100%;
                width:100%;
                top:<?=$hip_height+$legs_height-$foot_height*$legs_height/100?>%;
                left:0;
                top:0;
                position:absolute;
                <?=$_SESSION['s5']?>
            }
        /* 모자 */
            .hat{
                <?php if(!isset($_SESSION['s10']))$_SESSION['s10']='white';?>
                background:<?=$_SESSION['s10']?>;
                <?php $hat_height=5;?>
                position:absolute;
                width:<?=$head_width?>%;
                height:<?=$hat_height?>%;
                border-bottom:1px solid black;
                top:0;
                left:<?=50-$head_width/2?>%;
                z-index:1;
                <?=$_SESSION['s5']?>
                <?php 
                if($_SESSION['s13']==1){
                    ?>
                    background:transparent;
                    border-color:transparent;
                    <?php
                }?>
            }
        /* 마스크 */
            .mask{
                <?php if(!isset($_SESSION['s11']))$_SESSION['s11']='white';?>
                background:<?=$_SESSION['s11']?>;
                <?php $mask_height=6;?>
                position:absolute;
                width:<?=$head_width?>%;
                height:<?=$mask_height?>%;
                border-bottom:1px solid black;
                top:<?=$head_height-$mask_height?>%;
                left:<?=50-$head_width/2?>%;
                z-index:1;
                <?=$_SESSION['s5']?>
                <?php 
                if($_SESSION['s15']==1){
                    ?>
                    background:transparent;
                    border-color:transparent;
                    <?php
                }?>
            }
        /* 자켓 */  
            .jacket *{
                border-bottom:1px solid black;
                <?php if(!isset($_SESSION['s12'])){$_SESSION['s12']='white';}?>
                background:<?=$_SESSION['s12']?>;
                position:absolute;
                z-index:3;
                <?=$_SESSION['s5']?>
                opacity:10%; 
                /* !!! */
                <?php 
                if($_SESSION['s15']==1){
                    ?>
                    background:transparent;
                    border-color:transparent;
                    <?php
                }?>
            }
            .jacket .body{
                /* background:blue; */
                <?php // 높 너비
                    // 몸통너비퍼센트
                    $R=$width_percent_upper_body;
                    // 몸통 슬림
                    $body_slim=2;
                    // 몸통높이퍼센트
                    $Rr=$height_percent_upper_body+0?>
                width:<?=$R-$body_slim?>%;
                height:<?=$Rr?>%;
                <?php 
                    // 머리높이+목높이
                    $R=$head_height_percent+$neck_height_percent;
                    // 중앙-몸통너비퍼센트/2
                    $Rr=50-$width_percent_upper_body/2?>
                top:<?=$R?>%;
                left:<?=$Rr+$body_slim/2?>%;
            }
            .jacket .arm{
                <?php // 팔 높 너비
                    // 팔너비퍼센트
                    $R=$width_percent_arm;
                    $jacket_short=0.5;
                    // 팔높이퍼센트
                    $Rr=$height_percent_arm+-$jacket_short;?>
                width:<?=$R-$jacket_arm_slim?>%;
                height:<?=$Rr?>%;
                <?php // 탑 레프트
                    // 머리높이+목높이
                    $R=$head_height_percent+$neck_height_percent;
                    // 중앙-몸통너비퍼센트/2-팔너비퍼센트
                    $Rr=50-$width_percent_upper_body/2-$arm_width_percent?>
                top:<?=$R?>%;
                left:<?=$Rr+$jacket_arm_slim?>%;
            }
            .jacket .arm.right{
                <?php // 탑 레프트
                    // 중앙+몸통너비퍼센트/2
                    $Rr=50+$width_percent_upper_body/2?>
                left:<?=$Rr?>%;
            }
        /* 안경 */
            .glasses{
                background:red;
                width:<?=$head_width?>%;
                height:<?=$glasses_height=25*$head_height/100?>%;
                position:absolute;
                left:<?=50-$head_width/2?>%;
                top:<?=($hair_height+5)*$head_height/100?>%;
                z-index:2;
                /*!!!!*/
            }
    </style>


<!-- ---------------------------------------------------------------- -->

<!-- ==================== body ==================== -->
    <body onkeydown='keydown()'>
    <!-- 눈에 보여지는 전체 화면 -->
        <div class="display">
        <!-- 네비게이션메뉴 -->
            <div class="navi">
                <div class="menu-horizon">
                    <div class="button-horizon"></div>
                    <div class="button-horizon"onclick="location.href='';"></div>
                    <div class="button-horizon"onclick='location.href="..";'><div class='flex-centered'>홈</div></div>
                    <div class="button-horizon"onclick='num.value=1;form_if.submit();'><div class="flex-centered">재시작</div></div>
                </div>
            </div>
        <!-- 메뉴 사람나오는곳 메뉴 -->
            <div class="top">
            <!-- 왼메뉴 -->
                <div class="menu">
                    <div class="flex-centered">
                    <!-- 왼메뉴 만들기 -->
                        <?php
                        $passwd='11513122';
                        if($_SESSION['s-1']!=0)$passwd='root';
                        $conn=mysqli_connect('localhost','root',$passwd,'o');
                        $before_name=0;
                        $t=1;
                        $sql="select * from clothes where id=$t";

                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result)){
                            if($before_name!=$row['cloth']){
                                f2($row['cloth'],$row['text'],2);
                            }
                            $before_name=$row['cloth'];
                            $t++;
                            $sql="select * from clothes where id=$t";
                            $result=mysqli_query($conn,$sql);
                        }
                        ?>
                    </div>
                </div>
            
            <!-- - -->
            <!-- 사람나오는 -->
                <div class="screen">
                    <div class="man">
                    <!--옷-->
                        <div class="glasses">
                        <div class="glasses_ear"></div>
                        <div class="glass"></div>
                        <div class="glasses_nose"></div>
                        <div class="glass"></div>
                        <div class="glasses_ear"></div>
                        </div>
                        <div class="shirts">
                            <div class="body"></div>
                            <div class="arm left"></div>
                            <div class="arm right"></div>
                        </div>
                        <div class="pants">
                            <div class="upper"></div>
                            <div class="leg left"></div>
                            <div class="leg right"></div>
                        </div>
                        <div class="hat"></div>
                        <div class="mask"></div>
                        <div class="jacket">
                            <div class="body"></div>
                            <div class="arm left"></div>
                            <div class="arm right"></div>
                        </div>
                    <!--사람자체-->
                        <div class="head">
                        <div class="hair"></div>
                        </div>
                        <div class="neck"></div>
                        <div class='display-flex'>
                            <div class="arm left">
                                <div class="hand"></div>
                            </div>
                            <div class="upper-body"></div>
                            <div class="arm right">
                                <div class="hand"></div>
                            </div>
                        </div>
                        <div class="lower-body">
                            <div class="hip"></div>
                            <div class="legs display-flex">
                                <div class="leg">
                                    <div class="foot">
                                        <div class="shoe"></div>
                                    </div>
                                </div>
                                <div class="leg right">
                                    <div class="foot right">
                                        <div class="shoe"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- - -->
            <!-- 오른메뉴 -->
                <div class="menu">
                    <div class="flex-centered">
                    <!-- // 오른메뉴 만들기 -->
                        <?php
                        $sql="select * from clothes where name='".$_SESSION['s2']."'";
                        if($_SESSION['s-1']!=0){
                            $sql="select * from clothes where cloth='".$_SESSION['s2']."'";
                        }
                        $result=mysqli_query($conn,$sql);
                        $color='red';
                        while($row=mysqli_fetch_array($result)){
                            if(substr($row['value'],0,1)=='#'){
                                $sql="select value from _colors where name='".$row['value']."'";
                                $result2=mysqli_query($conn,$sql);
                                $row2=mysqli_fetch_array($result2);
                                $color=$row2['value'];
                            }else{
                                $color=$row['value'];
                            }
                            if($_SESSION['s2']=='shirts')$session_num=3;
                            else if($_SESSION['s2']=='pants')$session_num=4;
                            else if($_SESSION['s2']=='shoes')$session_num=9;
                            else if($_SESSION['s2']=='hat')$session_num=10;
                            else if($_SESSION['s2']=='mask')$session_num=11;
                            else if($_SESSION['s2']=='jacket')$session_num=12;
                            if($_SESSION['s-1']==0)
                                f1($color,$row['colorName'],$session_num);
                            else
                                f1($color,$row['name'],$session_num);
                        }
                        ?>
                    </div>
                </div>
            </div>
        <!-- 옵션메뉴 -->
            <div class="bottom">
                <div class="menu-horizon">
                        <!-- !!!! -->
                    <div class="button-horizon"><div class="flex-centered"onclick='num.value=7;value.value=0;form_if.submit();'>모자</div></div>
                    <div class="button-horizon"><div class="flex-centered"onclick='num.value=7;value.value=1;form_if.submit();'>자켓</div></div>
                    <div class="button-horizon"><div class="flex-centered"onclick='num.value=7;value.value=2;form_if.submit();'>마스크</div></div>
                    <div class="button-horizon"></div>
                </div>
            </div>
        </div>
    </body>
<!-- ---------------------------------------------------------------- -->