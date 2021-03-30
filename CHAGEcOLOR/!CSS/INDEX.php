<style>
*{
    margin: 0;padding: 0%;border: 0ch;opacity: 100; /*?*/
}

/* ------------- 삭제 ------------- */
/* ------------- 색상 선택 버튼 ------------- */
input[type=button]{
    width: 100;height: 50;
}
    input[type=button]#빨{
        background-color: red;
    }
    input[type=button]#파{
        background-color: blue;
    }
    input[type=button]#초{
        background-color: green;
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
    background: rgb(94, 94, 94);
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
        background: white;
        color: white;
        margin: 20 0;
        height: 30;
        font-size: large;

    }
        #menu #label:hover{
            cursor:pointer;
            opacity: 50%;
            }#menu #label .text{
                background: blue;
            }
     
/* ------------- 바닥 ------------- */  
#floor{
    height:10;width:100%;
}
</style>