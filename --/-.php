<!-- 세션 시작시 화면 넓이, 높이 구하기 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<form action=""method='post'id='form_screen'>
    <input type="hidden"id='screen_width'name='screen-width'>
    <input type="hidden"id='screen_height'name='screen-height'>
</form>
<?php
if(!isset($_SESSION['screen-width'])){
    if(!isset($_POST['screen-width'])){ 
        ?>
        <script>
            screen_width.value=screen.width;
            screen_height.value=screen.height;
            form_screen.submit();
        </script>
        <?php 
    }else{
        $_SESSION['screen-width']=$_POST['screen-width'];
        $_SESSION['screen-height']=$_POST['screen-height'];

        include "setting.php";

        ?><script>
        if('<?=$device?>'!="")
            alert("welcome <?=$device?>!");
        </script><?php
        $_SESSION['window-size-percent']=$window_size_percent;
        $_SESSION['font-size-percent']=$font_size_percent;
    }
        die("<script>location.href='.';</script>");
}
?>
<?php
//키보드 클릭시 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
if(isset($_POST['keycode'])){
    //입력받은 키코드값을 나타낼 것임.
    $k=p('keycode');

    // keycode 값 확인
    // die($k);
    
    $b=$box_trans_percent/100;
    // 상
    if($k==38){
        $_SESSION['box-top']-=20*$b;

        // 위로 들어갈때
        if($_SESSION['box-top']<-$_SESSION['box-height']){
            // 위로 다 들어가면
            $_SESSION['box-top']=$_SESSION['window-height'];
        }
    }else 
    // 하
    if($k==40){
        $_SESSION['box-top']+=20*$b;

        // 아래측에 들어갈때
        if($_SESSION['box-top']>$_SESSION['window-height']){
            $_SESSION['box-top']=-$_SESSION['box-height'];
        }
    }else 
    // 좌
    if($k==37){
        $_SESSION['box-left']-=20*$b;

        // 좌로 들어갈때
        if($_SESSION['box-left']<-$_SESSION['box-width']){
            $_SESSION['box-left']=$_SESSION['window-width'];
        }
    }else 
    // 우
    if($k==39){
        $_SESSION['box-left']+=20*$b;
        // 우측에 들어갈때
        if($_SESSION['box-left']>$_SESSION['window-width']){
                $_SESSION['box-left']=-$_SESSION['box-width'];
        }
    }else 
    // R : 세션초기화
    if($k==82){
        session_destroy();
        ?><script>
            location.href=".";
        </script><?php
    }else 
    $T=10;
    // . : 작아짐
    if($k==190){
        // 박스 크기가 0이 아닐때만
        if($_SESSION['box-width']!=0& $_SESSION['box-height']!=0){
            // 박스가 왼벽에 들어가 있을때
            if($_SESSION['box-left']==0& $_SESSION['box-width']<$_SESSION['box-width-real']){
                $_SESSION['box-left']-=$T/2*$b;
            }
            // 박스가 오른벽에 들어가 있을때
            if($_SESSION['box-width']<$_SESSION['box-width-real'])
            $_SESSION['box-width']+=$T/2*$b;

            // 박스가 위벽에 들어가 있을때
            if($_SESSION['box-top']==0& $_SESSION['box-height']<$_SESSION['box-height-real']){
                $_SESSION['box-height']+=$T/2*$b;
                $_SESSION['box-top']-=$T/2*$b;
            }else
            // 박스가 아래벽에 들어가 있을때
            if($_SESSION['box-height']<$_SESSION['box-height-real'])
            $_SESSION['box-height']+=$T/2*$b;
    
            $_SESSION['box-width']-=$T*$b;
            $_SESSION['box-height']-=$T*3.5*$b;
            $_SESSION['box-left']+=$T/2*$b;
            $_SESSION['box-top']+=$T*3.5/2*$b;
    
            $_SESSION['box-width-real']-=$T*$b;
            $_SESSION['box-height-real']-=$T*3.5*$b;
        }
    }else 
    // / : 커짐
    if($k==191
    & $_SESSION['box-left']>0& $_SESSION['box-top']>0
    & $_SESSION['box-top']+$_SESSION['box-height']<$_SESSION['window-height'] 
    & $_SESSION['box-left']+$_SESSION['box-width']<$_SESSION['window-width']){
        // 초기 박스 크기의 2배보다 작을때만
        if($_SESSION['box-width-real']<$_SESSION['box-width-origin']*2){
            $_SESSION['box-width']+=$T*$b;
            $_SESSION['box-height']+=$T*3.5*$b;
            $_SESSION['box-left']-=$T/2*$b;
            $_SESSION['box-top']-=$T*3.5/2*$b;
            
            $_SESSION['box-width-real']+=$T*$b;
            $_SESSION['box-height-real']+=$T*3.5*$b;
    
            // 아래측에 들어갈때
            if($_SESSION['box-top']+$_SESSION['box-height']>$_SESSION['window-height']){
                $_SESSION['box-height']-=$T/2*$b;
            }else 
            // 위벽에 들어갈때
            if($_SESSION['box-top']<0){
                $_SESSION['box-height']-=$T/2*$b;
                $_SESSION['box-top']=0;
            } 
            // 왼벽에 들어갈때
            if($_SESSION['box-left']<0){
                $_SESSION['box-width']-=$T/2*$b;
                $_SESSION['box-left']=0;
            }else
            // 오른벽에 들어갈때
            if($_SESSION['box-left']+$_SESSION['box-width']>$_SESSION['window-width']){
                $_SESSION['box-width']-=$T/2*$b;
            }
        }
    }
}else{
    // 입력받지 않으면 나타낼게 없음.
    $k="";
}
?>
<form action="" method="post" id="form_keycode">
    <input type="hidden" id="keycode" name="keycode">
</form>
<?php
//하단 버튼 클릭시 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
if(isset($_POST['form_table_value'])){
    $T=p('form_table_value');
    //세션 초기화
    if($T=="session"){
        session_destroy();
        ?><script>
            location.href=".";
        </script><?php
    }else{
      
    }
}
?>
<form action=""method="post"id="form_table">
    <input type="hidden"id="form_table_id"name="form_table_value">
</form>