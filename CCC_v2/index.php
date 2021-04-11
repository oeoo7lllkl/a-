<?php
session_start();
// 폼이 포스트 제출 됬을 때
if(isset($_POST['num'])){
    // --------------------------------------------------------------------------------------------
    // 세션 재시작
    if($_POST['num']==1){
        session_destroy();
        session_start();
    }
    // --------------------------------------------------------------------------------------------
    // 정보 숨김 폰트 색 변경
    if($_POST['num']==3){
        if($_SESSION['hide_font_color']=='transparent'){
            $_SESSION['hide_font_color']='white';
            $_SESSION['hide_background_color']='black';
        }else{
            $_SESSION['hide_font_color']='transparent';
            $_SESSION['hide_background_color']='transparent';
        }
    }
    // --------------------------------------------------------------------------------------------
    // 색적용 
    if($_POST['num']==2){
        $color=$_POST['value'];
    }
    // --------------------------------------------------------------------------------------------
    // 옷 클릭
    if($_POST['num']==4){
        $_SESSION['s2']=$_POST['value'];
    }
    // --------------------------------------------------------------------------------------------
    // 색 클릭
    if($_POST['num']==5){
        if($_SESSION['s2']=='shirts'){
            $_SESSION['s3']=$_POST['value'];
        }else if($_SESSION['s2']=='pants'){
            $_SESSION['s4']=$_POST['value'];
        }
    }
}
// 쓸데 없는
{
    // 페이지 리로드 카운트
    {
        if(!isset($_SESSION['page_load_count'])){
            $_SESSION['page_load_count']=1;
        }else{
            $_SESSION['page_load_count']++;
        }
    }
    // rgb 세션
    // if(!isset($_SESSION['rgb_count'])){
        if(1){
        $_SESSION['rgb_count']=128;
        $_SESSION['rgb_result']=255;
    }
    // 함수
    {
        // 색변화 함수
        function rgb(){
            // 0   0   1   1   2   2   3   ... 127 127 128
            // 0   1   1   2   2   3   3   ... 127 128 0
            // 255 0   128 1   129 2   130 ... 254 127 255
            // 0   128 1   129 2   130 3   ... 127 255 0
            // 결과가 중간값보다 작으면
            if($_SESSION['rgb_result']<128){
                // 최댓값에서 rgb_count를 뺀값을 결과로
                $_SESSION['rgb_result']=128+$_SESSION['rgb_count'];
                // rgb_count++
                $_SESSION['rgb_count']+=10;
            }
            // 최대값을 넘으면
            else if($_SESSION['rgb_result']>=255|$_SESSION['rgb_count']>=127){
                // 0을 결과로
                $_SESSION['rgb_result']-=255;
                // rgb_count는 0으로
                $_SESSION['rgb_count']-=128;
            }
            // 아니면 
            else{
                // rgb_count 를 결과로
                $_SESSION['rgb_result']=$_SESSION['rgb_count'];
            }
            ?>
            rgb(<?=$_SESSION['rgb_result']?>,<?=$_SESSION['rgb_result']?>,<?=$_SESSION['rgb_result']?>)
            <?php
        }
        function rgb2(){
            
            // 0~5
            //     0  1  1  2  2  3->0         rgb_count
            //     0  5-0                      계산
            //           1  5-1                ''
            //                 2  5-2          ''

            //     0, 5, 1, 4, 2, 3=(5+1)/2    결과

            //                                 결과시작
            //                 rgb_count   0   0   1   1   2   2 ...   3
            //                 rgb_result  255 0   255 1   254 2 ...   3
                            // 결과가 중간값보다 작으면
                            if(intval($_SESSION['rgb_result'])<128){
                                // 최댓값에서 rgb_count를 뺀값을 결과로
                                $_SESSION['rgb_result']=255-$_SESSION['rgb_count'];
                                // rgb_count++
                                $_SESSION['rgb_count']++;
                            }
                            // 혹은 같으면
                            else if($_SESSION['rgb_result']==128){
                                // 0을 결과로
                                $_SESSION['rgb_result']=0;
                                // rgb_count는 0으로
                                $_SESSION['rgb_count']=0;
                            }
                            // 아니면 
                            else{
                                // rgb_count 를 결과로
                                $_SESSION['rgb_result']=$_SESSION['rgb_count'];
                            }

            // 0~255
            //     0, 255, ... 128->0
            //     0  255-0
            //             ...
                        
            //     0, 255, ... 266/2=128


            ?>
            rgb(<?=$_SESSION['rgb_result']?>,<?=$_SESSION['rgb_result']?>,<?=$_SESSION['rgb_result']?>)
            <?php
        }
    }
    // 쓸데없는
    if(!isset($_SESSION['hide_font_color'])){
        $_SESSION['hide_font_color']='transparent';
        $_SESSION['hide_background_color']='transparent';
    }
}
?>
<!-- 함수를 실행 시키는 폼 -->
<form action=""method='post'id='form_if'>
    <input type="hidden"id='num'name='num'>
    <input type="hidden"id='value'name='value'>
</form>
<script>// 키 반응
    function keydown(){
        t=1;
        k=event.keyCode;
        // 키 코드 값 알아내기 ----
        // alert(k);
        // --------------------------------------------------------------------------------------------
        // 세션 재시작 R 키
        if(k==82){
            num.value=t;
            form_if.submit();
        }
        t++;
        // --------------------------------------------------------------------------------------------
        // 페이지 리로드 z  q  /
        if(k==90|k==81|k==191){
            location.href="";
            // num.value=t;
            // form_if.submit();
        }
        t++;
        // --------------------------------------------------------------------------------------------
        // 정보 숨김 폰트 색 변경 F 키
        if(k==70){
            num.value=t;
            form_if.submit();
        }
        t++;
    }
</script>
<style> /* CSS */
    body{
        background:<?=rgb()?>;
        color:white;
    }
    <?php // 화면 높 넓이 ////////////////////////////
        $display_width=600; $display_height=770;///
        // ========================================
        $TTT=$display_width*0.7;$TTTT=0.9*$display_height;?>
    .display{
        width:<?=$display_width?>;
        height:<?=$display_height?>;
        /* background:<?=rgb()?>; */
        margin:0 auto;
        margin-top:10;
    }
    *{
        margin:0;
    }

    /* 쓸데없는 */
    .reload{
        color:<?=$_SESSION['hide_font_color']?>;
        background:<?=$_SESSION['hide_background_color']?>;
        position:fixed;
        left:<?=$display_width/2+400?>;
        top:<?=$display_height/2-30?>;
        width:70;height:100;
        z-index:100;
    }
    .rgb{
        color:<?=$_SESSION['hide_font_color']?>;
        background:<?=$_SESSION['hide_background_color']?>;
        position:fixed;
        left:<?=$display_width/2+400?>;
        top:<?=$display_height/2?>;
        width:0;height:0;
        z-index:100;
    }

    .top{
        /* background:<?=rgb()?>; */
        height:90%;
        display:flex;
    }
    .bottom{
        /* background:<?=rgb()?>; */
        height:6%;
    }

    .menu{
        /* background:<?=rgb()?>; */
        width:15%;
        display:flex;
        align-items:center;
    }
    .screen{
        /* background:<?=rgb()?>; */
        width:<?=$TTT?>;
        height:<?=$TTTT?>;
    }

    .button{
        background:<?=rgb()?>;
        height:50;
        margin-bottom:6;
        cursor:pointer;
        text-align:center;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .button:hover{
        opacity:50%;
    }
    .buttons{
        width:100%;
    }

    .menu-horizon{
        /* background:<?=rgb()?>; */
        height:100%;
        display:flex;
        justify-content:center;
    }
    .button-horizon{
        background:<?=rgb()?>;
        /* border:1px solid <?=rgb()?>; */
        margin:2;
        width:100;
    }

    .navi{
        /* background:<?=rgb()?>; */
        height:4%;
    }
    <?php // 사람 크기 설정 ///////
        $T=270;////////////////
        $width_man=$T;
        // =====================
        $TT=$T/2*5?>
    .man{
        /* background:<?=rgb()?>; */
        width:<?=$T?>;
        height:<?=$TT?>;
        left:<?=($TTT-$T)/2?>;
        top:<?=$TTTT-$TT?>;
        position:relative;
    }
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
    <?php $head_height_percent=13.33;// 머리 높이 퍼센트
        $head_height=$head_height_percent;?>
    .head{
        background:<?=rgb()?>;
        background:<?=rgb()?>;
        width:30%;
        height:<?=h($head_height_percent)?>%;
        margin:0 auto;
    }
    <?php $E=50;// 몸통 너비 
        $width_percent_upper_body=$E;
        $height_percent_upper_body=37;
        $upperbody_height=$height_percent_upper_body;?>
    .upper-body{
        background:<?=rgb()?>;
        /* background:red; */
        height:<?=h($height_percent_upper_body)?>%;
        width:<?=w($width_percent_upper_body-5)?>%;
    }
    .lower-body{
        /* background:<?=rgb()?>; */
        <?php $hip_width=45;$lower_body_height=43;
            $lowerbody_width=$hip_width;?>
        width:<?=$hip_width?>%;
        height:<?=h($lower_body_height)?>%;
        margin:0 auto;
    }
    <?php $neck_height_percent=10-3.33;// 머리 높이 퍼센트
        $neck_height=$neck_height_percent;?>
    
    
    
    .neck{
        background:<?=rgb()?>;
        background:<?=rgb()?>;
        background:<?=rgb()?>;
        background:<?=rgb()?>;
        background:<?=rgb()?>;
        height:<?=h($neck_height_percent)?>%;
        width:19%;
        margin:0 auto;
    }
    <?php $RR=17;// 팔 너비
        // 팔 높이
        $height_percent_arm=37;
        $width_percent_arm=$RR;
        $arm_width_percent=$width_percent_arm;
        $R=w($RR*2);
        $arm_width_percent=$RR;?>
    .arm{
        background:<?=rgb()?>;
        height:<?=$height_percent_arm?>%;
        position:absolute;
        z-index:0;
        <?php $arm_slim=8;?>
        width:<?=$RR-$arm_slim?>%;
    }
    .hand{
        background:<?=rgb()?>;
        margin:0 auto;
        position:relative;
        top:100%;
        height:20%;
        <?php $R=50;?>
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
    .display-flex{
        display:flex;
        margin:0 auto;
        justify-content:center;
    }

    .legs{<?php $legs_height=80;?>
        /* background:<?=rgb()?>; */
        height:80%;
        justify-content:space-around;
    }
    .hip{
        background:<?=rgb()?>;
        <?php $hip_height=20;?>
        height:<?=$hip_height?>%;
    }
    .leg{
        <?php $leg_width=49;$leg_slim=30;?>
        background:<?=rgb()?>;
        width:<?=$leg_width-$leg_slim?>%;
        display:flex;
        align-items:flex-end;
        justify-content:center;
    }
    .foot{
        background:<?=rgb()?>;
        background:<?=rgb()?>;
        margin:0 auto;
        <?php $foot_height=15;?>
        height:<?=$foot_height?>%;
        <?php $foot_width=100;?>
        width:<?=$foot_width?>%;
        padding:0 95% 10% 95%;
    }

    .shirts *{
        border-bottom:1px solid black;
        <?php if(!isset($_SESSION['s3'])){$_SESSION['s3']='white';}?>
        background:<?=$_SESSION['s3']?>;
        /* background:transparent; */
    }
    .shirts .body{
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
        position:absolute;
        z-index:1;
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
            // 팔너비퍼센트
            $R=$width_percent_arm;
            // 팔높이퍼센트
            $Rr=$height_percent_arm+-2?>
        width:<?=$R?>%;
        height:<?=$Rr?>%;
        position:absolute;
        z-index:1;
        <?php // 탑 레프트
            // 머리높이+목높이
            $R=$head_height_percent+$neck_height_percent;
            // 중앙-몸통너비퍼센트/2-팔너비퍼센트
            $Rr=50-$width_percent_upper_body/2-$arm_width_percent?>
        top:<?=$R?>%;
        left:<?=$Rr?>%;
    }
    .shirts .arm.right{
        <?php // 탑 레프트
            // 중앙+몸통너비퍼센트/2
            $Rr=50+$width_percent_upper_body/2?>
        left:<?=$Rr?>%;
    }

    .pants *{
        border-bottom:1px solid black;
        <?php if(!isset($_SESSION['s4']))$_SESSION['s4']='white';?>
        background:<?=$_SESSION['s4']?>;
        position:absolute;
        z-index:0;
    }
    .pants .upper{
        width:<?=$hip_width?>%;
        height:<?=$hip_height*$lower_body_height/100?>%;
        top:<?=$head_height+$neck_height+$upperbody_height?>%;
        left:<?=50-$lowerbody_width/2?>%;
    }
    .pants .leg{
        <?php $leg_short=6;?>
        width:<?=$lowerbody_width/100*$leg_width?>%;
        height:<?=$lower_body_height/100*$legs_height-$leg_short?>%;
        top:<?=$head_height+$neck_height+$upperbody_height+$hip_height*$lower_body_height/100?>%;
        left:<?=50-$lowerbody_width/2?>%;
    }
    .pants .leg.right{
        left:<?=(50+$lowerbody_width*(50-$leg_width)/100)*1.001?>%;
    }

    .shoe{
        background:<?=rgb()?>;
        background:<?=rgb()?>;
        opacity:30%;
        background:blue;
        height:100%;
    }

    .selected{
        background:red;
    }
</style>
<?php // 함수
    function f1($R,$RR,$RRR){// 색 버튼 만들기
            // red 빨강 3
            //  value   텍스트  세션넘버
        ?>
        <div class="button<?php if($_SESSION['s'.$RRR]==$R)echo(' selected');?>"
        onclick='num.value=5;value.value="<?=$R?>";form_if.submit();'><?=$RR?></div>
        <?php
    }
    if(!isset($_SESSION['s2']))$_SESSION['s2']=0;
    function f2($R,$RR,$RRR){// 옷 버튼 만들기
            // shirts 셔츠 2
            //  value   텍스트  세션넘버
        ?>
        <div class="button<?php if($_SESSION['s'.$RRR]==$R)echo(' selected');?>"
        onclick='num.value=4;value.value="<?=$R?>";form_if.submit();'><?=$RR?></div>
        <?php 
    }
?>
<body onkeydown='keydown()'>
    <script>
        alert('<?=$_SESSION['s5']?>');
    </script>
    <div><!-- 쓸데없는 -->
        <div class="reload">reload: <?=$_SESSION['page_load_count']?></div>
        <div class="rgb">rgb_count: <?=var_dump($_SESSION['rgb_count'])?>   <br>
            rgb_result: <?=var_dump($_SESSION['rgb_result'])?>   
        </div>
    </div>
    <div class="display"><!-- 눈에 보여지는 전체 화면 -->
        <div class="navi"><!-- 네비게이션메뉴 -->
            <div class="menu-horizon">
                <div class="button-horizon"></div>
                <div class="button-horizon"></div>
                <div class="button-horizon"></div>
                <div class="button-horizon"></div>
            </div>
        </div>
        <div class="top"><!-- 메뉴 사람나오는곳 메뉴 -->
            <div class="menu"><!-- 왼메뉴 -->
                <div class="buttons">
                    <?php
                        f2('shirts','셔츠',2);
                        f2('pants','바지',2);
                    ?>
                </div>
            </div>
            <div class="screen"><!-- 사람나오는 -->
                <div class="man">
                    <div><!--옷-->
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
                    </div>
                    <div><!--사람자체-->
                        <div class="head"></div>
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
                                <div class="leg">
                                    <div class="foot">
                                        <div class="shoe"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu"><!-- 오른메뉴 -->
                <div class="buttons">
                    <?php if($_SESSION['s2']=='shirts'){// 셔츠가 클릭 되면
                        f1('red','빨강',3);
                        f1('blue','파랑',3);
                    }?>
                    <?php if($_SESSION['s2']=='pants'){// 바지가 클릭 되면
                        f1('red','빨강',4);
                        f1('blue','파랑',4);
                    }?>
                </div>
            </div>
        </div>
        <div class="bottom"><!-- 옵션메뉴 -->
            <div class="menu-horizon">
                <div class="button-horizon"></div>
                <div class="button-horizon"></div>
                <div class="button-horizon"></div>
                <div class="button-horizon"></div>
            </div>
        </div>
    </div>
</body>