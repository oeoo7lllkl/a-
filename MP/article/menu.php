<style>
<?php
?>
.menu{
    background:gray;
    width:300;
    margin:0 auto;
    cursor:hand;
    height:50;display:flex;align-items:center;
}.menu:hover{opacity:50%;}
</style>
<?php
function menu($number,$name){
    ?>
    <div id="menu<?=$number?>"class="menu"onclick="form_id.value='<?=$name?>';form.submit();">
        <div class="text">
            <?=$name?>    
        </div>
    </div>
    <?php
}
for($i=0;$i<$menu_count;$i++){
    menu($i+1,$menu_name[$i]);
}
?>