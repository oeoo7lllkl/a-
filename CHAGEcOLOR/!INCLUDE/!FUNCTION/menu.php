<?php
//전체시작()
function make_menuStart(){
    ?>
    <div id="menu">
        <form  action="." method="POST">
    <?php
}//전체끝("color_hat")
function make_menuEnd($id){
    ?>
            <input type="hidden" id="<?=$id?>" name="<?=$id?>">
            <input id="submit_<?=$id?>" type="submit" hidden>
        </form>
    </div>
    <?php
}
//한줄("color_hat","c0b498","베이지")
function make_row($id,$value,$text){
    ?>
    <div id="label" style="color:<?=$value?>;" onclick="<?=$id?>.value='<?=$value?>';submit_<?=$id?>.click();"><div class="text"><?=$text?></div></div>
    <?php
}
/*
    전체시작함수()
    한줄한수()
    한줄한수()
    한줄한수()
    한줄한수()
    전체끝함수()
)*/
?>