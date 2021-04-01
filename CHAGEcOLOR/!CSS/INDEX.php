<style>
body{
    background-color: black;
    color:white;
}
</style>
<?php
session_start();

if(!isset($_SESSION['start'])){
    $_SESSION['start']=1;
    ?>
    <form method="post" action="." onsubmit="H.value=screen.height;">
        <input type="hidden" name="H">
        <input type="submit" id="HS" hidden>
    </form>
    <script>
    HS.click();
    </script><?php 
}else if($_SESSION['start']==1){
    $screenH=$_POST['H'];
    if($screenH>900){
        $myBodyH=intval($screenH)*1.1;
        $topB=$myBodyH/1.1*0.04/2;
    }else{
        $myBodyH=intval($screenH)*0.85;
        $topB=$myBodyH/0.85*0.04/2;
    }
    $_SESSION['myBodyH']=$myBodyH;
    $_SESSION['topB']=$topB;
    $_SESSION['start']=2;
    ?><script>alert("WELCOME");
    location.href=".";
    </script><?php
}
$myBodyH=$_SESSION['myBodyH'];
$topB=$_SESSION['topB'];

$columnsH=$myBodyH*0.98;
$columnsW=$columnsH/765*500;
$menuW=$columnsW/5;
$inputColorinputH=30;
$inputColorinputCount=3;
?>
<style>
*{
    margin: 0;padding: 0%;border: 0ch;
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
    width: 100;height:15;
    height:2%;width:13.333%;
    border-width: 0 1 10 1;
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
        font-size: <?=$menuW*0.21?>;
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
            font-size:<?=$menuW*0.2?>;
        }
    .colorCloth{
        height:<?=$columnsH-$inputColorinputH*$inputColorinputCount*2?>;
        display:flex;
        align-items:center;
        background:red;
    }

.box{
    /* width:300;height:300; */
    background:pink;
    
    ._1{
        background:green;
        width:50%;height:50%;
    }
}
</style>