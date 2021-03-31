<?php

?>
<div id="menu">
    <form action="." method="post">
        <div id="label" onclick="value.value='glasses';submit.click();">
            <div class="text">
                안경
            </div>
        </div>
        <div id="label" onclick="value.value='mask';submit.click();">
            <div class="text">
                마스크
            </div>
        </div>
        <input type="hidden" id="value" name="option">
        <input type="submit" id="submit" hidden>
    </form>
</div>