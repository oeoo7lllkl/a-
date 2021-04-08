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
        if($_SESSION['screen-width']/$_SESSION['screen-height']<700/937){
            $_SESSION['screen-shorter']="w";
        }else{
            $_SESSION['screen-shorter']="h";
        }
        $settingList=array("900",823,1024,1080);//화면 높이 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        if(in_array($_,$settingList)){
            // $_=intval($_);//문자열이라 적용이 안되면
                $_SESSION['mysqli-connect-id']=0;// 맥
            if($_==$settingList[0]){// 맥
                $_SESSION['id']=0;
                $_*=1;
            }else if($_==$settingList[1]){// 폰
                $_SESSION['id']=1;
                $_*=2;
            }else if($_==$settingList[2]){// 미니
                $_SESSION['id']=2;
                $_*=1.2;
            }else if($_==$settingList[3]){// 회사윈도우
                $_SESSION['id']=3;
                $_SESSION['mysqli-connect-id']=1;// 회사윈도우
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
    $S=$_SESSION['id'];
}
?>