<html>
    <title>MY PAGE</title>
    <script>
        function parent(){
            alert("parent");
        }
    </script>
    <frameset rows="50,*"border="1">
        <frameset cols="100,*">
            <frame src="top/left.php"name="top_left">
            <frame src="top/right.php"name="top_right">
        </frameset>
        <frameset cols="100,*">
            <frame src="middle/left.php"name="middle_left">
            <frame src="middle/right.php"name="middle_right"
            onload="this.focus();"
            >
        </frameset>
    </frameset>
</html>