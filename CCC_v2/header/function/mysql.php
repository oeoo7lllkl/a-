<?php
function msQ($conn,$sql){
    return mysqli_query($conn,$sql);
}
function msFA($result){
    return mysqli_fetch_array($result);
}
?>