<html>
        <?php
            include "../css.php";
        ?>
    <head>
        <style>
            .title{
                cursor:hand;
                height:100%;
                background:black;
                color:white;
            }
            .title:hover{
                background:white;
                color:black;
            }
        </style>
    </head>
    <body onfocus="parent.middle_right.focus();">
        <h1 class="title">MY PAGE</h1>
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