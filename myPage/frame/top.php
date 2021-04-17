<html>
    <head>
            <?php
                include "css.php";
            ?>
        <style>
            body{
            }
            .left{
                width:100;
                height:100%;
                float:left;
            border-right:0.1px solid gray;
            }
        </style>
        <script>
            window.onload=function(){

                document.getElementById("left").onclick=function(){
                    alert();
                // left.onclick=null;
                }
            }
        </script>
    </head>
    <body>
        <div class="left"id="left"></div>
    </body>
</html>