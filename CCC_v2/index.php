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
            //옵션들 !!2
            $_SESSION['s13']=0;// 모자
            $_SESSION['s14']=1;// 자켓
            $_SESSION['s15']=0;// 마스크
            $_SESSION['s21']=0;// 안경
            $_SESSION['s22']=0;// 지퍼
            $_SESSION['s23']=0;// 셔츠팔
            $_SESSION['s25']=0;// 자켓팔
            $_SESSION['s24']=0;// 바지

            $_SESSION['s17']=100;//기기처음 맞출때 사람 크기 천장에 맞추기 위함
            $_SESSION['s17']=95;//?=skin(100/255*150
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
                $_SESSION['device_width']=$p1;
                $_SESSION['device_height']=$p2;
                // 윈도우면-------------------------------------------------------
                if($p1==1920&$p2==1080){// &다음 안띄우는 이게 왜 되지 윈도우에서만 되나?
                    // 기기 아이디
                    $_SESSION['s-1']=0;
                    // 디스플레이 너비
                    $_SESSION['s6']=800; 
                    // 디스플레이 높이
                    $_SESSION['s7']=945;
                    // 사람 크기 100프로일때 천장높이에 맞추기
                    $_SESSION['s8']=105;//?=skin(100/255*150
                    // 화면 마진 탑
                    $_SESSION['s16']=3;
                    $_SESSION['s18']="font-size:18;";
                    $_SESSION['s19']="margin-bottom:6;";
                    $_SESSION['s20']="margin:2 3 2 3;width:100%;";
                }else// 맥북----------------------------------------------------
                if($p1==1440&$p2==900){//
                    // 기기 아이디
                    $_SESSION['s-1']=1;
                    // 디스플레이 너비
                    $_SESSION['s6']=600; 
                    // 디스플레이 높이
                    $_SESSION['s7']=775;
                    // 사람 크기 100프로일때 천장높이에 맞추기
                    $_SESSION['s8']=107.7/100*80;
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
                    $_SESSION['s8']=219.6;//?=skin(100/255*150
                    // 화면 마진 탑
                    $_SESSION['s16']=4;
                    $_SESSION['s18']="font-size:35;";
                    $_SESSION['s19']="margin-bottom:6;
                                        height:100;";
                    $_SESSION['s20']="margin:2 3 2 3;width:100%;";
                                        
                }else// 미니5 ----------------------------------------------------
                if($p1==768&$p2==1024){
                    // 기기 아이디
                    $_SESSION['s-1']=3;
                    // 디스플레이 너비
                    $_SESSION['s6']=970; 
                    // 디스플레이 높이
                    $_SESSION['s7']=1165;
                    // 사람 크기 100프로일때 천장높이에 맞추기
                    $_SESSION['s8']=127.8;//?=skin(100/255*150
                    // 화면 마진 탑
                    $_SESSION['s16']=4;
                    $_SESSION['s18']="font-size:30;";
                    $_SESSION['s19']="margin-bottom:6;
                                        height:100;";
                    $_SESSION['s20']="margin:2 3 2 3;width:100%;";
                                        
                }else{


                    die("화면<br>- 넓이: $p1<br>- 높이: $p2");
                }              
            }
            // ------------------------------------------------------------------------------------------------
            // 옵션 클릭 !!2
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
                }else if($value==3){//    안경
                    if($_SESSION['s21']==0)$_SESSION['s21']=1;
                    else
                    $_SESSION['s21']=0;
                }else if($value==4){//    지퍼
                    if($_SESSION['s22']==0)$_SESSION['s22']=1;
                    else
                    $_SESSION['s22']=0;
                }else if($value==5){//    셔츠팔
                    if($_SESSION['s23']==0)$_SESSION['s23']=1;
                    else if($_SESSION['s23']==1)$_SESSION['s23']=2;
                    else
                    $_SESSION['s23']=0;
                }else if($value==7){//    자켓팔
                    if($_SESSION['s25']==0)$_SESSION['s25']=1;
                    else if($_SESSION['s25']==1)$_SESSION['s25']=2;
                    else
                    $_SESSION['s25']=0;
                }else if($value==6){//    바지
                    if($_SESSION['s24']==0)$_SESSION['s24']=1;
                    else
                    $_SESSION['s24']=0;
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
                    if(
                        $_SESSION['s13']==0& $R=='hat'|
                        $_SESSION['s15']==0& $R=='mask'|
                        $_SESSION['s14']==0& $R=='jacket'
                        ){
                            $hidden=' display:none;';
                    }else{
                        $hidden='';
                    }
                ?>
                <div style="<?=$hidden?>" class="button<?php if($_SESSION['s'.$RRR]==$R)echo(' selected');?>"
                onclick='num.value=4;value.value="<?=$R?>";form_if.submit();'><?=$RR?></div>
                <?php 
            }
        // 옵션 버튼 만들기
            function f3($session_num,$value,$text){
                //      13          0          
                ?>
                <div class="button-horizon<?php if($_SESSION['s'.$session_num]!=0){?> option-on<?php }?>">
                    <div class="flex-centered"onclick='num.value=7;value.value="<?=$value?>";form_if.submit();'>
                        <?=$text?></div></div>
                <?php
            }

          
        // 탑 네비게이션 버튼 만들기
        function f4($onclick,$show_text){
            //             f4($onclick,$show_text)
            ?>
            <div class="button-horizon"onclick="<?=$onclick?>">
                <div class='flex-centered'><?=$show_text?></div>
            </div>
            <?php
        }
         
    //마이에스큐엘 코넥트 시작
        $passwd='11513122';
        if($_SESSION['s-1']!=0)$passwd='root';
        $conn=mysqli_connect('localhost','root',$passwd,'o');
    //불러오기안했다면 저장된거 불러오기
        if(!isset($_SESSION['load_database'])){
            $sql="select * from saved";
            $result=mysqli_query($conn,$sql);   
            while($row=mysqli_fetch_array($result)){
                $_SESSION[$row['session_name']]=$row['value'];
            }
            $_SESSION['load_database']=1;
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
    // --------------------------------------------------------------------------------------------
    // M 키
        if(k==77){
        // 전부 손댈 필요없음 ===================
            hidden_menu_form.submit();
            die();
        }
        // 차례로 추가만 하면됨 ==================
    }
    </script>
<!-- ---------------------------------------------------------------- -->
<?php
function alpha($N){
    if($N>9){
        $alpha=array('a','b','c','d','e','f');
        $N=$alpha[$N-9-1];
    }
    return $N;
}
function skin($per){
    if($per<100){
        $zin=16;
        $num=round(pow($zin,2)/100*$per);
        
        $first_num=floor($num/$zin);
        $second_num=$num-$first_num*$zin;
        // die("$first_num");
    
        $first_num=alpha($first_num);
        $second_num=alpha($second_num);
        $color="background:#ebd6c0".$first_num.$second_num.";";
    }else{
        $color="background:#ebd6c0;";
    }


    return $color;
}
// die(skin(58));
// die(floor(1/255*100*150));
// die(skin(1/255*100*150));
?>
<!-- ==================== style : CSS ==================== -->
    <style>
    /*  */
        body{
            <?php
            $body_color=rgb(55);
            ?>
            background:red;
            background:<?=rgb(55)?>;
            opacity:100%;
            color:white;
            font-size:50;
            text-align:center;
        }
        <?php // 화면 높 넓이 ////////////////////////////
            // ========================================
            $screen_width=$_SESSION['s6']*0.7;$screen_height=0.9*$_SESSION['s7'];
            $display_width=$_SESSION['s6'];
            $display_height=$_SESSION['s7'];
            ?>
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
                border:<?=$_SESSION['s17']/100?>px solid red;
            }
            .button:hover{
                opacity:50%;
            }
        .option-on{
            background:transparent;
            border:<?=$_SESSION['s17']/100?>px solid green;
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
        
            <?php if(!isset($_SESSION['s5']))$_SESSION['s5']='';?>
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
            
            <?php 
            // 
            $head_longer=1;
            $head_height_percent=14;// 머리 높이 퍼센트
            $head_width=25;
            $head_height=$head_height_percent;
            ?>
            <?php
            $hair_height=35;
            $face_height=40;
            $chin_height=100-$hair_height-$face_height;
            ?>
            .head{
                width:<?=$head_width?>%;
                height:<?=h($head_height+$head_longer)?>%;
                margin:0 auto;
            }
            .hair{
                background:black;
                height:<?=$hair_height/((100+$head_longer)/100)?>%;
            }
            .face{
                height:<?=$face_height?>%;

                <?=skin(100)?>

                margin:0 auto;
            }
            <?php
            $chin_top=0;

            $slice_num=100;
            
                $add_tick=0.1;
                $idontknow=0.16;
            $part_height=$chin_height/$slice_num*$idontknow+$add_tick;
            $part_top=($hair_height+$face_height)/100*($head_longer+$head_height)-$part_height;

            for($i=0;$i<$slice_num;$i++){
                $part_width=$head_width*(1-$i/$slice_num);
                /* 
                pow(x/$slice_num)+pow(y/100)=1
                    $i               $width
                 */
                $part_top+=$part_height-$add_tick;
            ?>
            .chin<?=$i?>{
                left:<?=50-$part_width/2?>%;
                top:<?=$part_top?>%;
                
                height:<?=$part_height?>%;
                width:<?=$part_width?>%;
                
                <?php
                if($_SESSION['s15']==1&$_SESSION['s5']==''){
                    ?>
                    background:<?=$_SESSION['s11']?>;
                    <?php
                }else{
                    ?>
                    <?=skin(100)?>
                    <?php
                }
                ?>
                position:absolute;
                margin:0 auto;
            }
            <?php
            }
            ?>
            <?php $neck_height_percent=10-3.33-1.67;// 목 높이 퍼센트
                $neck_height=$neck_height_percent;?>
            .neck{
                height:<?=h($neck_height_percent-$head_longer)+0.5?>%;
                <?php
                $neck_width=17;
                ?>
                width:<?=$neck_width?>%;
                margin:0 auto;
                /* visibility:hidden; */
            }
            .neck_clone{
                <?php
                $neck_clone_higher=5;
                ?>
                top:<?=$head_height-$neck_clone_higher?>%;
                z-index:-1;
                left:<?=50-$neck_width/2?>%;
                position:absolute;
                height:<?=$neck_height_percent+$neck_clone_higher?>%;
                <?=skin(70)?>
                width:<?=$neck_width?>%;
            }
        /* 상체 */
            .upper-body{
                <?php $E=50;// 몸통 너비 
                $upper_body_short=5;//
                $lower_body_long=$upper_body_short;
                $arm_short=3;
                $width_percent_upper_body=$E;
                $height_percent_upper_body=37;
                $upper_body_width=$E;
                $upperbody_height=$height_percent_upper_body;
                $upper_body_width_slim=5;?>
                <?=skin(95);?>
                height:<?=h($height_percent_upper_body-$upper_body_short)?>%;
                width:<?=w($width_percent_upper_body-$upper_body_width_slim)?>%;
                position:absolute;
            }
            <?php $RR=17;// 팔 너비
            // 팔 높이
            $height_percent_arm=36;
            $width_percent_arm=$RR;
            $arm_width_percent=$width_percent_arm;
            $R=w($RR*2);
            $arm_width_percent=$RR;?>
            .arm{
                <?php
                $arm_short=4;
                ?>
                top:<?=$head_height+$neck_height+$arm_short?>%;
                <?=skin(90)?>
                height:<?=$height_percent_arm-$arm_short?>%;
                /* top:0; */
                position:absolute;
                z-index:0;
                <?php $arm_slim=8;?>
                width:<?=$RR-$arm_slim?>%;
            }
            .hand{
                <?=skin(100)?>
                margin:0 auto;
                position:relative;
                top:100%;
                height:<?=20+$arm_short*$height_percent_arm/100?>%;
                <?php $R=15;?>
                width:<?=100+$R?>%;
                left:<?=-$R/2?>%;
                border-bottom:<?=$_SESSION['s17']/100?>px solid black;
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
                <?php $hip_width=40;$lower_body_height=44+$lower_body_long;
                    $lowerbody_width=$hip_width;
                    $lower_body_width=$hip_width;?>
                width:<?=$hip_width?>%;
                height:<?=h($lower_body_height)?>%;
                margin:0 auto;
                position:absolute;
                z-index:0;
                top:<?=$head_height+$neck_height_percent+$upperbody_height
                -$upper_body_short?>%;
                left:<?=50-$hip_width/2?>%;
            }

            .hip{
                <?=skin(85)?>
                <?php $hip_height=15;?>
                height:<?=$hip_height?>%;
                position:absolute;
                width:100%;
                z-index:-1;
            }
            .legs{<?php 
            $legs_height=100-$hip_height;
            $leg_height=$legs_height;?>
                height:<?=$legs_height?>%;
                position:absolute;
                width:100%;
                top:<?=$hip_height?>%;
            }
            .leg{
                <?php 
                    $leg_slim=1;
                    $leg_width=50-$leg_slim;?>
                width:<?=$leg_width?>%;
                display:flex;
                align-items:flex-end;
                position:absolute;
                height:100%;
                left:<?=50-$leg_width+$leg_slim/3?>%;
            }
            /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
            <?php 
            //========
            //====================
            //=====================================
            $max=50;
            $start_width=$leg_width*2;
            $total_height=$legs_height+1;
            //=====================================
            //====================
            //========
            $part_height=$total_height/$max;
            $part_width=$start_width;
            $top=0;
            $num=1;
            while($num<$max+1){?>
                .line_leg<?=$num++?>{
                    <?php
                    if($num<$max*0.8){
                        ?>
                        <?=skin(80)?>
                        <?php
                    }else{
                        if($_SESSION['s5']==''){
                            ?>
                            background:black;
                            <?php
                        }else{
                            ?>
                            <?=skin(80)?>
                            <?php
                        }
                    }
                    ?>
                    margin:0 auto;
                    position:absolute;
                    width:<?=$part_width+($num-1)*0.6?>%;
                    height:<?=$part_height?>%;
                    top:<?=$top?>%;
                    <?php $top+=$part_height;?>
                    left:<?=50-($part_width)/2-($num-1)/2*0.6?>%;
                    
                    <?php 
                    //========
                    //====================
                    //=====================================
                    $part_width-=$start_width/$max;//직선
                    // $line_leg_width=sqrt(pow($start_width,2)-pow(($num-2)/$max*$start_width,2));//바깥쪽곡선
                    // $line_leg_width*=0.95;//안쪽곡선
                    //=====================================
                    //====================
                    //========
                    ?>
                }<?php
            }
            ?>
            /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
            .leg.right{
                left:<?=50+$leg_slim*2/3?>%;
            }
            .foot{
                <?php 
                $foot_height=14;
                $foot_width=80;
                $foot_side_tab=6;
                ?>

                <?=skin(90)?>
                margin:0 auto;
                height:<?=$foot_height?>%;
                width:<?=$foot_width?>%;
                left:<?=50-$foot_width/2-$foot_side_tab/2?>%;
                position:absolute;
                border-bottom:<?=$_SESSION['s17']/100?>px solid black;
            }
            .foot.right{
                left:<?=50-$foot_width/2+$foot_side_tab/2?>%;
            }

    /* 옷 */
            /* 셔츠 */  
                .shirts *{
                    border-bottom:<?=$_SESSION['s17']/100?>px solid black;
                    <?php 
                    if(!isset($_SESSION['s3'])){$_SESSION['s3']='white';}?>
                    $shirts_color=$_SESSION['s3'];
                    background:<?=$_SESSION['s3']?>;
                    position:absolute;
                    z-index:2;
                    <?=$_SESSION['s5']?>
                }
                .shirts .body{
                    /* background:blue; */
                    <?php // 높 너비
                    $shirts_short=3;
                    $shirts_body_long=4;
                    if($_SESSION['s23']==1){
                        $shirts_arm_short=2;
                    }else if($_SESSION['s23']==2){
                        $shirts_arm_short=17;
                    }else{
                        $shirts_arm_short=-1;
                    }
                    // 몸통너비퍼센트
                    $R=$width_percent_upper_body;
                    // 몸통 슬림
                    $body_slim=5;
                    // 몸통높이퍼센트
                    $Rr=$height_percent_upper_body+0;
                    $upper_body_height=$height_percent_upper_body;?>
                    width:<?=$R-$body_slim?>%;
                    height:<?=$Rr-$shirts_short+$shirts_body_long?>%;
                    <?php 
                        // 머리높이+목높이
                        $R=$head_height_percent+$neck_height_percent;
                        // 중앙-몸통너비퍼센트/2
                        $Rr=50-$width_percent_upper_body/2?>
                    top:<?=$R?>%;
                    left:<?=$Rr+$body_slim/2?>%;
                }
                .shirts .arm{
                    /* background:green; */
                    <?php // 팔 높 너비
                    $no_slim=5;
                    $shirts_arm_slim=5-$no_slim;
                    // 팔너비퍼센트
                    $R=$width_percent_arm;
                    $arm_width=$R;
                    // 팔높이퍼센트
                    $Rr=$height_percent_arm+-$shirts_short;
                    $shirts_arm_height=$Rr;
                    ?>
                    width:<?=$R-$shirts_arm_slim?>%;
                    height:<?=$Rr-$shirts_arm_short?>%;
                    <?php // 탑 레프트
                        // 머리높이+목높이
                        $R=$head_height_percent+$neck_height_percent;
                        // 중앙-몸통너비퍼센트/2-팔너비퍼센트
                        $Rr=50-$width_percent_upper_body/2-$arm_width_percent?>
                    top:<?=$R?>%;
                    left:<?=$Rr+$shirts_arm_slim/2+$body_slim-$no_slim/2?>%;
                    background:transparent;
                    border:0;
                }
                .shoulder_shirts{
                    <?php 
                    if($_SESSION['s23']==0){
                        $shoulder_shirts_height=30;
                    }
                    else if($_SESSION['s23']==1){
                        $shoulder_shirts_height=33;
                    }
                    else{
                        $shoulder_shirts_height=63;
                    }
                    $fix_shoulder_width=0;
                    ?>
                    height:<?=$shoulder_shirts_height?>%;
                    width:<?=101+$fix_shoulder_width?>%;
                    border:0px;
                    background:blue;
                    /* background:transparent; */
                    display:flex;
                }
                <?php
                $line_shirts_shoulder_max=50;
                $part_height=100/$line_shirts_shoulder_max;
                $part_top=-2*$part_height;
                for($i=0;$i<$line_shirts_shoulder_max;$i++){
                    $part_width=sqrt(pow(100,2)-pow(100*($line_shirts_shoulder_max-$i)/$line_shirts_shoulder_max,2));
                    $part_left=100-$part_width;
                    $part_top+=$part_height;
                    ?>
                    /* ` */
                    .line_shirts_shoulder<?=$i?>{
                        position:absolute;
                        width:<?=$part_width?>%;
                        height:<?=$part_height+$add_tick?>%;
                        left:<?=$part_left?>%;
                        top:<?=$part_top-$add_tick?>%;
                        background:red;
                    }
                    .line_shirts_shoulder<?=$i?>.right{
                        left:0%;
                    }
                    <?php
                }
                ?>
                .shoulder_inside{
                    <?php
                    $shoulder_inside_width=60;
                    ?>
                    width:<?=$shoulder_inside_width?>%;
                    height:100%;
                    position:relative;
                    background:red;
                }
                .shoulder_outside{
                    width:<?=100-$shoulder_inside_width?>%;
                    height:100%;
                    position:relative;
                    background:green;
                }
                .shoulder_shirts.right{
                    left:-1%;
                }
                /* .shirts_arm_line_left<?=$num++?>{ */
                    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                    <?php 
                    $add_tick=0.5;
                    //========
                    //====================
                    //=====================================
                    $max=50;
                    $total_height=100-$shoulder_shirts_height;
                    $start_width=100;
                    $last_width=140;
                    //=====================================
                    //====================
                    //========
                    $part_height=$total_height/$max;
                    $part_width=$start_width;
                    $top=-$part_height+$shoulder_shirts_height;
                    $num=1;
                    while($num<$max+1){?>
                        .shirts_arm_line_left<?=$num++?>{
                            /* background:white; */
                            /* background:transparent; */
                            margin:0 auto;
                            /* border:<?=$zipper_width*$_SESSION['s17']/100?>px solid <?=$zipper_color?>; */
                            border-top:0px;
                            border-bottom:0px;
                            position:absolute;
                            <?=$_SESSION['s5']?>
                            width:<?=$part_width+($num-2)/100*$last_width?>%;
                            height:<?=$part_height+$add_tick?>%;
                            <?php $top+=$part_height;?>
                            top:<?=$top-$add_tick?>%;
                            left:<?=50-($part_width)/2-($num-2)/100*$last_width*0.7?>%;
                            <?php 
                            //========
                            //====================
                            //=====================================
                            $part_width-=$start_width/$max;//직선
                            // $part_width=sqrt(pow($start_width,2)-pow(($num-2)/$max*$start_width,2));//바깥쪽곡선
                            // $part_width*=0.95;//안쪽곡선
                            //=====================================
                            //====================
                            //========
                            ?>
                            /* <?php
                            if($_SESSION['s14']==0){
                                ?>
                                background:transparent;
                                border-color:transparent;
                                <?php
                            }
                            ?> */
                        }<?php
                    }?>
                    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                .shirts .arm.right{
                    <?php // 탑 레프트
                        // 중앙+몸통너비퍼센트/2
                        $Rr=50+$width_percent_upper_body/2?>
                    left:<?=$Rr+$shirts_arm_slim/2-$body_slim+$no_slim/2?>%;
                }
                /* .shirts_arm_line_right<?=$num++?>{ */
                    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                        <?php 
                        //========
                        //====================
                        //=====================================
                        $max=50;
                        $total_height=100-$shoulder_shirts_height;
                        $start_width=100;
                        $last_width=140;
                        //=====================================
                        //====================
                        //========
                        $part_height=$total_height/$max;
                        $part_width=$start_width;
                        $top=-$part_height+$shoulder_shirts_height;
                        $num=1;
                        while($num<$max+1){?>
                            .shirts_arm_line_right<?=$num++?>{
                                /* background:white; */
                                margin:0 auto;
                                /* border:<?=$zipper_width*$_SESSION['s17']/100?>px solid <?=$zipper_color?>; */
                                border-top:0px;
                                border-bottom:0px;
                                position:absolute;
                                <?=$_SESSION['s5']?>
                                width:<?=$part_width+($num-2)/100*$last_width?>%;
                                height:<?=$part_height+$add_tick?>%;
                                <?php $top+=$part_height;?>
                                top:<?=$top-$add_tick?>%;
                                left:<?=50-($part_width)/2-($num-2)/100*$last_width*0.3?>%;
                                <?php 
                                //========
                                //====================
                                //=====================================
                                $part_width-=$start_width/$max;//직선
                                // $part_width=sqrt(pow($start_width,2)-pow(($num-2)/$max*$start_width,2));//바깥쪽곡선
                                // $part_width*=0.95;//안쪽곡선
                                //=====================================
                                //====================
                                //========
                                ?>
                                /* <?php
                                if($_SESSION['s14']==0){
                                    ?>
                                    background:transparent;
                                    border-color:transparent;
                                    <?php
                                }
                                ?> */
                            }<?php
                        }?>
                    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
            /* 바지 */
                .pants *{
                    position:absolute;
                    z-index:1;
                    <?=$_SESSION['s5']?>
                }
                .pants .upper{
                    border-bottom:<?=$_SESSION['s17']/100?>px solid black;
                    <?php if(!isset($_SESSION['s4']))$_SESSION['s4']='white';?>
                    background:<?=$_SESSION['s4']?>;
                    <?php $pants_upper_plus=3;
                    $pants_upper_width=$hip_width+$pants_upper_plus;
                    ?>
                    width:<?=$pants_upper_width?>%;
                    height:<?=$hip_height*$lower_body_height/100?>%;
                    top:<?=$head_height+$neck_height+$upperbody_height
                    -$upper_body_short?>%;
                    z-index:1;
                    left:<?=50-$lowerbody_width/2-$pants_upper_plus/2?>%;
                        <?=$_SESSION['s5']?>
                }
                .pants .leg{
                    z-index:2;
                    <?php 
                    if($_SESSION['s24']==0){
                        $pant_short=10.9;
                    }
                    else{
                        $pant_short=13;
                    }
                    $pants_slim=0;
                    $pant_width=$pants_upper_width/2;
                    ?>
                    width:<?=$pant_width?>%;
                    height:<?=$upper_body_short+$lower_body_height/100*$legs_height-$pant_short?>%;
                    top:<?=-$upper_body_short+$head_height+$neck_height+$upperbody_height+$hip_height*$lower_body_height/100?>%;
                    left:<?=50-$pant_width?>%;
                }
                /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                <?php 
                //========
                //====================
                //=====================================
                $max=50;
                $start_width=$leg_width*2;
                $total_height=100;
                //=====================================
                //====================
                //========
                $part_height=$total_height/$max;
                $part_width=$start_width;
                $last_width=0.8;
                $top=0;
                $num=1;
                while($num<$max+1){?>
                    .line_pant<?=$num++?>{
                        border-bottom:<?=$_SESSION['s17']/100?>px solid black;
                        <?php if(!isset($_SESSION['s4']))$_SESSION['s4']='white';?>
                        background:<?=$_SESSION['s4']?>;
                        /* background:<?=rgb(110)?>; */
                        margin:0 auto;
                        position:absolute;
                        width:<?=$part_width+($num)*$last_width?>%;
                        height:<?=$part_height+$add_tick?>%;
                        top:<?=$top-$add_tick?>%;
                        <?php $top+=$part_height;?>
                        left:<?=50-($part_width)/2-($num-1)*0.4*$last_width?>%;
                        <?=$_SESSION['s5']?>
                        <?php 
                        //========
                        //====================
                        //=====================================
                        $part_width-=$start_width/$max;//직선
                        // $line_leg_width=sqrt(pow($start_width,2)-pow(($num-2)/$max*$start_width,2));//바깥쪽곡선
                        // $line_leg_width*=0.95;//안쪽곡선
                        //=====================================
                        //====================
                        //========
                        ?>
                    }
                    .line_pant<?=$num-1?>.right{
                        left:<?=50-($part_width)/2-($num+1)*0.56*$last_width?>%;
                    }
                    <?php
                }
                ?>
                /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                .pants .leg.right{
                    left:<?=50?>%;
                }
                .leg.middle{
                    z-index:1;
                    background:<?=$_SESSION['s4']?>;
                    width:3%;
                    height:1%;
                    top:<?=$head_height+$neck_height+$shirts_height?>%;
                    left:<?=50-1.5?>%;
                        <?=$_SESSION['s5']?>
                }
            /* 신발 */
                .shoe{
                    <?php if(!isset($_SESSION['s9']))$_SESSION['s9']='white';?>
                    background:<?=$_SESSION['s9']?>;
                    border-bottom:<?=$_SESSION['s17']/100?>px solid black;
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
                    <?php $hat_height=4.5;?>
                    position:absolute;
                    width:<?=$head_width?>%;
                    height:<?=$hat_height?>%;
                    border-bottom:<?=$_SESSION['s17']/100?>px solid black;
                    top:0;
                    left:<?=50-$head_width/2?>%;
                    z-index:1;
                    <?=$_SESSION['s5']?>
                    <?php 
                    if($_SESSION['s13']==0){
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
                    <?php $mask_height=5.5;?>
                    position:absolute;
                    width:<?=$head_width?>%;
                    height:<?=($face_height-$chin_height+5)/100*$head_height?>%;
                    top:<?=$head_height-$mask_height?>%;
                    left:<?=50-$head_width/2?>%;
                    z-index:1;
                    <?=$_SESSION['s5']?>
                    <?php 
                    if($_SESSION['s15']==0){
                        ?>
                        background:transparent;
                        border-color:transparent;
                        <?php
                    }?>
                }
            /* 자켓 */  
                .jacket *{
                    border-bottom:<?=$_SESSION['s17']/100?>px solid black;
                    <?php if(!isset($_SESSION['s12'])){$_SESSION['s12']='white';}?>
                    background:<?=$_SESSION['s12']?>;
                    position:absolute;
                    z-index:3;
                    <?=$_SESSION['s5']?>
                    <?php 
                    if($_SESSION['s14']==0){
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
                    $jacket_short=1;
                    // 몸통높이퍼센트
                    $jacket_height=$height_percent_upper_body-$jacket_short;
                    $Rr=$jacket_height?>
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
                    if($_SESSION['s25']==0){
                        $jacket_short=0.5;
                    }else if($_SESSION['s25']==1){
                        $jacket_short=8;
                    }else {
                        $jacket_short=19.5;
                    }
                    // 팔높이퍼센트
                    $Rr=$height_percent_arm+-$jacket_short;
                    $jacket_arm_slim=1.2;
                    ?>
                    width:<?=$R-$jacket_arm_slim?>%;
                    height:<?=$Rr?>%;
                    <?php // 탑 레프트
                        // 머리높이+목높이
                        $R=$head_height_percent+$neck_height_percent;
                        // 중앙-몸통너비퍼센트/2-팔너비퍼센트
                        $Rr=50-$width_percent_upper_body/2-$arm_width_percent?>
                    top:<?=$R?>%;
                    left:<?=$Rr+$jacket_arm_slim+$body_slim/2?>%;
                    background:transparent;
                    border-color:transparent;
                }
                .shoulder_jacket{
                    <?php 
                    if($_SESSION['s25']==0){
                        $shoulder_jacket_height=50;
                    }
                    else if($_SESSION['s25']==1){
                        $shoulder_jacket_height=70;
                    }
                    else{
                        $shoulder_jacket_height=100;
                    } 
                    ?>
                    height:<?=$shoulder_jacket_height+1?>%;
                    width:101%;
                    background:transparent;
                }
                .shoulder_jacket.right{
                    left:-1%;
                }
                <?php
                $line_jacket_shoulder_max=50;
                $part_height=105/$line_jacket_shoulder_max;
                $part_top=-2*$part_height;
                for($i=0;$i<$line_jacket_shoulder_max;$i++){
                    $part_width=sqrt(pow(100,2)-pow(100*($line_jacket_shoulder_max-$i)/$line_jacket_shoulder_max,2));
                    $part_left=100-$part_width;
                    $part_top+=$part_height;
                    ?>
                    .line_jacket_shoulder<?=$i?>{
                        position:absolute;
                        width:<?=$part_width?>%;
                        height:<?=$part_height+$add_tick?>%;
                        left:<?=$part_left?>%;
                        top:<?=$part_top-$add_tick?>%;
                        border:0;
                    }
                    .line_jacket_shoulder<?=$i?>.right{
                        left:0%;
                    }
                    <?php
                }
                ?>
                .jacket_shoulder_over{
                    display:flex;
                    background:transparent;
                    <?php
                    $jacket_shoulder_over_height=50;
                    ?>
                    height:<?=$jacket_shoulder_over_height?>%;
                    width:100%;
                }
                    .jacket_shoulder_inside{
                        <?php
                        $shoulder_inside_width=70;
                        ?>
                        width:<?=$shoulder_inside_width?>%;
                        height:105%;
                        /* background:red; */
                        position:relative;
                        border:0;
                    }
                    .jacket_shoulder_outside{
                        width:<?=100-$shoulder_inside_width?>%;
                        height:100%;
                        position:relative;
                        background:<?=rgb(55)?>;
                    }
                .jacket_shoulder_under{
                    /* background:red; */
                    height:<?=100?>%;
                    width:100%;
                }
                /* .jacket_arm_line_left<?=$num++?>{ */
                    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                        <?php 
                        //========
                        //====================
                        //=====================================
                        $max=50;
                        $total_height=100-$shoulder_jacket_height;
                        $start_width=100;
                            if($_SESSION['s25']==0){
                                $control_last_width=15;
                                $control_left=25;
                            }
                            else if($_SESSION['s25']==1){
                                $control_last_width=40;
                                $control_left=18;
                            }
                            else{
                                $control_last_width=50;
                            }
                        $last_width=150+$control_last_width;
                        //=====================================
                        //====================
                        //========
                        $part_height=$total_height/$max;
                        $part_width=$start_width;
                        $top=-$part_height+$shoulder_jacket_height;
                        $num=1;
                        while($num<$max+1){?>
                            .jacket_arm_line_left<?=$num++?>{
                                margin:0 auto;
                                /* border:<?=$zipper_width*$_SESSION['s17']/100?>px solid <?=$zipper_color?>; */
                                border-top:0px; 
                                border-bottom:0px;
                                position:absolute;
                                <?=$_SESSION['s5']?>
                                width:<?=$part_width+($num-2)/100*$last_width?>%;
                                height:<?=$part_height+$add_tick?>%;
                                <?php $top+=$part_height;
                                $jacket_arm_line_position_left=0.6;?>
                                top:<?=$top-$add_tick?>%;
                                left:<?=50-($part_width)/2-($num-2)/100*($last_width+$control_left-$control_last_width)*$jacket_arm_line_position_left
                                    ?>%;
                                <?php 
                                //========
                                //====================
                                //=====================================
                                $part_width-=$start_width/$max;//직선
                                // $part_width=sqrt(pow($start_width,2)-pow(($num-2)/$max*$start_width,2));//바깥쪽곡선
                                // $part_width*=0.95;//안쪽곡선
                                //=====================================
                                //====================
                                //========
                                ?>
                                /* <?php
                                if($_SESSION['s14']==0){
                                    ?>
                                    background:transparent;
                                    border-color:transparent;
                                    <?php
                                }
                                ?> */
                            }<?php
                        }?>
                    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                .jacket .arm.right{
                    <?php // 탑 레프트
                        // 중앙+몸통너비퍼센트/2
                        $Rr=50+$width_percent_upper_body/2?>
                    left:<?=$Rr-$body_slim/2?>%;
                }
                /* .jacket_arm_line_right<?=$num++?>{ */
                    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                        <?php 
                        $part_height=$total_height/$max;
                        $part_width=$start_width;
                        $top=-$part_height+$shoulder_jacket_height;
                        $num=1;
                        while($num<$max+1){?>
                            .jacket_arm_line_right<?=$num++?>{
                                margin:0 auto;
                                /* border:<?=$zipper_width*$_SESSION['s17']/100?>px solid <?=$zipper_color?>; */
                                border-top:0px;
                                border-bottom:0px;
                                position:absolute;
                                <?=$_SESSION['s5']?>
                                width:<?=$part_width+($num-2)/100*$last_width?>%;
                                height:<?=$part_height+$add_tick?>%;
                                <?php $top+=$part_height;?>
                                top:<?=$top-$add_tick?>%;
                                left:<?=50-($part_width)/2-($num-2)/100*($last_width-$control_left*1.4+$control_last_width*1.4)*(1-$jacket_arm_line_position_left)?>%;
                                <?php 
                                //========
                                //====================
                                //=====================================
                                $part_width-=$start_width/$max;//직선
                                // $part_width=sqrt(pow($start_width,2)-pow(($num-2)/$max*$start_width,2));//바깥쪽곡선
                                // $part_width*=0.95;//안쪽곡선
                                //=====================================
                                //====================
                                //========
                                ?>
                                /* <?php
                                if($_SESSION['s14']==0){
                                    ?>
                                    background:transparent;
                                    border-color:transparent;
                                    <?php
                                }
                                ?> */
                            }<?php
                        }?>
                    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                
                /* .jacket_open12345 */
                    <?php 
                    if($_SESSION['s12']=='#3c3f3a'|$_SESSION['s12']=='#d9d4ce'){
                        $zipper_color='white';
                    }else{
                        $zipper_color='black';
                    }
                    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                    //========
                    //====================
                    //=====================================
                    $max=100;
                    if($_SESSION['s22']==1){
                        $start_width=0;
                        $background_color=$zipper_color;
                    }
                    else{
                        $start_width=40;
                        $background_color=$_SESSION['s3'];
                    }
                    $total_height=15;
                    //=====================================
                    //====================
                    //========
                    $jacket_open_height=$total_height/$max;
                    $jacket_open_width=$start_width;
                    $zipper_width=1/2;
                    if($_SESSION['s14']==1){
                        $top=-$jacket_open_height+$add_tick;
                    }
                    else{
                        $top=-$jacket_open_height;
                    }
                    $num=1;
                    while($num<$max+1){?>
                        .jacket_open<?=$num++?>{
                            background:<?=$background_color?>;
                            margin:0 auto;
                            border:<?=$zipper_width*$_SESSION['s17']/100?>px solid <?=$zipper_color?>;
                            border-top:0px;
                            border-bottom:0px;
                            position:absolute;
                            <?=$_SESSION['s5']?>
                            width:<?=$jacket_open_width?>%;
                            height:<?=$jacket_open_height+$add_tick?>%;
                            <?php $top+=$jacket_open_height;?>
                            top:<?=$top-$add_tick?>%;
                            left:<?=50-($jacket_open_width+$zipper_width*2*$_SESSION['s17']/100)/2?>%;
                            <?php 
                            //========
                            //====================
                            //=====================================
                            $jacket_open_width-=$start_width/$max;//직선
                            // $jacket_open_width=sqrt(pow($start_width,2)-pow(($num-2)/$max*$start_width,2));//바깥쪽곡선
                            // $jacket_open_width*=0.95;//안쪽곡선
                            //=====================================
                            //====================
                            //========
                            ?>
                            <?php
                            if($_SESSION['s14']==0){
                                ?>
                                background:transparent;
                                border-color:transparent;
                                <?php
                            }
                            ?>
                        }<?php
                    }?>
                    /* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
                .zipper{
                    width:0;
                    border:<?=$zipper_width*$_SESSION['s17']/100?>px solid <?=$zipper_color?>;
                    background:<?=$zipper_color?>;
                        <?=$_SESSION['s5']?>
                    <?php $idontknow=2;?>
                    height:<?=$jacket_height/$upper_body_height*100-$total_height+$idontknow?>%;
                    position:absolute;
                    left:<?=50-$zipper_width/2?>%;
                    top:<?=$total_height?>%;
                    <?php
                    if($_SESSION['s14']==0){
                        ?>
                        background:transparent;
                        border-color:transparent;
                        <?php
                    }
                    ?>
                }
            /* 안경 */
                .glasses{
                    width:<?=$head_width?>%;
                    height:<?=$glasses_height=23*$head_height/100?>%;
                    position:absolute;
                    left:<?=50-$head_width/2?>%;
                    top:<?=($hair_height+5)*$head_height/100?>%;
                    z-index:2;
                    display:flex;
                    <?=$_SESSION['s5']?>
                }.glass{
                    <?php 
                    $ear_width=11;
                    $nose_width=$ear_width*2;
                    $glass_width=100-$nose_width*2;
                    ?>
                    background:transparent;
                    width:<?=$glass_width?>%;
                    height:100%;
                    border:<?=$_SESSION['s17']/100?>px solid black;
                    <?php if($_SESSION['s21']==0){//
                        ?>
                        background:transparent;
                        border-color:transparent;
                        <?php
                    }?>
                    <?=$_SESSION['s5']?>
                }
                .glasses_ear{
                    position:relative;
                    width:<?=$ear_width?>%;
                    height:<?=$_SESSION['s17']/100*4?>%;
                    background:yellow;
                    top:<?=100/3?>%;
                    <?php if($_SESSION['s21']==0){
                        ?>
                        background:transparent;
                        border-color:transparent;
                        <?php
                    }?>
                    <?=$_SESSION['s5']?>

                }
                .glasses_nose{
                    /* ! */
                    position:relative;
                    top:<?=100/4?>%;
                    width:<?=$nose_width?>%;
                    height:<?=$_SESSION['s17']/100*3?>%;
                    background:yellow;
                    <?php if($_SESSION['s21']==0){
                        ?>
                        background:transparent;
                        border-color:transparent;
                        <?php
                    }?>
                    <?=$_SESSION['s5']?>
                }
    </style>
<!-- ---------------------------------------------------------------- -->

<!-- ==================== My style ==================== -->
    <form action=""method='post'id='hidden_menu_form'>
        <input type="hidden"id='hidden_menu_id'name='hidden_menu'>
    </form>
    <form action=""method='post'id='form_id'>
    <input type="hidden"id='name_id'name='name'>
    </form>
    <?php
    function update($conn,$session_name){
        $sql="
        update saved set
        value='".$_SESSION[$session_name]."' where session_name='".$session_name."'
        ";
        $result=mysqli_query($conn,$sql);
    }
    if(isset($_POST['name'])){
        if($_POST['name']=='저장'){
            $num=array(10,11,12,13,14,15,4,
                        9,22,23,24,25,21,3);
            for($i=0;$i<count($num);$i++){
                update($conn,'s'.$num[$i]);
            }
        }
    }
    
    if(!isset($_SESSION['hidden_menu'])){
        $_SESSION['hidden_menu']='display:none;';
    }
    if(isset($_POST['hidden_menu'])){
        if($_SESSION['hidden_menu']==""){
            $_SESSION['hidden_menu']="display:none;";
        }else{
            $_SESSION['hidden_menu']="";
        }
    }

    ?>
    <style>
    .modal{
        width:100%;
        height:100%;
        background:black;
        position:absolute;
        top:0;
        left:0;
        opacity:80%;
        z-index:4;
        <?=$_SESSION['hidden_menu']?>
    }
    .hidden_menu{
        <?=$_SESSION['hidden_menu']?>
        position:absolute;
        z-index:5;
        background:<?=rgb(50)?>;
        <?php
        $device_width=$_SESSION['device_width'];
        $device_height=$_SESSION['device_height'];

        $hidden_menu_width=60;
        $hidden_menu_height=8;
        $menu_count=4;
                
        if($device_width==393&$device_height==873){?>
            top:<?=50-$hidden_menu_height*$menu_count/2?>%;
            left:<?=50-$hidden_menu_width/2?>%;
        <?php 
            $hidden_menu_width*=$display_width/100;
            $hidden_menu_height*=$display_height/100;
        }else if($device_width==1440&$device_height==900){
            $hidden_menu_width*=$display_width/100;
            $hidden_menu_height*=$display_height/100;
            ?>
            top:<?=$device_height/2-$hidden_menu_height*$menu_count?>;
            left:<?=$device_width/2-$hidden_menu_width/2?>;
            <?php
        }
        //윈도우     
        else if($device_width==1920&$device_height==1080){
            $hidden_menu_width*=$display_width/100;
            $hidden_menu_height*=$display_height/100;
            ?>
            top:<?=$device_height/2-$hidden_menu_height*$menu_count?>;
            left:<?=$device_width/2-$hidden_menu_width/2?>;
            left:<?=30?>%;
            <?php
        }else{
            $hidden_menu_width*=$display_width/100;
            $hidden_menu_height*=$display_height/100;
            ?>
            top:<?=$device_height/2-$hidden_menu_height*$menu_count/2?>;
            left:<?=$device_width/2-$hidden_menu_width/2?>;
            <?php
        }
        //         die("
        // }</style>
        //     device_width: ".$device_width.', device_height: '.$device_height
        //     );
        ?>
        width:<?=$hidden_menu_width?>;
    }
    .hidden_menu >.button-horizon{
        /* background:red; */
        height:<?=$hidden_menu_height?>;
    }
    </style>


<!-- ---------------------------------------------------------------- -->

<!-- ==================== body ==================== -->
    <title>CCC</title>
    <body onkeydown='keydown()'>
    <!-- 눈에 보여지는 전체 화면 -->
        <div class="display">
        <!-- 메뉴들 -->
            <!-- hidden menu -->
                <div class="modal"onclick="hidden_menu_form.submit();"></div>
                <div class="hidden_menu"id="hidden_menu">
                    <?php
                    f4("name_id.value='저장';form_id.submit();","저장");
                    f4("location.href='..';",'홈');
                    f4("num.value=1;form_if.submit();",'재시작');
                    f4("hidden_menu_form.submit();",'닫기');
                    ?>
                </div>
            <!-- ------------- -->
            <!-- ------------- -->
            <!-- ------------- -->
            <!-- 네비게이션메뉴 -->
                <div class="navi">
                    <div class="menu-horizon">
                        <?php
                        f4("hidden_menu_form.submit();",'메뉴');
                        f4("num.value=9;form_if.submit();",'+');
                        f4("num.value=8;form_if.submit();",'-');
                        ?>
                    </div>
                </div>
            <!-- ------------- -->
            <!-- ------------- -->
            <!-- ------------- -->
            <!-- 메뉴 사람나오는곳 메뉴 -->
        <div class="top">
        <!-- 왼메뉴 -->
                <div class="menu">
                    <div class="flex-centered">
                    <!-- 왼메뉴 만들기 -->
                        <?php
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
                <!-- - -->
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
                        <div class="arm left">
                            <div class="shoulder_shirts">
                                <div class="shoulder_outside">
                                <?php
                                // `
                                for($i=0;$i<$line_shirts_shoulder_max;$i++){
                                    ?>
                                    <div class="line_shirts_shoulder<?=$i?>"></div>
                                    <?php
                                }
                                ?>
                                </div>
                                <div class="shoulder_inside"></div>
                            </div>
                            <?php $num=1; while($num<$max+1){?>
                            <div class="shirts_arm_line_left<?=$num++?>"></div>
                            <?php }?>
                        </div>
                        <div class="arm right">
                            <div class="shoulder_shirts right">
                                <div class="shoulder_inside"></div>
                                <div class="shoulder_outside">
                                <?php
                                for($i=0;$i<$line_shirts_shoulder_max;$i++){
                                    ?>
                                    <div class="line_shirts_shoulder<?=$i?> right"></div>
                                    <?php
                                }
                                ?>
                                </div>
                            </div>
                            <?php $num=1; while($num<$max+1){?>
                            <div class="shirts_arm_line_right<?=$num++?>"></div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="pants">
                        <div class="upper"></div>
                        <div class="leg left">
                            <?php $num=1; while($num<$max+1){?>
                                <div class="line_pant<?=$num++?>"></div>
                            <?php }?>
                        </div>
                        <div class="leg middle"></div>
                        <div class="leg right">
                            <?php $num=1; while($num<$max+1){?>
                                <div class="line_pant<?=$num++?> right"></div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="hat"></div>
                    <div class="mask"></div>
                    <div class="jacket">
                        <div class="body">  
                            <div class="zipper"></div>
                            <?php $num=1; while($num<$max+1){?>
                            <div class="jacket_open<?=$num++?>"></div>
                            <?php }?>
                        </div>
                        <div class="arm left">
                            <div class="shoulder_jacket">
                                <div class="jacket_shoulder_under"></div>
                                <div class="jacket_shoulder_over">
                                    <div class="jacket_shoulder_outside">
                                    <?php
                                    for($i=0;$i<$line_jacket_shoulder_max;$i++){
                                        ?>
                                        <div class="line_jacket_shoulder<?=$i?>"></div>
                                        <?php
                                    }
                                    ?>
                                    </div>
                                    <div class="jacket_shoulder_inside"></div>
                                </div>
                            </div>
                            <?php $num=1; while($num<$max+1){?>
                            <div class="jacket_arm_line_left<?=$num++?>"></div>
                            <?php }?>
                        </div>
                        <div class="arm right">
                            <div class="shoulder_jacket right">
                                <div class="jacket_shoulder_under"></div>
                                <div class="jacket_shoulder_over">
                                    <div class="jacket_shoulder_inside"></div>
                                    <div class="jacket_shoulder_outside">
                                        <?php
                                        for($i=0;$i<$line_jacket_shoulder_max;$i++){
                                            ?>
                                            <div class="line_jacket_shoulder<?=$i?> right"></div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php $num=1; while($num<$max+1){?>
                            <div class="jacket_arm_line_right<?=$num++?>"></div>
                            <?php }?>
                        </div>
                    </div>
                <!-- - -->
                <!-- - -->
                <!--사람자체-->
                    <div class="head">
                        <div class="hair"></div>
                        <div class="face"></div>
                        <?php
                        for($i=0;$i<$slice_num;$i++){
                            ?>
                            <div class="chin<?=$i?>"></div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="neck_clone"></div>
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
                                <?php $num=1; while($num<$max+1){?>
                                    <div class="line_leg<?=$num++?>"></div>
                                <?php }?>
                                <div class="foot">
                                    <div class="shoe"></div>
                                </div>
                            </div>    
                            <div class="leg right">
                                <?php $num=1; while($num<$max+1){?>
                                    <div class="line_leg<?=$num++?>"></div>
                                <?php }?>
                                <div class="foot right">
                                    <div class="shoe"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- - -->
            <!-- - -->
            <!-- - -->
        <!-- 오른메뉴 -->
        <div class="menu">
            <div class="flex-centered">
            <!-- // 오른메뉴 만들기 -->
                <?php 
                if($_SESSION['s2']=='hat'&$_SESSION['s13']==0
                |$_SESSION['s2']=='mask'&$_SESSION['s15']==0
                |$_SESSION['s2']=='jacket'&$_SESSION['s14']==0
                ){}
                else{
                    $sql="select * from clothes where cloth='".$_SESSION['s2']."'";
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
                }
                ?>
            </div>
        </div>
        </div>
        <!-- ------------- -->
        <!-- ------------- -->
        <!-- ------------- -->
        <!-- 옵션메뉴 -->
            <div class="bottom">

            <div class="menu-horizon">

            <?php
            $sql="select * from options";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
                if($_SESSION['s14']==0&($row['session_num']==22|
                $row['session_num']==25)){}else{
                    f3($row['session_num'],$row['value'],$row['text']);
                }
            }
            ?>   

            </div>

            </div>
        </div>
    </body>
<!-- ---------------------------------------------------------------- -->