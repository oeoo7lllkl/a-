<?php include "!html/!css/css_index.php";?>

<form action="." method="post">
    <input type="hidden" name="destroySession" value="1">
    <input type="submit" hidden id="sessionDestroy">
</form>
<div class="sessionDestroy" onclick="sessionDestroy.click();">
    <p>세션 초기화</p>
</div>


<table>
    <?=$row?>
</table>