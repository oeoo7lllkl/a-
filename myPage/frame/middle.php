<html>
    <head>
            <?php
                include "css.php";
            ?>
        <style>
            .left{
                width:100;
                border-right:0.1px solid gray;
            }
        </style>
    </head>
    <script>
        function keypress(){
            k=event.keyCode;
            // alert(k);
            //z키
            if(k==122|k==113){
                top.top.location.reload();
            }
            die();
        }
    </script>
    <body onkeypress='keypress()'>
        <div class="display-flex">

            <div class="left">asdasd</div>

            <div class="center"></div>
            
            <div class="right"></div>
        </div>
    </body>
</html>