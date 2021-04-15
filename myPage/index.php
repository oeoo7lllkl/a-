<?php
session_start();
?>
<script>
    function keypress(){
        k=event.keyCode;
        if(k==122){
            location.href=".";
        }
        die();
    }
</script>
<form action=""method='post'id='id_form'>
    <input type="hidden"id='id_id'name='name'>
</form>
<?php

if(isset($_POST['name'])){
    if($_POST['name']=='open'){
        $_SESSION['menu']=1;
    }else if($_POST['name']=='close'){
        $_SESSION['menu']=0;
    }
}

function white($per){
    $per=$per/100*255;
    return "rgb($per,$per,$per)";
}


if(!isset($_SESSION['menu'])){
    $_SESSION['menu']=0;
}
//====================================================================================
include "css.php";
?>
<body onkeypress='keypress()'>
    <div class="top_menu">
        <div class="open"onclick="id_id.value='open';id_form.submit();">
            <div class="center">O</div>
        </div>
    </div>
    <div class="menu">
        <div class="close"onclick="id_id.value='close';id_form.submit();">
            <div class="center">X</div>
        </div>
    </div>
    <div class="main">
        <div class="article">
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            B <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            zzzzzzzzzzzzA <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
            A <br>
        </div>
    </div>
</body>