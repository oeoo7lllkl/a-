<?php
//전체("color_hat","안에내용")
function make_menu($id,$article){
    ?>
    <style type="ttext/css">
#menu{
    background: rgb(94, 94, 94);
    width: 100;
    margin: auto 0;
}
    </style>
    <div id="menu">
        <form  action="." method="POST">
            <?=$article?>
            <input type="hidden" id="<?=$id?>" name="<?=$id?>">
            <input id="submit_<?=$id?>" type="submit" hidden>
        </form>
    </div>
    <?php
}
//한줄("color_hat","c0b498","베이지")
function make_row($id,$value,$text){
    ?>
    <div id="label" onclick="<?=$id?>.value='<?=$value?>';submit_<?=$id?>.click();">
        <div class="text"><?=$text?></div>
    </div>
    <?php
}
/*전체함수(
    한줄한수()
    한줄한수()
    한줄한수()
    한줄한수()
)*/
?>
<style>
    /* ------------- 메뉴 ------------- */
#menu{
    background: rgb(94, 94, 94);
    width: 100;
    margin: auto 0;
}
    #menu input[type=submit]{
        width: 100;height: 50;
        margin-top: 40;
        font-size: large;
        /* visibility: hidden; */
    }
    #menu #label{
        text-align: center;
        background: white;
        color: white;
        margin: 20 0;
        height: 30;
        font-size: large;

    }
        #menu #label:hover{
            cursor:pointer;
            opacity: 50%;
            }#menu #label .text{
                background: blue;
            }
</style>
