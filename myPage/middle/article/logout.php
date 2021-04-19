<style>
    p{
        text-align:center;     
        width:200;
        margin:0 auto;
        padding:30;
        margin-bottom:10;
        cursor:hand;
        font-size:40;
    }
    p:hover{
        opacity:50%;
    }
    .short{
        padding-top:20;
        padding-bottom:20;
    }
    .row{
        padding:2;
        padding-bottom:12;
        border:0.1px solid red;
        margin-bottom:2;
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
</style>
<div class="row">
    <div class="title">click</div>
    <p class="naver" onclick='window.open("https:naver.com", "", "toolbar=no, menubar=no, scrollbars=no, resizable=yes")'>naver</p>    
    <p class="google" onclick='window.open("https:google.com", "", "toolbar=no, menubar=no, scrollbars=no, resizable=yes")'>google</p>    
    <p class="github" onclick='window.open("https:github.com", "", "toolbar=no, menubar=no, scrollbars=no, resizable=yes")'>github</p>    
</div>
<div class="row">
    <div class="title">self</div>
    <p class="short vscode" onclick="ru2n();">vscode</p>    
    <p class="short edge" onclick="ru2n();">edge</p>    
</div>