<html>
    <head>
            <?php
                include "../base.php";
            ?>
        <script>
        </script>
        <style>
            .menu{
                text-align:center;
                padding:5;
                cursor:hand;
            }
            .menu:hover{
                background:black;
                color:white;
            }
        </style>
    </head>
    <form action=""method='post'id='form'>
            <input type="hidden"id='id'name='name'>
    </form>
    <body onfocus="parent.middle_right.focus();" onclick="parent.middle_right.focus();">

        <?= makeMenu("logout");?>
        <?= makeMenu("game");?>

    </body>
</html>