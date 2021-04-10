<?php
session_start();
if(!isset($_SESSION['page_load_count'])){
    $_SESSION['page_load_count']=1;
}else{
    $_SESSION['page_load_count']++;
}
if(isset($_POST['form_name'])){
    // 세션 재시작
    if($_POST['form_name']==1){
        session_destroy();
        session_start();
    }
    // 페이지 리로드 카운트
    if($_POST['form_name']==2){
        ?>
        <?=$_SESSION['page_load_count']?>
        <?php
    }
    // 바디 폰트 색 변경
    if($_POST['form_name']==3){
        if($_SESSION['body_font_color']=='transparent'){
            $_SESSION['body_font_color']='gray';
        }else{
            $_SESSION['body_font_color']='transparent';
        }
    }
}
if(!isset($_SESSION['rgb_count'])){
// if(1){
    $_SESSION['rgb_count']=0;
    $_SESSION['rgb_result']=255;
}
function rgb(){
    
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
                    if($_SESSION['rgb_result']<133){
                        // 최댓값에서 rgb_count를 뺀값을 결과로
                        $_SESSION['rgb_result']=255-$_SESSION['rgb_count'];
                        // rgb_count++
                        $_SESSION['rgb_count']++;
                    }
                    // 혹은 같으면
                    else if($_SESSION['rgb_result']==133){
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
    //     0, 255, ... 133->0
    //     0  255-0
    //             ...
                
    //     0, 255, ... 266/2=133


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
                    if($_SESSION['rgb_result']<133){
                        // 최댓값에서 rgb_count를 뺀값을 결과로
                        $_SESSION['rgb_result']=255-$_SESSION['rgb_count'];
                        // rgb_count++
                        $_SESSION['rgb_count']++;
                    }
                    // 혹은 같으면
                    else if($_SESSION['rgb_result']==133){
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
    //     0, 255, ... 133->0
    //     0  255-0
    //             ...
                
    //     0, 255, ... 266/2=133


    ?>
    rgb(<?=$_SESSION['rgb_result']?>,<?=$_SESSION['rgb_result']?>,<?=$_SESSION['rgb_result']?>)
    <?php
}
?>
<form action=""method='post'id='form_if'>
    <input type="hidden"id='form_id'name='form_name'>
</form>
<script>
function keydown(){
    k=event.keyCode;
    // alert(k);
    // 세션 재시작 R 키
    if(k==82){
        form_id.value=1;
        form_if.submit();
    }
    // 페이지 리로드 카운트 C 키
    if(k==67){
        form_id.value=2;
        form_if.submit();
    }
    // 바디 폰트 색 변경 F 키
    if(k==70){
        form_id.value=3;
        form_if.submit();
    }
}
</script>
<style>
body{
    background:<?=rgb()?>;
    <?php if(!isset($_SESSION['body_font_color'])){
        $_SESSION['body_font_color']='transparent';
    }?>
    color:<?=$_SESSION['body_font_color']?>;
}
.display{
    width:600;
    height:800;
    background:<?=rgb()?>;
    margin:0 auto;
}
*{
    margin:0;
}
</style>
<body onkeydown='keydown()'>
    <div class="reload"><?=$_SESSION['page_load_count']?></div>
    <div class="display">
        <div class="top"></div>
        <div class="bottom"></div>
    </div>
</body>