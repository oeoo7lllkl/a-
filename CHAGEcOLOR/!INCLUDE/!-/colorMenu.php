<div class="colorMenu">
    <!--왼 메뉴 클릭없거나 옵션을 클릭했을 경우 색입력창 안보임-->
    <form class="inputColor" action="." method="post" <?php if($cloth=="index"|$cloth=="option"){?>hidden<?php }?>>
        <div style="height:<?=$inputColorinputH?>;font-size:20;text-align:center;">색상 입력</div>
        <input type="text" name="inputedColor">
        <input type="submit" value="적 용">
    </form>
    <div class="colorCloth">
        <?php include "!include/!menu/!right/".$cloth.".php"?>
    </div>
</div>