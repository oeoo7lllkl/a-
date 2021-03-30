<?php
session_start();
include "!include/!-/_pageid.php";
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

// 포스트 자켓색을 받으면 적용
if(isset($_POST['color_jacket']))
{$color_jacket= $_POST['color_jacket'];
    //세션 자켓색도 변경
    $_SESSION[$_pageid.'color_jacket']=$color_jacket;}
// 세션에 자켓색 적용 
else if(isset($_SESSION[$_pageid.'color_jacket'])){
    $color_jacket=$_SESSION[$_pageid.'color_jacket'];
}
else{//세션도 포스트도 없으면 자켓색 검정
    $color_jacket="black";
}
    //자켓색이 카키나 하양이면 지퍼색 은색
    if($color_jacket=="#474844"||$color_jacket=="white"){
        $color_zipper="#c3c3c0";
    }
    //그 외의 것들은 검정색
    else{
        $color_zipper="black";
    }

//자켓덮기/열기 클릭되면
if(isset($_POST['jacketCover'])){
    //세션에 이미 있으면 교체
    if(isset($_SESSION[$_pageid."jacketCovered"])){
        if($_SESSION[$_pageid."jacketCovered"]=="yes"){$_SESSION[$_pageid."jacketCovered"]="no";}
        else{$_SESSION[$_pageid."jacketCovered"]="yes";}
    }
    //없으면 세션에 덮힘으로 저장
    else{
        $_SESSION[$_pageid."jacketCovered"]="yes";
    }
}                   
    //세션에 자켓덮힘이 있으면
    if(isset($_SESSION[$_pageid."jacketCovered"])){
        $jacketCovered=$_SESSION[$_pageid."jacketCovered"];
        if($jacketCovered=="yes"){
            // 포스트 자켓색을 받으면 적용
            if(isset($_POST['color_jacket']))
            {
                $color_jacketCoveringFront= $_POST['color_jacket'];
            }
            // 세션에 자켓색 적용 
            else if(isset($_SESSION[$_pageid.'color_jacket'])){
                $color_jacketCoveringFront=$_SESSION[$_pageid.'color_jacket'];
            }
            else{//세션도 포스트도 없으면 앞을덮는자켓색 검정
                $color_jacketCoveringFront="black";
            }
        }//열려 있으면 투명색
        else{
            $color_jacketCoveringFront="transparent";
        }
    }else{//자켓덮힘이 없으면 셔츠덮는자켓색 투명
        $color_jacketCoveringFront="transparent";
    }

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