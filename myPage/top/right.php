<html>
        <?php
            include "../base.php";
        ?>
    <head>
        <style>
            .title{
                cursor:hand;
                height:100%;
                text-align:center;
            }
            .title:hover{
                background:black;
                color:white;
            }
        </style>
    </head>
    <form action=""id='form'method='post'>
        <input type="hidden"id='id'name='name'>
    </form>
    <!-- url -->
        <script>
            function main_url(){
                id.value="session:article_url=main_url";
                form.submit();
            }
        </script>
            <?php
                if(isset($_POST['name'])){
                    if($_POST['name']=='session:article_url=main_url'){
                        $_SESSION['article_url']=$main_url;
                            ?>
                                <script>parent.location.reload();</script>
                            <?php
                    }
                }
            ?>
    <body onfocus="parent.middle_right.focus();">
        <h1 class="title" onclick='
        main_url();
        '>MY PAGE</h1>
    </body>
</html>
<!-- <html>
        <?php
            include "../css.php";
            $name=
            "top_right";
            $other_name=
            "middle_right";
        ?>
    <head>
        <style>
            h1,p,button{
                float:left;
                margin:0;
                margin-right:10;
            }
        </style>
    </head>
    <body>
        <h1><?=$name?></h1>
        <p>
            I have <?=$name?> function.
        </p>
        <button onclick="<?=$name?>();"><?=$name?>()</button>
        <button onclick="parent.<?=$other_name?>.<?=$other_name?>();"><?=$other_name?>()</button>
        <script>
            function <?=$name?>(){
                alert("<?=$name?>");
            }
        </script>
    </body>
</html> -->