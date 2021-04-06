<?php
function makeButton_cloth($text,$name){
    if($name==$_SESSION['cloth']){
        $clicked=" clicked";
    }else{
        $clicked="";
    }
    ?>
    <div class="button_cloth<?=$clicked?>" onclick="cloth.value='<?=$name?>';form_cloth.submit();">
        <?=$text?>
    </div>
    <?php
}
?>