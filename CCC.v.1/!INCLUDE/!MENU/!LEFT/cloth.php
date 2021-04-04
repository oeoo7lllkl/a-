<div class="menu">
    <?php
    formStart();
    option($cloth);
    cloth($cloth,"hat",$color_hat,"모자");
    cloth($cloth,"mask",$color_mask,"마스크");
    cloth($cloth,"jacket",$color_jacket,"자켓");
    cloth($cloth,"shirts",$color_shirts,"셔츠");
    cloth($cloth,"pants",$color_pants,"바지");
    cloth($cloth,"shoes",$color_shoes,"신발");
    formClothEnd("cloth");
    ?>
</div>