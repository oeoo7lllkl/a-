<?php
function mysqlC(){
    if($_SESSION['DataBase']=="macbookair"){    //맥북DB
        $A=mysqli_connect("localhost","root","root","o");
    }
    else if($_SESSION['DataBase']=="companywindow"){    //회사DB
        $A=mysqli_connect("localhost","root","root","o");
    }                   //$host,$userName,$password,$databaseName
              
    if($A){
        return $A;
    }else{
        echo("DB 설정이 안되었습니다. 비밀번호를 확인하세요.</br>".mysqli_connect_error());
    }
}
?>