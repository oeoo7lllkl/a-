<div class="div-for-man-size-button">
<div class="display-flex-center buttons-upper">
    <div class="buttons">
        <?php
        makeButton_cloth("모자","hat");
        makeButton_cloth("마스크","mask");
        makeButton_cloth("자켓","jacket");
        makeButton_cloth("셔츠","shirts");
        makeButton_cloth("바지","pants");
        makeButton_cloth("신발","shoes");
        ?>
    </div>
</div>
<div class="man-size-button" onclick="if(<?=$_SESSION['man-size']?>==104){return false;}man_size.value='10';man_size_form.submit();">+</div>
</div>