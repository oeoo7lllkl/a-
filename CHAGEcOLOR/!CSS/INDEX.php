<style>
*{
    margin: 0;padding: 0%;border: 0ch;
}

body{
    background-color: black;
    color:white;
}

/* ------------- RefreshPage ------------- */
#RefreshPage{
    background: white;
    margin-top: 10;
    color: black;
    margin: 0 auto;
    width: 100;height:15;
    border: 1px solid transparent;
    border-width: 0 1 10 1;
    text-align: center;
}   
    #RefreshPage:hover{
        cursor: pointer;
        opacity: 50%;
    }

/* ------------- 메뉴 사람 메뉴 ------------- */
#columns{
    display: flex;
    height: 765;width: 500;
    margin: 0 auto;
    <?php $numberColumns=50?>
    background: rgb(<?=$numberColumns?>, <?=$numberColumns?>, <?=$numberColumns?>);
}

/* ------------- 메뉴 ------------- */
#menu{
    background: rgb(100, 100, 100);
    width: 100;
    margin: auto 0;
}
    #menu input[type=submit]{
        width: 100;height: 50;
        margin-top: 40;
        font-size: large;
        /* visibility: hidden; */
    }
    #menu #label{
        text-align: center;
        color: white;
        margin: 20 0;
        height: 30;
        font-size: large;

    }
        #menu #label:hover{
            cursor:pointer;
            opacity: 50%;
                color:pink;
                font-size:25;
        }
            #menu #label .text{
            }
/* ------------- 입력색 ------------- */  
#colorMenu{
    width:100;
    height:100%;
    background:red;
}   
    #colorMenu>form>input{
        width:100;height:40;
        font-size:25;
    }
</style>