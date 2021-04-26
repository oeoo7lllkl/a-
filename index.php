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
            padding:0;
        }
        body{
            margin:0 auto;
            background:black;
            /* background:blue; */
            <?php
            $r*=0.97;
            $body_width=$r*2;
            ?>
            width:<?=$body_width?>;
        }
        .air{
            /*###########################*/
            /* background:blue; */
            /* height:10; */
            /*###########################*/
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

        .center.click.opa2.destroy{
            background:red;
        }
        .destroy:hover{
            
        }
    </style>

<!-- @@@@@@@@@@@@@@@@@@@@@@ 본문 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<head><title>pages</title></head>
<script>
    function keydown(){
        k=event.keyCode;
        // alert(k);
        if(k==81|k== 221|k== 191|k== 90){
            location.reload();
        }
        if(k==13){
            focus.click();
        }
        <?php
        // ################################################################################
        // ################################################################################
            $showing_name=array("game", "MyPage",   "Example",  "CCC_v3",   "CCC_v2", "CCC_v1",   "GUCCI",    "Milet", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "" );  
            $folder_name=array( "game", "MP",   "example",  "CCC_v3",   "CCC_v2", "CCC_v1",   "",         ""     , "", "", "", "", "", "", "", "", "", "", "", "", "", "", "" );
        // ################################################################################
        // ################################################################################
        for($i=0;$i< count($folder_name);$i++){
            if($i>7){
                ?>
                
                <?php
            }else{
                ?>
                if(k==49+<?=$i?>){
                    box<?=$i?>.click();
                }
                <?php
            }
        }
        ?>
    }
</script>
    <?php

    if(!($id==0|$id==3)){
        $body_width*=0.54;
    }else{
        $body_width*=1;
    }
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
            <div id="box<?=$_SESSION['tabindex']?>" tabindex = "<?=$_SESSION['tabindex']++?>" class="Box2 <?=$opacity?>"onclick="<?=$onclick?>">
                <div class="text">
                    <?=$sn?>
                </div>
            </div>
                <?php
        }
    ?>
<style>
    body{
        <?php $body_color="black";?>
        background:<?=$body_color?>;
        width:0;
    }
    .Box2{
        background:white;
        width:<?=$body_width/5*0.98?>;
        height:<?=$body_width/5*0.98?>;
        margin:<?=$body_width/5*0.01?>;
        /* margin:<?=$body_width/5*0.1?>; */
        display:flex;
        align-items:center;
        float:left;
    }
    .boxes{
        /* background:green; */
            <?php
            $body_width*=1.2;
            ?>
        left:<?=-$body_width/2?>;;
        padding-left:50%;
        width:<?=$body_width?>;
        position:absolute;
        padding-top:28.5%;
        padding-top:0%;
    }
    .box2:hover{
        opacity:100%;
    }
    .text{
        width:100%;
        font-size:30;
        text-align:center;
        color:<?=$body_color?>;
    }
    .opacity50{
        opacity:30%;
    }
    .opacity75{
        cursor:hand;
        opacity:50%;
    }
    .opacity100{
        cursor:hand;
        opacity:70%;
    }
    .destroy2{
        background:red;
        opacity:30%;
        cursor:hand;
    }
    .destroy2:hover{
        opacity:90%;
    }
</style>
<body onkeydown="keydown();">
    <div class="boxes">
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
        }
        ?>
        <div class="box2 destroy2"onclick="destroy.click();">
            <div class="text">
                세션 종료
            </div>
        </div>
    </div>

        <form action="." hidden method="post">
            <input type="hidden" name="destroy" value="1">
            <input id="destroy" type="submit">
        </form>  
</body>