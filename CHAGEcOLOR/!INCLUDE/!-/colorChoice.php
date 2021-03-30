<?php
session_start();
include "!include/!-/_pageid.php";
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 모자 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// 포스트 모자색을 받으면 적용
if(isset($_POST['color_hat']))
{$color_hat= $_POST['color_hat'];
    //세션 모자색도 변경
    $_SESSION[$_pageid.'color_hat']=$color_hat;}
// 세션에 모자색 적용 
else if(isset($_SESSION[$_pageid.'color_hat'])){
    $color_hat=$_SESSION[$_pageid.'color_hat'];
}
else{//세션도 포스트도 없으면 모자없음
    $color_hat="black";
}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 자켓 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// 포스트 자켓색을 받으면 적용
if(isset($_POST['color_jacket']))
{$color_jacket= $_POST['color_jacket'];
    $color_jacketCoveringFront= $color_jacket;
    //세션 자켓색도 변경
    $_SESSION[$_pageid.'color_jacket']=$color_jacket;}
// 세션에 자켓색 적용 
else if(isset($_SESSION[$_pageid.'color_jacket'])){
    $color_jacket=$_SESSION[$_pageid.'color_jacket'];
    $color_jacketCoveringFront= $color_jacket;//!
}
else{//세션도 포스트도 없으면 자켓색 검정
    $color_jacket="black";
    $color_jacketCoveringFront= $color_jacket;
}
    //자켓색이 카키나 하양이면 지퍼색 은색
    if($color_jacket=="#474844"||$color_jacket=="white"){
        $color_zipper="#c3c3c0";
    }
    //그 외의 것들은 검정색
    else{
        $color_zipper="rgb(88, 88, 88)";
    }
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 옵션 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//옵션이 제출되면
if(isset($_POST['option'])){
    //옵션이 자켓덮기/열기면
    if($_POST['option']=='jacketCover'){
        //세션에 이미 있으면 교체
        if(isset($_SESSION[$_pageid."jacketCovered"])){
            if($_SESSION[$_pageid."jacketCovered"]=="yes"){$_SESSION[$_pageid."jacketCovered"]="no";}
            else{$_SESSION[$_pageid."jacketCovered"]="yes";}
        }
        //없으면 세션에 덮힘으로 저장
        else{
            $_SESSION[$_pageid."jacketCovered"]="yes";
        }
    }    //옵션이 팔걷기/펴기면
    if($_POST['option']=='armsUpper'){
        //세션에 이미 있으면 교체
        if(isset($_SESSION[$_pageid."armsUpOrDown"])){
            if($_SESSION[$_pageid."armsUpOrDown"]=="up"){$_SESSION[$_pageid."armsUpOrDown"]="down";}
            else{$_SESSION[$_pageid."armsUpOrDown"]="up";}
        }
        //없으면 세션에 덮힘으로 저장
        else{
            $_SESSION[$_pageid."armsUpOrDown"]="down";
        }
    }          
}

//세션에 자켓덮힘이 있으면
if(isset($_SESSION[$_pageid."jacketCovered"])){
    $jacketCovered=$_SESSION[$_pageid."jacketCovered"];
    if($jacketCovered=="no"){
        $color_jacketCoveringFront="transparent";
    }
}else{//자켓덮힘이 없으면 셔츠덮는자켓색 투명
    $color_jacketCoveringFront="transparent";
}

//세션에 팔걷기 있으면 세션의 값을 받음
if(isset($_SESSION[$_pageid."armsUpOrDown"])){
    $armsUpOrDown=$_SESSION[$_pageid."armsUpOrDown"];
}else{//세션에 없으면 다운으로
    $armsUpOrDown="down";
}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 셔츠 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// 포스트 셔츠색을 받으면 적용
if(isset($_POST['color_shirts']))
{$color_shirts= $_POST['color_shirts'];
    //세션 셔츠색도 변경
    $_SESSION[$_pageid.'color_shirts']=$color_shirts;}
// 세션에 셔츠색 적용 
else if(isset($_SESSION[$_pageid.'color_shirts'])){
    $color_shirts=$_SESSION[$_pageid.'color_shirts'];
}
else{//세션도 포스트도 없으면 셔츠색 검정
    $color_shirts="black";
}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 바지 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//~
//짧은/긴 클릭되면
if(isset($_POST['pantsShortOrLong'])){
    //세션에 이미 있으면 교체
    if(isset($_SESSION[$_pageid."pantsShortOrLong"])){
        if($_SESSION[$_pageid."pantsShortOrLong"]=="long"){$_SESSION[$_pageid."pantsShortOrLong"]="short";}
        else{$_SESSION[$_pageid."pantsShortOrLong"]="long";}
    }
    //없으면 세션에 긴으로 저장
    else{
        $_SESSION[$_pageid."pantsShortOrLong"]="long";
    }
}     

// 포스트 바지색을 받으면 적용
if(isset($_POST['color_pants']))
{$color_pants= $_POST['color_pants'];
    //세션 바지색도 변경
    $_SESSION[$_pageid.'color_pants']=$color_pants;}
// 세션에 바지색 적용 
else if(isset($_SESSION[$_pageid.'color_pants'])){
    $color_pants=$_SESSION[$_pageid.'color_pants'];
}
else{//세션도 포스트도 없으면 바지색 검정
    $color_pants="black";
}

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 신발 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// 포스트 신발색을 받으면 적용
if(isset($_POST['color_shoes']))
{$color_shoes= $_POST['color_shoes'];
    //세션 신발색도 변경
    $_SESSION[$_pageid.'color_shoes']=$color_shoes;}
// 세션에 신발색 적용 
else if(isset($_SESSION[$_pageid.'color_shoes'])){
    $color_shoes=$_SESSION[$_pageid.'color_shoes'];
}
else{//세션도 포스트도 없으면 신발색 하양
    $color_shoes="white";
}
?>