<div id="menu">
    <form  action="." method="POST" onsubmit="if(color_hat.value==''){alert('you didn\'t choice');return false;}">
        <div id="label" onclick="color_hat.value='#c0b498'">!!베이지</div>
        <div id="label" onclick="color_hat.value='#d7d8dd'">!!그레이</div>
        <div id="label" onclick="color_hat.value='rgb(46, 45, 45)'">!!검정</div>
        <div id="label" onclick="color_hat.value='rgb(207, 42, 42)'">!!비건디</div>
        <input type="hidden" id="color_hat" name="color_hat">
        <input type="submit">
    </form>
</div>