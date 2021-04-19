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
    <!-- url -->
        <script>
            function logout_url(){
                id.value="session_url_logout";
                form.submit();
            }
        </script>
            <?php
                if(isset($_POST['name'])){
                    if($_POST['name']=='session_url_logout'){
                        $_SESSION['article_url']=$logout_url;
                            ?>
                                <script>parent.location.reload();</script>    
                            <?php
                    }
                }
            ?>
    <body onfocus="parent.middle_right.focus();" onclick="parent.middle_right.focus();">

        <div id="logout" class="menu" onclick="logout_url();">
            logout
        </div>

    </body>
</html>