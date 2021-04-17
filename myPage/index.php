
<frameset rows="50,*,50"border="1">
    <frame src="frame/top.php"name="top">
    <frame onload="this.focus();" src="frame/middle.php">
    <frame src="frame/bottom.php">
</frameset>
<script>
    function keypress(){
        k=event.keyCode;
        // alert(k);
        //z키
        if(k==122|k==113){
            location.href=".";
        }
        die();
    }
</script>
<body onkeypress='keypress()'>
</body>