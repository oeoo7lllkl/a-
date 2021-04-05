<style>
.display-flex{
    display:flex;
}
.display-flex-end{
    display:flex;
    align-items:flex-end;
}

body{
    background:black;
}

.display-flex1{
    background:rgb(30,30,30);
    display:flex;
    width:700;
    margin: 0 auto;
    padding:0 20;
}

    .buttons{
        width:100;
    }
.clothes{
    background:rgb(50,50,50);
}
.space{
    background:rgb(10,10,10);
    background:white;
    height:857;
    width:500;
    display:flex;
}
.space-man{/**몸에 글자색@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */
    color:rgb(100,100,100);
    color:white;
    color:transparent;
    text-align:center;
    background:rgb(255,255,255);
    margin:auto auto 0 auto;
    <?php 
    //사람크기설정@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    $w=225;
    $w=240;
    ?>
    width:<?=$w?>;
    height:<?=$w/2*7?>;
}
.colors{
    background:rgb(60,60,60);
}

.options{
    height:80;
    background:rgb(200,200,200);
}

.note{
    background:black;
    color:red;
    font-size:30;
    text-align:center;
}
</style>