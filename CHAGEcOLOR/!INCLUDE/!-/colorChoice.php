<?php
session_start();
if(!isset($_SESSION['start'])){?><script>alert("WELCOME!");</script><?php }
$_SESSION['start']=1;
/*
세션 목록
cloth

color_hat
color_mask
color_jacket
color_shirts
color_pants
color_shoes

glasses 
mask
jacketCovered
armsUpOrDown 
pantsShortOrLong
*/
//왼쪽 메뉴가 클릭되면
$cloth="index";
if(isset($_POST["cloth"])){$cloth=$_POST["cloth"];
    $_SESSION['cloth']=$cloth;}else if(isset($_SESSION['cloth'])){
    $cloth=$_SESSION['cloth'];
}
//색상 입력되면
if(isset($_POST['inputedColor'])){
    $_SESSION['color_'.$cloth]=$_POST['inputedColor'];
}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 모자 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// 포스트 모자색을 받으면 적용
if(isset($_POST['color_hat']))
{$color_hat= $_POST['color_hat'];
    //세션 모자색도 변경
    $_SESSION['color_hat']=$color_hat;}
// 세션에 모자색 적용 
else if(isset($_SESSION['color_hat'])){
    $color_hat=$_SESSION['color_hat'];
}
else{//세션도 포스트도 없으면 
    $color_hat="black";
}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 마스크 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// 포스트 색을 받으면 적용
if(isset($_POST['color_mask']))
{$color_mask= $_POST['color_mask'];
    //세션색도 변경
    $_SESSION['color_mask']=$color_mask;
}
//포스트없고 세션있으면 세션색을 적용 
else if(isset($_SESSION['color_mask'])){
    $color_mask=$_SESSION['color_mask'];
}
else{//포스트도 세션도 없으면 
    $color_mask="black";
}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 자켓 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// 포스트 자켓색을 받으면 적용
if(isset($_POST['color_jacket']))
{$color_jacket= $_POST['color_jacket'];
    $color_jacketCoveringFront= $color_jacket;
    //세션 자켓색도 변경
    $_SESSION['color_jacket']=$color_jacket;}
// 세션에 자켓색 적용 
else if(isset($_SESSION['color_jacket'])){
    $color_jacket=$_SESSION['color_jacket'];
    $color_jacketCoveringFront= $color_jacket;
}
else{//세션도 포스트도 없으면 자켓색 카키
    $color_jacket=$khaki;
    $color_jacketCoveringFront= $color_jacket;
}
    //자켓색이 카키나 하양이면 지퍼색 은색
    if($color_jacket==$khaki|$color_jacket==$cream){
        $color_zipper="#c3c3c0";
    }
    //그 외의 것들은 검정색
    else{$nCZ=20;
        $color_zipper="rgb($nCZ, $nCZ, $nCZ)";
    }
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 옵션 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
if(!isset($_SESSION['jacketCovered'])){$_SESSION['jacketCovered']="no";}
if(!isset($_SESSION['armsUpOrDown']))$_SESSION['armsUpOrDown']="down";
//옵션이 제출되면
if(isset($_POST['option'])){
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 자켓덮기/열기면 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    //옵션이 자켓덮기/열기면
    if($_POST['option']=='jacketCover'){
        if($_SESSION["jacketCovered"]=="yes"){$_SESSION["jacketCovered"]="no";}
        else{$_SESSION["jacketCovered"]="yes";}
    }    //옵션이 팔걷기/펴기면
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 팔걷기/펴기면 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    if($_POST['option']=='armsUpper'){
        if($_SESSION["armsUpOrDown"]=="up"){$_SESSION["armsUpOrDown"]="down";}
        else{$_SESSION["armsUpOrDown"]="up";}
    }       
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 안경 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    if($_POST['option']=='glasses'){
        if($_SESSION["glasses"]==1){$_SESSION["glasses"]=0;}
        else{$_SESSION["glasses"]=1;}
    }   
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 마스크 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    if($_POST['option']=='mask'){
        if($_SESSION["mask"]==1){$_SESSION["mask"]=0;}
        else{$_SESSION["mask"]=1;}
    }   
}

//세션에 자켓덮힘이 있으면
if(isset($_SESSION["jacketCovered"])){
    $jacketCovered=$_SESSION["jacketCovered"];
    if($jacketCovered=="no"){
        $color_jacketCoveringFront="transparent";
    }
}else{//자켓덮힘이 없으면 셔츠덮는자켓색 투명
    $color_jacketCoveringFront="transparent";
}

//세션에 팔걷기 있으면 세션의 값을 받음
if(isset($_SESSION["armsUpOrDown"])){
    $armsUpOrDown=$_SESSION["armsUpOrDown"];
}else{//세션에 없으면 다운으로
    $armsUpOrDown="down";
}

if(!isset($_SESSION['glasses']))$_SESSION['glasses']=0;
$glasses=$_SESSION['glasses'];

if(!isset($_SESSION['mask']))$_SESSION['mask']=1;
$mask=$_SESSION['mask'];
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 셔츠 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
// 포스트 셔츠색을 받으면 적용
if(isset($_POST['color_shirts']))
{$color_shirts= $_POST['color_shirts'];
    //세션 셔츠색도 변경
    $_SESSION['color_shirts']=$color_shirts;}
// 세션에 셔츠색 적용 
else if(isset($_SESSION['color_shirts'])){
    $color_shirts=$_SESSION['color_shirts'];
}
else{//세션도 포스트도 없으면 셔츠색 검정
    $color_shirts="black";
}
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 바지 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
if(!isset($_SESSION['pantsShortOrLong'])){
    $_SESSION['pantsShortOrLong']="long";
    $pantsShortOrLong="long";
}else{
    $pantsShortOrLong=$_SESSION['pantsShortOrLong'];
}
//짧은/긴 클릭되면
if(isset($_POST['pantsShortOrLong'])){
    if($pantsShortOrLong=="long"){
        $_SESSION["pantsShortOrLong"]="short";
        $pantsShortOrLong="short";
    }
    else{
        $_SESSION["pantsShortOrLong"]="long";
        $pantsShortOrLong="long";
    }
}   

// 포스트 바지색을 받으면 적용
if(isset($_POST['color_pants']))
{$color_pants= $_POST['color_pants'];
    //세션 바지색도 변경
    $_SESSION['color_pants']=$color_pants;}
// 세션에 바지색 적용 
else if(isset($_SESSION['color_pants'])){
    $color_pants=$_SESSION['color_pants'];
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
    $_SESSION['color_shoes']=$color_shoes;}
// 세션에 신발색 적용 
else if(isset($_SESSION['color_shoes'])){
    $color_shoes=$_SESSION['color_shoes'];
}
else{//세션도 포스트도 없으면 신발색 하양
    $color_shoes="black";
}
?>