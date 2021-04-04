<title>-</title>
<?php
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@ php @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
if(!isset($_POST['h'])){
    ?>
    <form hidden action="." method="post">
        <input type="hidden" name="h" id="h">
        <input type="hidden" name="w" id="w">
        <input type="submit" id="submit">
    </form>
    <script>
        h.value=screen.height;
        w.value=screen.width;
        submit.click();
    </script>
    <?php
}else{
    if($_POST['h']<=$_POST['w']){
        $R=$_POST['h']*0.5;
    }else{
        $R=$_POST['w'];
    }
    $r=$R;
}
?>
<?php
function makebox($str,$foldername){
    if($str!=""){
        $id="click";
        if($foldername==""){
            $onclick="alert('곧 출시됩니다.');";
        }else{
            $onclick="location.href='$foldername'";
        }
    }else{
        $id="";
    }
    ?>
    <div class="box">
            <div class="center" id="<?=$id?>" onclick="<?=$onclick?>">
                <div class="text">
                    <?=$str?>
                </div>
            </div>
        </div>
    <?php
}
if(isset($_POST['destroy'])){
    session_start();
    session_destroy();
}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@ CSS @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
?>
<style>
*{
    margin:0;
}
body{
    background:black;
}
.air{
    /*###########################*/
    /* background:blue; */
    /*###########################*/
    height:<?=$r*0.05?>;
    width:<?=$r*2?>;
    margin:0 auto;
}
<?php $r/=0.95;?>
.row{
    /*###########################*/
    /* background:green; */
    /*###########################*/
    height:<?=$r*0.8?>;
    width:<?=$r*1.8?>;
    padding:<?=$r*0.05?>;
    display:flex;
    margin:0 auto;
}
.box{
    /*###########################*/
    /* background:blue; */
    /*###########################*/
    height:<?=$r*0.9?>;
    width:<?=$r*0.9?>;
    height:100%;
    width:50%;
    display:flex;
    align-items:center;
}
.box .center{
    /*###########################*/
    background:white;
    /*###########################*/
    height:<?=$r*0.8?>;
    width:<?=$r*0.8?>;
    margin:0 auto;
    display:flex;
    align-items:center;
    cursor:pointer;
    opacity:50%;
}
#click:hover{
    opacity:100%;
}
.center .text{
    /*###########################*/
    /* background:blue; */
    /*###########################*/
    text-align:center;
    width:100%;
    font-size:<?=$r*0.15?>;
}

.destroy{
    margin:0 auto;
    color:red;
    width:<?=$r*0.4?>;
    <?php $B=0.02;?>
    border-top:<?=$r*$B?>px solid rgb(100,0,0);
    border-bottom :<?=$r*$B?>px solid rgb(100,0,0);
    text-align:center;
    font-size:<?=$r*0.05?>;
    background:rgb(100,0,0);
    cursor:pointer;
    margin-bottom:<?=$r*0.1?>;
}
.destroy:hover{
    background:rgb(200,0,0);
    border-color:rgb(200,0,0);
    color:rgb(200,0,0);
}
</style>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@ 본문 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<p class="air"></p>
<div class="row">
    <?=makebox("CCC.v.2","CCC.v.2")?>
    <?=makebox("CCC.v.1","CCC.v.1")?>
</div>
<div class="row">
    <?=makebox("CCC.v.3","")?>
    <?=makebox("GUCCI","")?>
</div>
<div class="row">
    <?=makebox("","")?>
    <?=makebox("","")?>
</div>

    <form action="." hidden method="post">
    <input type="hidden" name="destroy" value="1">
    <input id="destroy" type="submit"></form>
<p class="air">    
<div class="destroy" onclick="alert('세션이 종료됩니다.');destroy.click();">세션 종료</div>
</p>