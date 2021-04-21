<title>CCC</title>
<style>
    *{margin:0;}
    body{
        background:black;
        background:rgb(55,55,55);
    }
    .A{
            <?php
                session_start();
            ?>
    width:<?=$_SESSION['s6']?>;
        margin:0 auto;
        height:100%;
    }
    #frame{
        width:100%;
        height:100%;;
        border:0;
    }
</style>

<body onfocus="frame.focus();"onclick="frame.focus();">
    
    <div class="A">
        <iframe onload="this.focus();" id="frame" src="index_in_frame.php">
    </div>
</body>