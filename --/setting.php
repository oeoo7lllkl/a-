<?php
if(isset($_SESSION['screen-width'])){
    // 맥북에어 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    //                           \\{ 화면 넓이 }                     \\{ 화면 높이 }
    if($_SESSION['screen-width']==1440& $_SESSION['screen-height']==900){
        // { 기기명칭 }
        $device="MacbookAir";
        // { 화면 크기 비율 (퍼센트)}
        $window_size_percent=120;  //!!
        $window_size_percent=136.63;   
        // { 폰트 크기 비율 (퍼센트)}
        $font_size_percent=118;  
        // { 박스 변화 비율 (퍼센트)}
        $box_trans_percent=100;    
        // { 추가 창 높이 }
        $add_window_height=0;
        // { 창 옆에 넓이 }
        $side_window_width=($_SESSION['screen-width']-$_SESSION['window-width']*$_SESSION['window-size-percent']/100)/2;
    }else 
    // 패드미니 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    //                           \\{ 화면 넓이 }                     \\{ 화면 높이 }
    if($_SESSION['screen-width']==768& $_SESSION['screen-height']==1024){
        // { 기기명칭 }
        $device="iPadMini";
        $device="";
        // { 화면 크기 비율 (퍼센트)}
        $window_size_percent=132.44; 
        $window_size_percent=122.44; 
        // { 폰트 크기 비율 (퍼센트)}
        $font_size_percent=122.44;  
        // { 박스 변화 비율 (퍼센트)}
        $box_trans_percent=400;    
        // { 추가 창 높이 }
        $add_window_height=83;
        // { 창 옆에 넓이 }
        $side_window_width=0;
    }else 
    // LG X4 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    //                           \\{ 화면 넓이 }                     \\{ 화면 높이 }
    if($_SESSION['screen-width']==412& $_SESSION['screen-height']==823){
        // { 기기명칭 }
        $device="X4";
        // { 창 크기 비율 (퍼센트)}
        $window_size_percent=122.44; 
        // { 폰트 크기 비율 (퍼센트)}
        $font_size_percent=170;  
        // { 박스 변화 비율 (퍼센트)}
        $box_trans_percent=400;  
        // { 추가 창 높이 }
        $add_window_height=600;
        // { 창 옆에 넓이 }
        $side_window_width=($_SESSION['screen-width']-$_SESSION['window-width']*$_SESSION['window-size-percent']/100)/2;
    }else{
        
        die("screen <br>
        - width : {$_SESSION['screen-width']}<br>
        - height : {$_SESSION['screen-height']}");
    
    }

    if(!isset($_SESSION['window-width'])& isset($add_window_height)){
        // 화면 크기
        $_SESSION['window-width']=800;
        $_SESSION['window-height']=600+$add_window_height;
        
        // 박스 초기 크기
            $t=0.5;
        $_SESSION['box-width-origin']=$t*200;
        $_SESSION['box-height-origin']=$t*700;
        // 박스 위치
        $_SESSION['box-top']=$_SESSION['window-height']/2-$_SESSION['box-height-origin']/2+$add_window_height/2;
        $_SESSION['box-left']=$_SESSION['window-width']/2-$_SESSION['box-width-origin']/2;
    
    
        $_SESSION['box-width']=$_SESSION['box-width-origin'];
        $_SESSION['box-height']=$_SESSION['box-height-origin'];
        $_SESSION['box-width-real']=$_SESSION['box-width-origin'];
        $_SESSION['box-height-real']=$_SESSION['box-height-origin'];
    }
}

?>
<script>
// alert();
</script>