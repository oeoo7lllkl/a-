<div id="colorMenu">
    <!--왼 메뉴 클릭없거나 옵션을 클릭했을 경우 색입력창 안보임-->
    <form action="." method="post" <?php if($cloth=="index"|$cloth=="option"){?>hidden<?php }?>>
        <input type="text" name="inputedColor">
        <input type="submit">
    </form>
    <?php include "!include/!menu/!right/".$cloth.".php"?>
</div>