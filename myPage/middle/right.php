<html>
    <head>
            <?php
                include "../base.php";

                if(isset($_POST['name'])){
                    if($_POST['name']=="k==82"){
                        session_destroy();
                        ?>
                        <script>parent.location.reload();</script>
                        <?php
                    }
                }
            ?>
        <style>
            body{
                color:white;
            }
        </style>
        <script>
            function keydown(){
                k=event.keyCode;
                // alert(k);

                //-----------
                // [ r ]
                    if(k==82){
                        id.value="k==82";
                        form.submit();
                    }
                // [ ] ][ q ]
                    if(k==221|81==k|90==k|191==k){
                        parent.location.reload();
                    }
                // [ esc ]
                    if(k==27){
                        parent.top_left.top_left();
                    }
                // [ backspace ]
                    if(k==8){
                        parent.middle_right.location.href="..";
                    }
                // [ l ]
                    if(k==76){
                        id.value="session_url_logout";
                        form.submit();
                    }
                // [ m ]
                    if(k==77){
                        id.value="session:article_url=main_url";
                        form.submit();
                    }
            }

            function ru2n(){
                alert('직접하시오.');
            }
        </script>
        <form action=""id='form'method='post'>
            <input type="hidden"id='id'name='name'>
        </form>
            <?php
                if(isset($_POST['name'])){
                    if($_POST['name']=='session:article_url=main_url'){
                        $_SESSION['article_url']=$main_url;
                            ?>
                                <script>parent.location.reload();</script>
                            <?php
                    }else if($_POST['name']=='session_url_logout'){
                        $_SESSION['article_url']=$logout_url;
                            ?>
                                <script>parent.location.reload();</script>    
                            <?php
                    }
                    if(!isset($_SESSION['checkbox'])){
                        $_SESSION['checkbox']=array(
                            'naver'=>"",
                            'google'=>"",
                            'github'=>"",
                            'vscode'=>"",
                            'edge'=>""
                        );
                    }
                    else if($_POST['name']=='check_naver'){
                        if($_SESSION['checkbox']['naver']==""){
                            $_SESSION['checkbox']['naver']="checked";
                        }else{
                            $_SESSION['checkbox']['naver']="";
                        }
                    }else if($_POST['name']=='check_google'){
                        if($_SESSION['checkbox']['google']==""){
                            $_SESSION['checkbox']['google']="checked";
                        }else{
                            $_SESSION['checkbox']['google']="";
                        }
                    }else if($_POST['name']=='check_github'){
                        if($_SESSION['checkbox']['github']==""){
                            $_SESSION['checkbox']['github']="checked";
                        }else{
                            $_SESSION['checkbox']['github']="";
                        }
                    }else if($_POST['name']=='check_vscode'){
                        if($_SESSION['checkbox']['vscode']==""){
                            $_SESSION['checkbox']['vscode']="checked";
                        }else{
                            $_SESSION['checkbox']['vscode']="";
                        }
                    }else if($_POST['name']=='check_edge'){
                        if($_SESSION['checkbox']['edge']==""){
                            $_SESSION['checkbox']['edge']="checked";
                        }else{
                            $_SESSION['checkbox']['edge']="";
                        }
                    }
                }
            ?>
    </head>
    <body onkeydown="keydown();">
            <?php
                if(!isset($_SESSION['article_url'])){
                    $_SESSION['article_url']=$main_url;
                }
                
                include $_SESSION['article_url'];
            ?>
    </body>
</html>
<!--  -->
    <html>
            <?php
                // include "../css.php";
                // $name=
                // "middle_right";
                // $other_name=
                // "top_left";
                // $other1_name=
                // "top_right";
                // $other2_name=
                // "parent";
                // $function_name=
                // "keydown";
            ?>
        <!-- <body onkeydown="keydown();">
            <h1><?=$name?></h1>
            I have <?=$name?> function.
            <br>
            I have keydown function.
            <br>
            My parent have <?=$other2_name?> function.
            <br>
            <button onclick="<?=$name?>();"><?=$name?>()</button>
            <button id="esc" onclick="parent.<?=$other_name?>.<?=$other_name?>();"><?=$other_name?>()</button>
            <button onclick="parent.<?=$other1_name?>.<?=$other1_name?>();"><?=$other1_name?>()</button>
            <button onclick="parent.<?=$other2_name?>();"><?=$other2_name?>()</button>
            <script>
                function <?=$name?>(){
                    alert("<?=$name?>");
                }
                function keydown(){
                    k=event.keyCode;
                    // alert(k);

                    //-----------
                    // [ / ][ q ]
                        if(k==191|81==k){
                            parent.location.reload();
                        }
                    // [ esc ]
                        if(k==27){
                            esc.click();
                        }
                }
            </script>
        </body> -->
    </html>