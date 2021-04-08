<style>
    body{
    }
</style>
<script>
    function keypress(){
        var keycode=event.keyCode;

        document.getElementById('keychar').value=String.fromCharCode(keycode);
        document.getElementById('keycode').value=keycode;
        document.getElementById('shiftkey').checked=event.shiftKey;
        
    }
</script>
<body class="body-keypress" onkeypress="keypress()">
    아무키나 누르세여 <br>
    char <input type="text" id="keychar"><br>
    keycode <input type="text" id="keycode"><br>
    shift키 <input type="checkbox" id="shiftkey"><br>
</body>