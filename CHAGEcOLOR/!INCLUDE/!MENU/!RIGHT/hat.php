<!-- <div id="menu">
    <form  action="." method="POST">
        <div id="label" onclick="color_hat.value='c0b498';submit_hat.click();"><div class="text">베이지</div></div>
        <div id="label" onclick="color_hat.value='d7d8dd';submit_hat.click();"><div class="text">그레이</div></div>
        <div id="label" onclick="color_hat.value='rgb(46, 45, 45)';submit_hat.click();"><div class="text">검정</div></div>
        <div id="label" onclick="color_hat.value='rgb(207, 42, 42)';submit_hat.click();"><div class="text">비건디</div></div>
        <input type="hidden" id="color_hat" name="color_hat">
        <input id="submit_hat" type="submit" hidden>
    </form>
</div> -->

<?php include "!INCLUDE/!FUNCTION/menu.php";
make_menu("color_hat",
make_row("color_hat",'c0b498',"베이지")
.
make_row("color_hat",'d7d8dd',"그레이")
.
make_row("color_hat",'rgb(46, 45, 45)',"검정")
.
make_row("color_hat",'rgb(207, 42, 42)',"비건디")
);
?>