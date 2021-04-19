<?php
    session_start();
    
    $main_url="article/main.php";
    $logout_url="article/logout.php";

    function makeMenu($name){
            ?>

                <script>
                function <?=$name?>_url(){
                    id.value="session_url_<?=$name?>";
                    form.submit();
                }
                </script>
                    <?php
                        if(isset($_POST['name'])){
                            if($_POST['name']=="session_url_$name"){
                                $_SESSION['article_url']="article/$name.php";
                                    ?>
                                        <script>parent.location.reload();</script>    
                                    <?php
                            }
                        }
                    ?>
                <div id="<?=$name?>" class="menu" onclick="<?=$name?>_url();">
                    <?=$name?>
                </div>

            <?php
    }
?>
<style>
    *{
        margin:0;
    }
    button{
        cursor:pointer;
        cursor:hand;
    }
</style>