<html>
    <head>
            <?php
                include "../css.php";
            ?>
        <script>
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
                        parent.top_left.top_left();
                    }
            }
        </script>
        <style>
            p{
                text-align:center;                            
            }
        </style>
    </head>
    <!-- onfocus="alert('focused');this.onfocus=null;" -->
    <body onkeydown="keydown();">
        <p onclick='window.open("https:\/\/naver.com", "네이버새창", "toolbar=no, menubar=no, scrollbars=no, resizable=yes")'>naver</p>    
        <p>google</p>    
        <p>github</p>    
        <p>vscode</p>    
        <p>edge</p>    
    </body>
</html>

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