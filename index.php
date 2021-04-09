<title>pages</title>
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
    $settingheight=array(
        900,
        1024,
        823,
        1080
    );
    $settingwidth=array(
        1440,
        768,
        412,
        1920
    );
    /*id
    0   맥북
    1   패드
    2   폰
    3   회사윈도우
    */
    //제일 안쪽의 (1)(2)만 하시오.
    $index=0;//←여기서(1)
    if($_POST['h']==$settingheight[$index] & $_POST['w']==$settingwidth[$index]){
        $id=$index;
    }else{
        $index++;//←여기서(1)
        if($_POST['h']==$settingheight[$index] & $_POST['w']==$settingwidth[$index]){
            $id=$index;
        }else{
            $index++;//←여기서(1)
            if($_POST['h']==$settingheight[$index] & $_POST['w']==$settingwidth[$index]){
                $id=$index;
            }else{
                $index++;//←여기서(1)
                if($_POST['h']==$settingheight[$index] & $_POST['w']==$settingwidth[$index]){
                    $id=$index;
                }else{
                    $index++;//←여기서(2)
                    die("
                    <h1>h={$_POST['h']} & w={$_POST['w']} & id=$index</h1>
                    ");//이까지 붙여넣기(2)➔
                }//이까지 복사(1)➔
            }//이까지 복사(1)➔
        }//이까지 복사(1)➔
    }//이까지 복사(1)➔
    if($_POST['h']<=$_POST['w']){
        $R=$_POST['h']*0.5;
    }else{
        $R=$_POST['w'];
    }
    $r=$R;
    if($_POST['h']==823& $_POST['w']==412)
    $r=$R*1.188;
}
?>
<?php
function makebox($str,$foldername){
    if($str!=""){
        if($foldername!=""){
            $onclick="onclick=\"location.href='$foldername'\"";
            $opacity="opa0";
        }else{
            $onclick="onclick=\"alert('곧 출시됩니다.');\"";
            $opacity="opa1";
        }
    }else{
        $onclick="";
        $opacity="opa2";
    }
    ?>
    <div class="box">
        <div class="center click <?=$opacity?>" <?=$onclick?>>
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
    margin:0 auto;
    background:black;
    /* background:blue; */
    width:<?=$r*2?>;
}
.air{
    /*###########################*/
    /* background:blue; */
    /*###########################*/
    height:<?=$r*0.073?>;
    width:<?=$r*2?>;
    margin:0 auto;
}
<?php $r/=0.95;?>
.row{
    /*###########################*/
    /* background:gray; */
    /*###########################*/
    height:<?=$r?>;
    width:<?=$r*1.9?>;
    padding:0;
    padding:0 0 <?=$r*0.04?> 0;
    display:flex;
    align-items:space-between;
    margin:0 auto;
}
.box{
    /*###########################*/
    /* background:blue; */
    /*###########################*/
    <?php $box_width=48;?>
    width:<?=$box_width?>%;
    height:<?=$box_width*2?>%;
    display:flex;
    align-items:center;
}
.between{
    width:<?=100-2*$box_width?>%;
}
.box .center{
    /*###########################*/
    background:white;
    /*###########################*/
    height:100%;
    width:100%;
    margin:0 auto;
    display:flex;
    align-items:center;
    cursor:pointer;
}
.click:hover{
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
.opa0{
    opacity:70%;
}
.opa1{
    opacity:50%;
}
.opa2{
    opacity:30%;
}

.destroy{
    margin:0 auto;
    color:red;
    width:<?=$r*0.4?>;
    <?php $B=0.02;?>
    border-top:<?=$r*$B?>px solid rgb(100,0,0);
    border-bottom :<?=$r*$B?>px solid rgb(100,0,0);
    text-align:center;
    <?php $F=1.1;if($id==1)$F=1.3;if($id==2)$F=1.3;?>
    font-size:<?=$r*0.05*$F?>;
    background:rgb(100,0,0);
    cursor:pointer;
    margin-bottom:<?=$r*0.1?>;
    <?php if($id==1){?>
        margin-left:<?=$r*0.753?>;
    <?php }?>
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
<p class="air">    </p>
<div class="row">
    <?=makebox("CCC_v1","CCC_v1")?>
    <div class="between"></div>
    <?=makebox("CCC_v2","CCC_v2")?>
</div>
<div class="row">
    <?=makebox("keypress","")?>
    <div class="between"></div>
    <?=makebox("GUCCI","")?>
</div>
<div class="row">
    <?=makebox("","")?>
    <div class="between"></div>
    <?=makebox("","")?>
</div>

    <form action="." hidden method="post">
    <input type="hidden" name="destroy" value="1">
    <input id="destroy" type="submit"></form>
<p class="air">    
<div class="destroy" onclick="destroy.click();">세션 종료</div>
</p>