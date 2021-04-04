<?php
function i($string){
    if(isset($string)){
        die("<h1><p>존재</p></h1>");
    }else{
        die("<h1><p>없음</p></h1>");
    }
}
function d($string){
    die("
    <h1><p>
    $string
    </p></h1>
    ");
}
function v($string){
    var_dump("
    <h1><p>
    $string
    </p></h1>
    ");
}
function e($string){
    echo("
    <h1>
    <p>$string</p>
    </h1>
    ");
}
?>