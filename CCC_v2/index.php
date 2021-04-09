<head>
    <!--  @@@@@@@@@@@@@@@@ form @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@-->$_SESSION
    <form action=""method='post'id='form'>
        <input type="hidden"id='formText'>
    </form>
    <?php // @@@@@@@@@@@@@@@@ PHP @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    function s($T){
        return $_SESSION[$T];
    }
    function d($T){
        die($T);
    }
    function p($T){
        return $_POST[$T];
    }
    if(isset($_POST['what'])){
        d(p('name'));
    }    
    session_start();
    // $_SESSION['sessionStarted']=1;
    var_dump(s("sessionStarted"));
    // @@@@@@@@@@@@@@@@ SCRIPT @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    ?>
    <script>
        function keydown(){
            k=event.keyCode;
            // alert(k);
            if(k==82){
                formText.name='what';
                formText.value='W';
                form.submit();
            }
        }
    </script>
    <!-- @@@@@@@@@@@@@@@@ HTML @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
</head>
<body onkeydown='keydown()'>
    
</body>