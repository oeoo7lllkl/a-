<html>
<head>
    <meta charset="UTF-8">
    <title>MY PAGE</title>
</head>
<?php
session_start();
if(!isset($_SESSION['article'])){
    $_SESSION['article']='menu';
}
if(isset($_POST['form_name'])){
// 홈버튼을 누르면
    if($_POST['form_name']=="home"){
        if($_SESSION['article']=="menu"){
            ?><script>location.href="..";</script><?php
        }else{
            $_SESSION['article']="menu";
        }
    }
// Apps을 누르면
    if($_POST['form_name']=="Apps"){
        $_SESSION['article']="menu/apps";
    }
}
?>
<script>
function keypress(){
    k=event.keyCode;
    // alert(k);

// 페이지 리로드
    // Q ] / Z
    if(k==113|k==93|k==47|k==122|
    // 맥북용 Q Z
    k==12610|k==12619
    ){
        location.reload();
    }
// 헤더 클릭 
    // 0
    if(k==48){
        id_header.click();
    }
// 홈 버튼 
    // H
    if(k==104|k==12631){
        home.click();
    }
// 뒤로 
    // 백스페이스
    if(k==8){
        location.href="..";
    }
// 숫자키
    <?php
    //####################################
    $menu_name=array(
        "Apps",
    );
    //####################################
    $menu_count=count($menu_name);
    //####################################
    $app_name=array(
        "앱1",
        "앱2",
        "앱3",
        "앱4",
        "앱5",
        "앱6",
    );
    //####################################
    $app_count=count($app_name);

    if($_SESSION['article']=="menu"){
        $count=$menu_count;
    }else if($_SESSION['article']=="menu/apps"){
        $count=$app_count;
    }
    for($i=0;$i<$count;$i++){
        ?>
        if(k==49+<?=$i?>){
            <?php
            if($_SESSION['article']=="menu"){
                ?>
                menu<?=$i+1?>.click();
                <?php 
            }else if($_SESSION['article']=="menu/apps"){
                ?>
                app<?=$i+1?>.click();
                <?php 
            }
            ?>
        }
        <?php
    }
    ?>

}
</script>
<style>
*{margin:0;}
body{
    background:black;
    color:white;
    display:flex;align-items:center;
}
header{
    position:absolute;
    top:0;left:-100;
    text-align:center;
    width:200;
    margin-left:50%;
        <?php
        $font_size=20;
        $padding=10;
        // $padding_top=$padding+$font_size/2;
        ?>
    font-size:<?=$font_size?>;
    padding:<?=$padding?>;
    opacity:50%;cursor:hand;
}header:hover{
    opacity:100%;
}
article{
    width:100%;
}
.home{
    position:fixed;
    background:gray;
    width:50;
    height:50;
    left:-29;
    margin-left:50%;
    bottom:10;
    opacity:30%;
    cursor:hand;
    display:flex;align-items:center;
}
.home:hover{
    opacity:100%;
}
.text{
    text-align:center;width:100%;
}
</style>
<body onkeypress="keypress();">
    <header id="id_header" onclick="alert('시작페이지로');">
        MyPage
    </header>
    <article>
        <?php
        include "article/{$_SESSION['article']}.php";
        ?>
    </article>
    <form action=""method="post"id="form">
        <input type="hidden"id="form_id"name="form_name">
    </form>
    <div id="home"class="home"onclick="form_id.value='home';form.submit();">
        <div class="text">
            홈
        </div>
    </div>
</body>
</html>