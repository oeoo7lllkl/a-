<?php
function makeButton_cloth($text,$name){
    if(isset($_SESSION['cloth'])){
        if($name==$_SESSION['cloth']){
            $clicked=" clicked";
        }else{
            $clicked="";
        }
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