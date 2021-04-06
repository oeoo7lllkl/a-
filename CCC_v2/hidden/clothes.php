<form action="." method="post" id="form_color">
    <input type="hidden" id="color" name="color">
</form>
<?php
if(isset($_POST['color'])){
    // i($_POST['color']);
    // i($_SESSION['color']);
    $_SESSION['color']=$_POST['color'];
}

include "hidden/function/colors.php";
?>