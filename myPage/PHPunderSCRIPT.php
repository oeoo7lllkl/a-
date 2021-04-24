<?php
// 포스트 제출
    if(isset($_POST['form_name'])){
    // 헤더 클릭시
        if($_POST['form_name']=="header_click"){
            $_SESSION['article']="main";
        }
    // 메뉴 클릭시
        if(in_array(substr($_POST['form_name'],0,-6),$menu_name)){
            if($_POST['form_name']=="나가기_click"){
                ?>
                <script>location.href="..";</script>
                <?php
            }else{
                $_SESSION['article']=substr($_POST['form_name'],0,-6);
            }
        }
    // 앱 클릭시
        for($i=0;$i<count($app_name);$i++){
            if($_POST['form_name']==$app_name[$i]."_click"){
                $_SESSION['article']=$app_name[$i];
            }
        }
    // 로그아웃 페이지에서 페이지 클릭시
        for($i=0;$i<count($logout_name);$i++){
            if($_POST['form_name']==$logout_name[$i]."_click"){
                if($_SESSION['clicked'][$logout_name[$i]]==""){
                    $_SESSION['clicked'][$logout_name[$i]]="clicked";
                }else{
                    $_SESSION['clicked'][$logout_name[$i]]="";
                }
            }
        }
    }

?>