<style>
.topNavi{
    width:100%;
    height:<?=$_*40?>;
    display:flex;
    justify-content:center;
    justify-content:space-between;
    align-items:center;
    background:rgb(85,170,255);/*파*/ 
}

.button{
    width:<?=$_*90?>;
    height:<?=$_*20?>;
    border-top:<?=$_*5?>px solid rgb(255,170,85);/*주*/
    border-bottom:<?=$_*5?>px solid rgb(255,170,85);/*주*/
    background:rgb(255,170,85);/*주*/
    cursor:pointer;
    text-align:center;

    align-items:center;
    margin:<?=$_*4?>;
}
.button:hover{
    opacity:60%;
}
.button.reset{<?php $q=75;?>
    border-top:<?=$_*5?>px solid rgb(<?=$q*3?>,<?=$q*1?>,<?=$q*2?>);/**/
    border-bottom:<?=$_*5?>px solid rgb(<?=$q*3?>,<?=$q*1?>,<?=$q*2?>);/**/
    background:rgb(<?=$q*3?>,<?=$q*1?>,<?=$q*2?>);/**/
}

.side{
    /* background:red; */
    display:flex;
}
    .side.left{
        justify-content:flex-start;
    }
    .side.right{
        justify-content:flex-end;
    }
.memo{
    color:red;
    font-weight:bold;
    font-size:<?=$_*30?>px;
    background:rgb(100,0,0);
    <?php
    if($S==0){
        ?>
        width:<?=$_*50?>%;
        <?php 
    }else{
        ?>
        width:<?=$_*50?>%;
        <?php 
    }
    ?>
    margin:<?=$_*4?>;
}
</style>