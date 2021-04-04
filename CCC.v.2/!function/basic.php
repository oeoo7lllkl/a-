<?php
function i($string){
    if(isset($string)){
        die("존재");
    }else{
        die("없음");
    }
}
function d($string){
    die("<p>".$string."</p>");
}
function v($string){
    var_dump($string);
}
function e($string){
    echo($string);
}
?>