<?php

session_start();

if(isset($_POST['destroySession'])){
    session_destroy();
    session_start();
}else{
}
    
?>