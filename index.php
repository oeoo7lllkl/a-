<!-- //@@@@@@@@@@@@@@@@@@@@@@ php @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
    <?php
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
                1080,
                873
            );
            $settingwidth=array(
                1440,
                768,
                412,
                1920,
                393
            );
            /*id
            0   맥북
            1   패드
            2   폰
            3   회사윈도우
            4   레드미10
            */
            $id=array_search($_POST['h'],$settingheight);
            
            if($_POST['h']<=$_POST['w']){
                $R=$_POST['h']*0.5;
            }else{
                $R=$_POST['w'];
            }
            $r=$R;
            if($_POST['h']==823& $_POST['w']==412)
            $r=$R*1.188;
            if($id==4){
                $r=$R*1.245;
            }
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
    ?>

<!-- //@@@@@@@@@@@@@@@@@@@@@@ CSS @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
    <style>
        *{
            margin:0;
        }
        body{
            margin:0 auto;
            background:black;
            /* background:blue; */
            <?php
            $r*=0.97;
            ?>
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
            width:<?=$r*0.4/100*7?>%;
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
            position:absolute;
            left:<?=50-$r*0.4/100*7/2?>%;
            bottom:10;
        }
        .destroy:hover{
            background:rgb(200,0,0);
            border-color:rgb(200,0,0);
            color:rgb(200,0,0);
        }
    </style>

<!-- @@@@@@@@@@@@@@@@@@@@@@ 본문 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<head><title>pages</title></head>
<script>
    function keydown(){
        k=event.keyCode;
        // alert(k);
        if(k==81|k== 221){
            location.reload();
        }
        if(k==13){
            focus.click();
        }
    }
</script>
<body onkeydown="keydown();">
    <p class="air"></p>

<?php
if(!($id==0|$id==3)){
    $showing_name=array("MyPage",   "Example",  "CCC_v3",   "",   "CCC_v2", "CCC_v1",   "GUCCI",    "Milet" );  
    $folder_name=array( "myPage",   "example",  "CCC_v3",   "",   "CCC_v2", "CCC_v1",   "",         ""      );
        ?>
    <rows>
            <?php
                for($i=0;$i<2*floor(count($showing_name)/2+1);$i++){
                    if($i/2-floor($i/2)==0){

                        if($i>=count($showing_name)){
                            ?>
        <div class="row">
            <?=makebox("","")?>
            <div class="between"></div>
                            <?php
                        }else{
                            ?>
        <div class="row">
            <?=makebox("$showing_name[$i]","$folder_name[$i]")?>
            <div class="between"></div>
                            <?php
                        }

                    }else{
                        
                        if($i>=count($showing_name)){
                            ?>
            <?=makebox("","")?>
        </div>
                            <?php
                        }else{
                            ?>
            <?=makebox("$showing_name[$i]","$folder_name[$i]")?>
        </div>
                            <?php
                        }

                    }
                }
            ?>
    </rows>
        <?php
}else{
    $showing_name=array("game", "MyPage",   "Example",  "CCC_v3",   "CCC_v2", "CCC_v1",   "GUCCI",    "Milet", "", "", "", "", "", "", "", "" );  
    $folder_name=array( "game", "myPage",   "example",  "CCC_v3",   "CCC_v2", "CCC_v1",   "",         ""     , "", "", "", "", "", "", "", "" );

    $_SESSION['tabindex'] = 0;
    function makebox2($sn,$fn,$opacity){
        if($opacity=="opacity75"){
            $onclick="alert('연구중입니다!');";
        }else if($opacity=="opacity100"){
            $onclick="location.href='$fn';";
        }else{
            $onclick="";
        }
            ?>
        <div tabindex = "<?=$_SESSION['tabindex']++?>" class="Box2 <?=$opacity?>"onclick="<?=$onclick?>">
            <div class="text">
                <?=$sn?>
            </div>
        </div>
            <?php
    }
    ?>
    <style>
        .Box2{
            background:white;
            width:199;
            height:199;
            margin:5;
            display:flex;
            align-items:center;
            float:left;
            cursor:hand;
        }
        .box2:hover{
            opacity:50%;
        }
        .text{
            width:100%;
            font-size:30;
            text-align:center;
        }
        .opacity50{
            opacity:50%;
        }
        .opacity75{
            opacity:75%;
        }
        .opacity100{
            opacity:100%;
        }
    </style>
    <?php
    for($i=0;$i<count($showing_name);$i++){
        if($showing_name[$i]==""&$folder_name[$i]==""){
            $opacity="opacity50";
        }else if($folder_name[$i]==""){
            $opacity="opacity75";
        }else{
            $opacity="opacity100";
        } 
            ?>
    <?=makebox2("$showing_name[$i]","$folder_name[$i]",$opacity)?>
            <?php
    }?>
    <?php
    
}
?>

    <p class="air">  
        <form action="." hidden method="post">
            <input type="hidden" name="destroy" value="1">
            <input id="destroy" type="submit">
        </form>  
        <div class="destroy" onclick="destroy.click();">세션 종료</div>
    </p>
</body>