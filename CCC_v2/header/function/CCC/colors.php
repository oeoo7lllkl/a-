<?php
function makeButton_color($text,$name){
    if(isset($_SESSION['color'])){
        if($name==$_SESSION['color']){
            $clicked=" clicked";
        }else{
            $clicked="";
        }
    }else{
        $clicked="";
    }
    ?>
    <div class="button_color<?=$clicked?>" onclick="color.value='<?=$name?>';form_color.submit();">
        <?=$text?>
    </div>
    <?php
}
?>