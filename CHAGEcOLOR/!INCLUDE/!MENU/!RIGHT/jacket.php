<?php include "!INCLUDE/!FUNCTION/menu.php";
make_menuStart();
?><div id="label" onclick="submit_cover.click();"><div class="text">덮기/열기</div></div>
    <input type="hidden" id="jacketCover" name="jacketCover" value="-">
    <input type="submit" hidden id="submit_cover">
</form>
<form action="." method="post">
<?php
//은색 지퍼
make_row("color_jacket",'#474844',"카키");
make_row("color_jacket",'white',"하양");
//검정 지퍼
make_row("color_jacket",'#a8524f',"초코");
make_row("color_jacket",'black',"검정");
make_row("color_jacket",'rgb(1, 1, 95)',"네이비");
make_menuEnd("color_jacket");
?>