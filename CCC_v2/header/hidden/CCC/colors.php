<form action="." method="post" id="form_cloth">
    <input type="hidden" id="cloth" name="cloth">
</form>
<?php
if(isset($_POST['cloth'])){
    // i($_POST['cloth']);
    // i($_SESSION['cloth']);
    $_SESSION['cloth']=$_POST['cloth'];
}
?>