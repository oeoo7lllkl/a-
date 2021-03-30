<?php include "!INCLUDE/!FUNCTION/menu.php";
make_menuStart();
?><div id="label" onclick="submit_changePants.click();"><div class="text">짧은/긴</div></div>
    <input type="hidden" id="pantsShortOrLong" name="pantsShortOrLong" value="-">
    <input type="submit" hidden id="submit_changePants">
</form>
<form action="." method="post">
<?php
make_row("color_pants",'#c0b498',"베이지");
make_row("color_pants",'#d7d8dd',"그레이");
make_row("color_pants",'black',"검정");
make_row("color_pants",'rgb(1, 1, 95)',"네이비");
make_menuEnd("color_pants");
?>