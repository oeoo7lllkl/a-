<script>
</script>
<style>
    body{
        padding-left:50%;
        background:black;
        color:white;
    }
    .app{
        background:white;
        <?php 
        $app_width=100;
        $app_margin=10;

        $app_domain=$app_width+$app_margin*2;
        ?>
        top:90;
    left:<?=-$app_domain*1.5?>;
        position:relative;
        width:<?=$app_width?>;
        height:<?=$app_width?>;
        margin:<?=$app_margin?>;
        color:black;
        display:flex;
        align-items:center;
        font-size:23;
        float:left;
    }
        <?php
        for($n=1;$n<=3;$n++){
            ?>
    .app.opacity_<?=$n?>{
        <?php
        if($n==1){
            ?>
            opacity:90%;
            cursor:hand;
            <?php
        }else if($n==2){
            ?>
            opacity:70%;
            cursor:hand;
            <?php
        }else if($n==3){
            ?>
            opacity:50%;
            <?php
        }
        ?>
    }
    .app.opacity_<?=$n?>:hover{
        opacity:50%;
    }   
            <?php
        }
        ?>
    .text{
        width:100%;
        text-align:center;
    }
</style>
    <?php

        function makeApp($name,$opacity){
            if($opacity==1){
                $opacity="opacity_1";
                $onclick=' onclick="'.$name.'_url();"';
            }else if($opacity==2){
                $opacity="opacity_2";
                $onclick=' onclick="'.$name.'_url();"';
            }else if($opacity==3){
                $opacity="opacity_3";
                $onclick='';
            }
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
                    <div id="<?=$name?>" class="app <?=$opacity?>"<?=$onclick?>>
                        <div class="text">
                            <?=$name?>
                        </div>
                    </div>

                <?php
        }
    ?>
<body>
    <!-- <div id="show"></div> -->
        <?php
            makeApp("logout",1);
            makeApp("game",2);
            makeApp("",3);
        ?>
</body>