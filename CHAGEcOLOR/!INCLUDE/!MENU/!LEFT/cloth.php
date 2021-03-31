<div id="menu">
    <form  action="." method="POST">
        <div id="label" onclick="cloth.value='option';submit.click();"><div class="text">옵션</div></div>
        <div style="color:<?=$color_hat?>;" id="label" onclick="cloth.value='hat';submit.click();"><div class="text">모자</div></div>
        <div style="color:<?=$color_jacket?>;" id="label" onclick="cloth.value='jacket';submit.click();"><div class="text">자켓</div></div>
        <div style="color:<?=$color_shirts?>;" id="label" onclick="cloth.value='shirts';submit.click();"><div class="text">셔츠</div></div>
        <div style="color:<?=$color_pants?>;" id="label" onclick="cloth.value='pants';submit.click();"><div class="text">바지</div></div>
        <div style="color:<?=$color_shoes?>;" id="label" onclick="cloth.value='shoes';submit.click();"><div class="text">신발</div></div>
        <input type="hidden" id="cloth" name="cloth">
        <input id="submit" type="submit" hidden>
    </form>
</div>

<?php $cloth="index";
    if(isset($_POST["cloth"])){$cloth=$_POST["cloth"];
        $_SESSION['cloth']=$cloth;}else if(isset($_SESSION['cloth'])){
        $cloth=$_SESSION['cloth'];}
?>