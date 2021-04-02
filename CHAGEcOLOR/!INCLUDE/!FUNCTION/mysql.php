<?php
function mysqlC(){
    //$host,$userName,$password,$databaseName
    $A=mysqli_connect("localhost","root","11513122","o");
    if($A==true){
        return $A;
    }else{
        die(mysqli_connect_error());
    }
}
function MSQ($conn,$sql){
    return mysqli_query($conn,$sql);
}
function MSF($result){
    return mysqli_fetch_aray($result);
}
?>