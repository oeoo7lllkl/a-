<?php
function msC(){
    if(isset($_SESSION['settingid'])){
        if($_SESSION['settingid']==3){//회사윈도우
            $A=mysqli_connect("localhost","root","11513122","o");
        }
        else{//맥북
            $A=mysqli_connect("localhost","root","root","o");
        }
    }                 
      //$host,$userName,$password,$databaseName
              
    if($A){
        return $A;
    }else{
        echo("DB 설정이 안되었습니다. 비밀번호를 확인하세요.</br>".mysqli_connect_error());
    }
}
?>