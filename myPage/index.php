<html>
        <?php
            include "base.php";
        ?>
    <title>MY PAGE</title>
    <script>
        function parent(){
            alert("parent");
        }
    </script>
    <frameset rows="50,*"border="0">
        <frameset cols="100,*,100">
            <frame src="top/left.php"name="top_left">
            <frame src="top/right.php"name="top_right">
            <frame src="top/right2.php"name="top_right2">
        </frameset>
        <frameset cols="100,*,100">
            <frame src="middle/left.php"name="middle_left">
            <frame src="middle/right.php"name="middle_right"onload="this.focus();">
            <frame src="middle/right2.php"name="middle_right2">
        </frameset>
    </frameset>
</html>