<?php
function formStart(){
    ?>
    <form  action="." method="POST">
    <?php
}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 좌측 옵션, 옷종류 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    function option($cloth){
        ?>
        <div style="<?php if($cloth=="option"){?>background:rgb(120,120,120);border-color:rgb(120,120,120);<?php }?>" class="label" onclick="value.value='option';submitCloth.click();">
            <div class="text">옵션</div>
        </div>
        <?php
    }
    function cloth($cloth,$clothName,$color_cloth,$clothText){
        
        ?>
        <div <?php if(($clothName=="hat"|$clothName=="mask")& $_SESSION["$clothName"]==0){?>hidden<?php }?> style="<?php if($cloth==$clothName){?>background:rgb(120,120,120);border-color:rgb(120,120,120);<?php }?>color:<?=$color_cloth?>;" class="label" onclick="value.value='<?=$clothName?>';submitCloth.click();">
            <div class="text"><?=$clothText?></div>
        </div>
        <?php
    }
    function formClothEnd($name){
        ?>
        <input type="hidden" id="value" name="<?=$name?>">
            <input id="submitCloth" type="submit" hidden>
        </form>
        <?php
    }
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 우측 옵션 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    function optionCloth($option,$text){
        ?>
        <div class="label" onclick="option.value='<?=$option;?>';submitOption.click();">
            <div class="text"><?=$text;?></div>
        </div>
        <?php 
    }
    function formOptionEnd(){
        ?>
            <input type="hidden" id="option" name="option">
            <input type="submit" hidden id="submitOption">
        </form>
        <?php
    }
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 옷 색상 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    function color($formName,$value,$text){
        ?>
        <div class="label" onclick="<?=$formName?>.value='<?=$value?>';submit<?=$formName?>.click();" style="color:<?=$value?>;"><div class="text"><?=$text?></div></div>
        <?php
    }
    function formEnd($formName){
        ?>
        <input type="hidden" id="<?=$formName?>" name="<?=$formName?>">
            <input id="submit<?=$formName?>" type="submit" hidden>
        </form>
        <?php
    }
?>