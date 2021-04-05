<?php
if(!isset($_SESSION['_'])){
    if(!isset($_POST['screenHeight'])){
        ?>
        <form action="." method="post">
            <input id="screenHeight" type="hidden" name="screenHeight">
            <input id="screenW" type="hidden" name="screenW">
            <input type="submit" id="screenSubmit" hidden>
        </form>
        <script>
            screenHeight.value=screen.height;
            screenW.value=screen.width;
            screenSubmit.click();
        </script>
        <?php
    }else{
        $screenHeight=$_POST['screenHeight'];
        $screenWidth=$_POST['screenW'];
        $_=$screenHeight;
        $W=$screenWidth;
        $_SESSION['screen-height']=$_;
        $_SESSION['screen-width']=$W;
        if($_<=$W){
            $_SESSION['screen-shorter']="h";
        }else{
            $_SESSION['screen-shorter']="w";
        }
        //내가 설정해 놓은 화면높이의 목록을 배열로 만들어서 그 배열 안에 없으면 오류페이지를 뜨게 하도록
        $settingList=array("900",823,1024,1080);
        if(in_array($_,$settingList)){
            // $_=intval($_);//문자열이라 적용이 안되면
            if($_==$settingList[0]){
                $_SESSION['settingid']=0;
                $_SESSION['DataBase']=0;
                $_*=1;
            }else if($_==$settingList[1]){
                $_SESSION['settingid']=1;
                $_SESSION['DataBase']=0;
                $_*=2;
            }else if($_==$settingList[2]){
                $_SESSION['settingid']=2;
                $_SESSION['DataBase']=0;
                $_*=1.2;
            }else if($_==$settingList[3]){
                $_SESSION['settingid']=3;
                $_SESSION['DataBase']=1;
                $_*=0.8;
            }
        }else{
            //확인: 화면 높이 -> 1.배열에 포함 2.비율맞추고 else if에 추가
            die("설정 필요: ".$_);
        }
        $_SESSION['_']=$_/900;
        ?>
        <script>location.href="."</script><?php
    }
    // $_=10;//!!
}else{
    $_=$_SESSION['_'];
    $S=$_SESSION['settingid'];
}
?>