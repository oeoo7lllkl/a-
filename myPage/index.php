    <?php
    session_start();
    ?>
<script>
    function keypress(){
        k=event.keyCode;
        if(k==122){
            location.href=".";
        }
        die();
    }
</script>
<style>
    *{margin:0;}.red_box{height:100;background:red;}
</style>
<form action=""method='post'id='form'>
    <input type="hidden"id='id'name='name'>
</form>
<body onkeypress='keypress()'>
    <!-- <div class="red_box"></div> -->

    <table style="width:100%;">
        <tr>
            <td style="height:100;background:black;" target="top"></td>
        </tr>
    </table>
</body>