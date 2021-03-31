<?php include "!INCLUDE/!FUNCTION/menu.php";
make_menuStart();
?>
    <div id="label" onclick="option.value='jacketCover';submit_option.click();"><div class="text">덮기/열기</div></div>
    <div id="label" onclick="option.value='armsUpper';submit_option.click();"><div class="text">팔걷기/펴기</div></div>
    <input type="hidden" id="option" name="option">
    <input type="submit" hidden id="submit_option">
</form>
<form action="." method="post">
<?php
//은색 지퍼
make_row("color_jacket",'#3c3f3a',"카키");
make_row("color_jacket",$cream,"크림");
//검정 지퍼
make_row("color_jacket",'#a8524f',"초코");
make_row("color_jacket",'black',"검정");
make_row("color_jacket",$navy,"네이비");
make_menuEnd("color_jacket");
?>