<style>
*{
    margin: 0;padding: 0%;border: 0ch;opacity: 100; /*?*/
}

/* ------------- RefreshPage ------------- */
#RefreshPage{
    background: white;
    margin-top: 30;
    color: black;
    margin: 0 auto;
    width: 100;height:26;
    border: 1px solid transparent;
    border-width: 10 1 10 1;
    text-align: center;
}   
    #RefreshPage:hover{
        cursor: pointer;
        opacity: 50%;
    }

/* ------------- 메뉴 사람 메뉴 ------------- */
#columns{
    display: flex;
    height: 700;width: 500;
    margin: 0 auto;
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
            }#menu #label .text{
            }
     
/* ------------- 바닥 ------------- */  
#floor{
    height:10;width:100%;
}
</style>