<?php
$menu_name=array(
    "나가기",
    "Apps",
);

$logout_name=array(//이름+홈페이지 로그아웃이냐 아니냐
    "vscode0",
    "github1",
    "edge0",
    "google1",
    "naver1",
);
// 로그아웃 페이지 버튼이 클릭 됬을 때 클릭 된걸 저장하는 세션
    for($i=0;$i<count($logout_name);$i++){
        if(!isset($_SESSION['clicked'][$logout_name[$i]])){
            $_SESSION['clicked'][$logout_name[$i]]="";   
        }
    }
// 
// menu
    function menu($menu_name,$number){
        echo($menu_name);
        ?>
        <div class="menu"id="menu<?=$number?>"onclick="form_id.value='<?=$menu_name?>_click';form.submit();"><?=$menu_name?></div>
        <?php
    }
    // 메뉴 숫자 단축키
    $_SESSION['menu_id_click'].="";
    for($i=0;$i<count($menu_name);$i++){
        $_SESSION['menu_id_click'].="
            if(k==49+".$i."){
                menu".($i+1).".click();
            }
        ";
    }
    function menus($menu_name){
        for($i=0;$i<count($menu_name);$i++){
            menu($menu_name[$i],$i+1);
        }
    }

// apps
    function app($app_name,$number){
        ?>
        <div class="app"id="app<?=$number?>"onclick="form_id.value='<?=$app_name?>_click';form.submit();"><div class="text"><?=$app_name?></div></div>
        <?php
    }
    // 앱 숫자 단축키
    $_SESSION['app_id_click']="";
    for($i=0;$i<count($app_name);$i++){
        $_SESSION['app_id_click'].="
            if(k==49+".$i."){
                app".($i+1).".click();
            }
        ";
    }
    function apps($app_name){
        for($i=0;$i<count($app_name);$i++){
            app($app_name[$i],$i+1);
        }
    }
function window_open($name){
    $true=substr($name,-1);
    $name=substr($name,0,-1);
    $real_name=$name.$true;
    if($true==1){
        ?>
        <div class="window_open <?=$name?> <?=$_SESSION['clicked'][$real_name]?>"
        onclick="

            form_id.value='<?=$real_name?>_click';
            form.submit();

            window.open('https:\/\/<?=$name?>.com','','width:1;');

        "><?=$name?></div>
        <?php
    }else{
        ?>
        <div class="window_open <?=$name?> <?=$_SESSION['clicked'][$real_name]?>"
        onclick="

            alert('프로그램에서 로그아웃 하세요.');

            form_id.value='<?=$real_name?>_click';
            form.submit();

        "><?=$name?></div>
        <?php
    }
}
?>