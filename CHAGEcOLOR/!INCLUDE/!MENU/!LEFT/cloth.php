<div id="menu">
    <form  action="." method="POST">
        <div style="<?php if($cloth=="option"){?>border:2px solid white;<?php }?>" id="label" onclick="cloth.value='option';submit.click();"><div class="text">옵션</div></div>
        <div style="<?php if($cloth=="hat"){?>border:2px solid white;<?php }?>color:<?=$color_hat?>;" id="label" onclick="cloth.value='hat';submit.click();"><div class="text">모자</div></div>
        <div style="<?php if($cloth=="mask"){?>border:2px solid white;<?php }?>color:<?=$color_mask?>;" id="label" onclick="cloth.value='mask';submit.click();"><div class="text">마스크</div></div>
        <div style="<?php if($cloth=="jacket"){?>border:2px solid white;<?php }?>color:<?=$color_jacket?>;" id="label" onclick="cloth.value='jacket';submit.click();"><div class="text">자켓</div></div>
        <div style="<?php if($cloth=="shirts"){?>border:2px solid white;<?php }?>color:<?=$color_shirts?>;" id="label" onclick="cloth.value='shirts';submit.click();"><div class="text">셔츠</div></div>
        <div style="<?php if($cloth=="pants"){?>border:2px solid white;<?php }?>color:<?=$color_pants?>;" id="label" onclick="cloth.value='pants';submit.click();"><div class="text">바지</div></div>
        <div style="<?php if($cloth=="shoes"){?>border:2px solid white;<?php }?>color:<?=$color_shoes?>;" id="label" onclick="cloth.value='shoes';submit.click();"><div class="text">신발</div></div>
        <input type="hidden" id="cloth" name="cloth">
        <input id="submit" type="submit" hidden>
    </form>
</div>