<?php
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
function msQ($conn,$sql){
    return mysqli_query($conn,$sql);
}
function msFA($result){
    return mysqli_fetch_array($result);
}
?>