<?php
if(!isset($_SESSION['_'])){
    if(!isset($_POST['screenHeight'])){
        ?>
        <form action="." method="post">
            <input id="screenHeight" type="hidden" name="screenHeight">
            <input type="submit" id="screenHeightSubmit" hidden>
        </form>
        <script>
            screenHeight.value=screen.height;
            screenHeightSubmit.click();
        </script>
        <?php
    }else{
        $screenHeight=$_POST['screenHeight'];
        $_=$screenHeight;
        //내가 설정해 놓은 화면높이의 목록을 배열로 만들어서 그 배열 안에 없으면 오류페이지를 뜨게 하도록
        $settingList=array("900",823,1024);
        if(in_array($_,$settingList)){
            // $_=intval($_);//문자열이라 적용이 안되면
            if($_==900){//맥북에어
                $_*=1;
            }else if($_==823){//내폰
                $_*=2;
            }else if($_==1024){//아이패드미니5
                $_*=1.2;
            } 
        }else{
            //확인: 화면 높이 -> 1.배열에 포함 2.비율맞추고 else if에 추가
            die("설정 필요: ".$_);
        }
        $_SESSION['_']=$_/900;
        ?>
        <script>location.href="."</script><?php
    }
    $_=10000;
}else{
    $_=$_SESSION['_'];//!
}
?>