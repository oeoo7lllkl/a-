<div id="menu">
    <form  action="." method="POST">
        <div id="label" onclick="cloth.value='hat';submit.click();"><div class="text">모자</div></div>
        <div id="label" onclick="cloth.value='jacket';submit.click();"><div class="text">자켓</div></div>
        <div id="label" onclick="cloth.value='pants';submit.click();"><div class="text">바지</div></div>
        <div id="label" onclick="cloth.value='shoes';submit.click();"><div class="text">신발</div></div>
        <input type="hidden" id="cloth" name="cloth">
        <input id="submit" type="submit" hidden>
    </form>
</div>
