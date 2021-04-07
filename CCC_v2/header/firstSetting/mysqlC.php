<?php
$_SESSION['array']=array(1,2,3,4);
vd($_SESSION['array']);

      //$host,$userName,$password,$databaseName
      $_SESSION['mysqli-connect-id']=0;
      // 0 : 맥북
      // 1 : 회사
              $_SESSION['mysqli-connect']=array(
                  array("localhost","root","11513122","o"),
                  array("localhost","root","root","o")
                );
function msC(){
    if(isset($_SESSION['mysqli-connect-id'])){
        $A=mysqli_connect(
            $_SESSION['mysqli-connect'][$_SESSION['mysqli-connect-id']][0],
            $_SESSION['mysqli-connect'][$_SESSION['mysqli-connect-id']][1],
            $_SESSION['mysqli-connect'][$_SESSION['mysqli-connect-id']][2],
            $_SESSION['mysqli-connect'][$_SESSION['mysqli-connect-id']][3]
        );
    }                 
    if($A){
        return $A;
    }else{
        echo("DB 설정이 잘못되었습니다. header/firstsetting/mysqlc에서 확인하세요.</br>".mysqli_connect_error());
    }
}
?>