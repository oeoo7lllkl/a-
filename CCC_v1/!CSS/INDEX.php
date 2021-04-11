<style>
*{
    margin: 0;padding: 0%;border: 0ch;
}
<?php 
$columnsH=$myBodyH*0.98;
$columnsW=$columnsH/765*500;
$menuW=$columnsW/5;
$inputColorinputH=0.3*$menuW;
$inputColorinputCount=3;
?>
body{

}
    .myBody{
        height:<?=$myBodyH?>;
        width:<?=$myBodyH*0.64102?>;
        margin:auto;
        margin-top:<?=$topB?>;
    }
/* ------------- RefreshPage ------------- */
.RefreshPage{
    background: white;
    color: black;
    margin: 0 auto;
    <?php
    //:높이;
    if($_SESSION['screenH']==900){//맥북에어
        $refreshPH=0.025;
    }else if($_SESSION['screenH']==1024){//아이패드미니5
        $refreshPH=0.025;
        echo "font-size:30;";
    }else if($_SESSION['screenH']==1080){//윈도우
        $refreshPH=0.025;
    }else if($_SESSION['screenH']==823){//내폰
        $refreshPH=0.01;
        echo "font-size:70;";
    }?>
    width:20%;     height:<?=$menuW*$refreshPH?>%;
    text-align: center;
}   
    .RefreshPage:hover{
        cursor: pointer;
        opacity: 50%;
    }

/* ------------- 메뉴 사람 메뉴 ------------- */
.columns{
    display: flex;
    height:<?=$columnsH?>;width:<?=$columnsW?>;
    margin: 0 auto;
    <?php $numberColumns=50?>
    background: rgb(<?=$numberColumns?>, <?=$numberColumns?>, <?=$numberColumns?>);
}

/* ------------- 메뉴 ------------- */
.menu{
    width: <?=$menuW?>;
    <?php
    //:마진 탑;
    if($_SESSION['screenH']==900){//맥북에어
        ?>margin-top:<?=$menuW*0.45?>%;<?php
    }else if($_SESSION['screenH']==1024){//아이패드미니5
        ?>margin-top:<?=$menuW*0.3?>%;<?php
    }else if($_SESSION['screenH']==1080){//윈도우
        ?>margin-top:<?=$menuW*0.3?>%;<?php
    }else if($_SESSION['screenH']==823){//내폰
        ?>margin-top:<?=$menuW*0.15?>%;<?php
    }?>
}
    .menu .label{
        text-align: center;
        color: white;
        margin: <?=$menuW*0.01?> 0;
        height: <?=$menuW*0.3?>;
        font-size: <?=$menuW*0.18?>;
        background: rgb(100, 100, 100);
        border-top:<?=$menuW*0.1?>px solid rgb(100, 100, 100);
        border-bottom:<?=$menuW*0.05?>px solid rgb(100, 100, 100);
    }
    .menu .colorCloth{
        margin-top:<?=$menuW*0?>%;
    }
        .menu .label:hover{
            cursor:pointer;
            opacity: 50%;
        }
            .menu .label .text{
            }
/* ------------- 입력색 ------------- */  
.colorMenu{
    width:<?=$menuW?>;height:100%;
}
    .inputColor{
        width:100%;
    }   
        .inputColor input{
            width:100%;height:<?=$inputColorinputH?>;
            font-size:<?=$menuW*0.17?>;
        }
    .colorCloth{
        height:<?=$columnsH-$inputColorinputH*$inputColorinputCount*2?>;
        height:0%;
        background:red;
        <?php
        //:마진 탑;
        if($_SESSION['screenH']==900){//맥북에어
            ?>margin-top:<?=$menuW*1.37?>%;<?php
        }else if($_SESSION['screenH']==1024){//아이패드미니5
            ?>margin-top:<?=$menuW*0.78?>%;<?php
        }else if($_SESSION['screenH']==1080){//윈도우
            ?>margin-top:<?=$menuW*0.78?>%;<?php
        }else if($_SESSION['screenH']==823){//내폰
            ?>margin-top:<?=$menuW*0.4?>%;<?php
        }?>
        <?php 
        if($_SESSION['cloth']=="option"){
            //:마진 탑.옵션메뉴일 때;
            if($_SESSION['screenH']==900){//맥북에어
                ?>margin-top:<?=$menuW*2.3?>%;<?php
            }else if($_SESSION['screenH']==1024){//아이패드미니5
                ?>margin-top:<?=$menuW*1.51?>%;<?php
            }else if($_SESSION['screenH']==1080){//윈도우
                ?>margin-top:<?=$menuW*1.51?>%;<?php
            }else if($_SESSION['screenH']==823){//내폰
                ?>margin-top:<?=$menuW*0.7?>%;<?php
            }
            ?>
            
            <?php
        }?>
    }

    .for-phone{

        <?php 
            if($_SESSION['screenH']==900){//맥북에어
                $height_for_phone=0;
            }else if($_SESSION['screenH']==1024){//아이패드미니5
                $height_for_phone=20;
            }else if($_SESSION['screenH']==1080){//윈도우
                $height_for_phone=30;
            }else if($_SESSION['screenH']==823){//내폰
                $height_for_phone=200;
            }
            ?>
        height:<?=$height_for_phone?>;
    }
</style>