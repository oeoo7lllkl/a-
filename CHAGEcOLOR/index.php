<?php include "!include/!-/header.php";
?>
<body>
    <div id="RefreshPage" onclick="location.href='!INCLUDE/!FUNCTION/_sessionD.php'">
        !Reset
    </div>
    <div id="columns">
        <?php include "!include/!menu/!LEFT/cloth.php"?>
        <?php include "!include/!-/man.php"?>
        <div id="colorMenu">
            <form action=".">
                <input type="text" name="inputedColor">
                <input type="submit">
            </form>
            <?php include "!include/!menu/!right/".$cloth.".php"?>
        </div>
    </div>
</body>