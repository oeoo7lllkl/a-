qweqwewqe
<style>
    p{
        text-align:center;     
        width:200;
        margin:0 auto;
                padding:20;
        margin-bottom:10;
        cursor:hand;
        font-size:40;
        margin-right:20;
    }
        p:hover{
            opacity:50%;
        }
    .row{
        padding:2;
        padding-left:20;
        border:0.1px solid red;
        border-top:0;
        padding-bottom:170;
    }
        .row.click{
            border-top:0.1px solid red;
        }

    .title{
        text-align:center;
        padding:20;
    }
    
    .naver{
        background:yellowgreen;
        color:white;
    }
    .google{
        background:white;
        color:black;
    }
    .github{
        background:black;
        color:white;
    }
    .vscode{
        background:blue;
        color:white;
    }
    .edge{
        background:skyblue;
        color:white;
    }

    .box{
        float:left;
        text-align:center;
    }
    .checkbox{
        width:30;
        height:30;
        margin-left:13%;
            <?php
            die("
    }</style>
    Q
            ");
            if($_SESSION['device_id']==2){
            ?>
        position:relative;
        top:4;
        left:-4;
            }
                <?php
            ?>
    }
        .checkbox_border{
            background:red;
            width:30;
            position:relative;
            left:-3%;
            margin:0 auto;
                <?php
                if($_SESSION['device_id']==2){
                    ?>
            width:40;
            height:40;
                }
                    <?php
                ?>
        }
</style>
<div class="row click">
    <div class="title">click</div>
    <div class="box">
        <p class="naver" onclick='window.open("https:naver.com", "", "toolbar=no, menubar=no, scrollbars=no, resizable=yes")'>naver</p>    
        <div class="checkbox_border">
            <input <?=$_SESSION['checkbox']['naver'];?> class="checkbox" onclick="id.value='check_naver';form.submit();" type="checkbox">
        </div>
    </div>
    <div class="box">
        <p class="google" onclick='window.open("https:google.com", "", "toolbar=no, menubar=no, scrollbars=no, resizable=yes")'>google</p>  
        <div class="checkbox_border">  
        <input <?=$_SESSION['checkbox']['google'];?> class="checkbox" onclick="id.value='check_google';form.submit();" type="checkbox">
        </div>
    </div>
    <div class="box">
        <p class="github" onclick='window.open("https:github.com", "", "toolbar=no, menubar=no, scrollbars=no, resizable=yes")'>github</p>    
        <div class="checkbox_border">
        <input <?=$_SESSION['checkbox']['github'];?> class="checkbox" onclick="id.value='check_github';form.submit();" type="checkbox">
        </div>
    </div>
</div>
<div class="row self">
    <div class="title">self</div>
    <div class="box">
        <p class="vscode" onclick="ru2n();">vscode</p>    
        <div class="checkbox_border">
        <input <?=$_SESSION['checkbox']['vscode'];?> class="checkbox" onclick="id.value='check_vscode';form.submit();" type="checkbox">
        </div>
    </div>
    <div class="box">
        <p class="edge" onclick="ru2n();">edge</p>    
        <div class="checkbox_border">
        <input <?=$_SESSION['checkbox']['edge'];?> class="checkbox" onclick="id.value='check_edge';form.submit();" type="checkbox">
        </div>
    </div>
</div>
<h1 style="color:red;text-align:center;">
    var_dump($_SESSION['checkbox']) : <?php var_dump($_SESSION['checkbox']);?>
</h1>