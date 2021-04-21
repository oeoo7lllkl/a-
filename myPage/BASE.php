<?php
    session_start();

    if(!isset($_SESSION['device_id'])){
        if(isset($_POST['device_width'])){
            //=============
                // die("device width : ".$_POST['device_width']."<br>device height : ".$_POST['device_height']."");
            //=============
            if($_POST['device_width']==1920&$_POST['device_height']==1080){
                $_SESSION['device_id']=2;
                ?>
                <script>parent.location.reload();</script>
                <?php
            }
        }else{
            ?>
            <form action=""method='post'id='form'>
                <input type="hidden"id='id'name='device_width'>
                <input type="hidden"id='id2'name='device_height'>
            </form>
            <script>
                id.value=screen.width;
                id2.value=screen.height;
                form.submit();
            </script>
            <?php
        }
    }
    
    $main_url="article/main.php";
    $logout_url="article/logout.php";
?>
<style>
    *{
        margin:0;
    }
    body{
        background:black;
        color:white;
    }
    button{
        cursor:pointer;
        cursor:hand;
    }
</style>