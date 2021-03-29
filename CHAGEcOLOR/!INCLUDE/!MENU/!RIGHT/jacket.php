<div id="menu">
    <form  action="." method="POST" onsubmit="if(color_jacket.value==''){alert('you didn\'t choice');return false;}">
        <div id="label" onclick="color_jacket.value='#a8524f'">초코</div>
        <div id="label" onclick="color_jacket.value='#474844'">카키</div>
        <div id="label" onclick="color_jacket.value='black'">검정</div>
        <div id="label" onclick="color_jacket.value='rgb(1, 1, 95)'">네이비</div>
        <input type="hidden" id="color_jacket" name="color_jacket">
        <input type="submit">
    </form>
</div>
