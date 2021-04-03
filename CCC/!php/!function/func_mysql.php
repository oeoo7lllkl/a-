<?php
include "!php/!process/prcc_session.php";
function mysqlC(){
    //$host,$userName,$password,$databaseName
    // $A=mysqli_connect("localhost","root","11513122","o");
    $A=mysqli_connect("localhost","root","root","o");
    if($A){
        return $A;
    }else{
        echo(mysqli_connect_error());
    }
}
function MSQ($conn,$sql){
    return mysqli_query($conn,$sql);
}
function MSF($result){
    return mysqli_fetch_array($result);
}
?>