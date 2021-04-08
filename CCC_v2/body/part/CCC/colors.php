<div class="div-for-man-size-button">
<div class="display-flex-center buttons-upper">
    <div class="buttons">
        <?php
        makeButton_color("모자","hat");
        makeButton_color("마스크","mask");
        makeButton_color("자켓","jacket");
        makeButton_color("셔츠","shirts");
        makeButton_color("바지","pants");
        makeButton_color("신발","shoes");
        ?>
    </div>
</div>
<div class="man-size-button" onclick="if(<?=$_SESSION['man-size']?>==0){return false;}man_size.value=-10;man_size_form.submit();">-</div>
</div>
