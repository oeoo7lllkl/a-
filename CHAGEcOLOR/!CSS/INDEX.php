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
    width:20%;     height:<?=$menuW*0.025?>%;
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
    margin-top:<?=$menuW*0.3?>%;
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
    .menu .colorCloth .label{
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
        width:<?=$menuW?>;
        margin: auto 0;
    }   
        .inputColor input{
            width:<?=$menuW?>;height:<?=$inputColorinputH?>;
            font-size:<?=$menuW*0.17?>;
        }
    .colorCloth{
        height:<?=$columnsH-$inputColorinputH*$inputColorinputCount*2?>;
        height:0%;
        background:red;
        margin-top:<?=$menuW*0.78?>%;
        <?php 
        if($_SESSION['cloth']=="option"){?>
            margin-top:<?=$menuW*1.51?>%;
            <?php
        }?>
    }
</style>