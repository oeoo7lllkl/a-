<html>
        <?php
            include "../css.php";
            $name=
            "top_left";
            $other_name=
            "top_right";
        ?>
    <!-- <h1><?=$name?></h1> -->
    <!-- I have <?=$name?> function. -->
    <!-- <br> -->
    <style>
        .gohome{
            width:100%;
            height:100%;
            cursor:hand;
            color:transparent;
            display:flex;
            align-items:center;
        }
        .text{
            width:100%;
            text-align:center;
            font-size:20;
        }
        .gohome:hover{
            background:black;
            color:white;
        }
    </style>
    <div class="gohome" onclick="<?=$name?>();">
        <div class="text">
            <b>
                나가기
            </b>
        </div>
    </div>
    <!-- <button onclick="parent.<?=$other_name?>.<?=$other_name?>();"><?=$other_name?></button> -->
    <script>
        function <?=$name?>(){
            // alert("<?=$name?>");
            top.
            location.href="../..";
        }
    </script>
</html>