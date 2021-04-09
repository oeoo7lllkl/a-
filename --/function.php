<?php
// post 값이 있고 그 값을 읽을때
function p($T){
    return $_POST["$T"];
}
// session 값이 있고 그 값을 읽을때
function s($T){
    return $_SESSION[$T];
}
function a($a){
    ?><script>alert("<?=$a?>");</script><?php
}
?>
<script>
    function keydown(){
        var k = event.keyCode;
        keycode.value=k;
        form_keycode.submit();
    }
</script>