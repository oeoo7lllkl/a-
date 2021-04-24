<script>
    function keyPress(){
        k=event.keyCode;
        
        // alert(k);

        // 페이지리로드 q,],z,/
        if(k==113|k==93|k==122|k==47){location.reload();}
        // 뒤로가기 .
        if(k==46){
            <?php
            // 앱에 들어가 있다면 apps 로 뒤로가기
            //     $app_name
            // );
                die("</script>".
                $app_name
                );
            if(in_array($_SESSION['article'],$app_name)){
                $_SESSION['article']="apps";
                ?>
                location.reload();
                <?php
            }else
            // apps에 있다면 메뉴로 뒤로가기
            if($_SESSION['article']=="Apps"){
                $_SESSION['article']="main";
                ?>
                alert();
                location.reload();
                <?php
            }
            // 메뉴에 있다면 나가기
            else{
                ?>
                location.href="..";
                <?php
            }
            ?>
        }

        <?php 
        include "PHPinSCRIPT.php";
        ?>

        // 숫자 단축키
        <?php
        if($_SESSION['article']=="main"){
            ?>
            <?=$_SESSION['menu_id_click'];?>
            <?php
        }else{
            ?>
            <?=$_SESSION['app_id_click'];?>
            <?php
        }
        ?>

        // 메인페이지 m
        if(k==109){
            header.click();
        }
    }
</script>