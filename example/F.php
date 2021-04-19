
<script>
    function F(){
        alert("F");
    }
</script>
<frameset rows="33%,33%,*"border="1">
    <frame src="f_1.php"name="f_1">
    <frame src="f_2.php"name="f_2">
    <frameset cols="50%,*">
        <frame src="f_3/f_3_1.php"name="f_3_1">
        <frame src="f_3/f_3_2.php"name="f_3_2">
    </frameset>
</frameset>