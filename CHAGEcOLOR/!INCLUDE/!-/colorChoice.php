<style>
body{
    background-color: black;
    color:white;
}
</style>
<?php
session_start();

if(!isset($_SESSION['start'])){
    //-------------------------초기 설정
    $_SESSION['hat']=0;
    $_SESSION['pantsShortOrLong']="long";

    $_SESSION['color_hat']=$blackHat;
    $_SESSION['color_mask']="black";
    $_SESSION['color_jacket']=$khaki;
    $_SESSION['color_shirts']="black";
    $_SESSION['color_pants']="black";
    $_SESSION['color_shoes']="black";
    //-----------------------------------

    $_SESSION['start']=1;
    ?>
    <form method="post" action="." onsubmit="H.value=screen.height;">
        <input type="hidden" name="H">
        <input type="submit" id="HS" hidden>
    </form>
    <script>
    HS.click();
    </script><?php 
}else if($_SESSION['start']==1){
    $screenH=$_POST['H'];
    //화면 높이가 변경되면 ?>
    <!-- <script>alert(screen.height)</script> -->
    <?php
    if($screenH==1024){//맥북에어: 900, 아이패드미니5: 1024, 윈도우: 1080
        $myBodyH=intval($screenH)*1.1;
        $topB=$myBodyH/1.1*0.04/2;
    }else if($screenH==1024){
        $myBodyH=intval($screenH)*0.85;
        $topB=$myBodyH/0.85*0.04/2;
    }else if($screenH==1080){
        $myBodyH=intval($screenH)*0.8;
        $topB=$myBodyH/0.85*0.04/2;
    }

    $_SESSION['myBodyH']=$myBodyH;
    $_SESSION['topB']=$topB;
    $_SESSION['start']=2;
    ?><script>alert("WELCOME");
    location.href=".";
    </script><?php
}
$myBodyH=$_SESSION['myBodyH'];
$topB=$_SESSION['topB'];
/*
세션 목록
cloth

color_hat
color_mask
color_jacket
color_shirts
color_pants
color_shoes

hat
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
//세션에 모자
if(!isset($_SESSION['hat']))$_SESSION['hat']=0;
$hat=$_SESSION['hat'];
//세션에 안경
if(!isset($_SESSION['glasses']))$_SESSION['glasses']=0;
$glasses=$_SESSION['glasses'];
//세션에 마스크
if(!isset($_SESSION['mask']))$_SESSION['mask']=1;
$mask=$_SESSION['mask'];
//세션에 자켓덮기
if(!isset($_SESSION['jacketCovered'])){
    $_SESSION['jacketCovered']="no";
    $_SESSION['color_jacketCoveringFront']="transparent";
}
$jacketCovered=$_SESSION['jacketCovered'];
//세션에 팔걷기
if(!isset($_SESSION['armsUpOrDown'])){
    $_SESSION['armsUpOrDown']="down";
}
$armsUpOrDown=$_SESSION['armsUpOrDown'];

//옵션이 제출되면
if(isset($_POST['option'])){
    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 모자 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    if($_POST['option']=='hat'){
        if($_SESSION["hat"]==1){
            $_SESSION["hat"]=0;
            $hat=0;
        }
        else{
            $_SESSION["hat"]=1;
            $hat=1;
        }
    }   
    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 안경 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    if($_POST['option']=='glasses'){
        if($_SESSION["glasses"]==1){
            $_SESSION["glasses"]=0;
            $glasses=0;
        }
        else{
            $_SESSION["glasses"]=1;
            $glasses=1;
        }
    }   
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 마스크 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    if($_POST['option']=='mask'){
        if($_SESSION["mask"]==1){
            $_SESSION["mask"]=0;
            $mask=0;
        }
        else{
            $_SESSION["mask"]=1;
            $mask=1;
        }
    }   
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 자켓덮기/열기면 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    if($_POST['option']=='jacketCover'){
        if($_SESSION["jacketCovered"]=="yes"){
            $_SESSION["jacketCovered"]="no";
            $jacketCovered="no";
            $_SESSION['color_jacketCoveringFront']="transparent";
        }
        else{
            $_SESSION["jacketCovered"]="yes";
            $jacketCovered="yes";
        }
    }
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 팔걷기/펴기면 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    if($_POST['option']=='armsUpper'){
        if($_SESSION["armsUpOrDown"]=="up"){
            $_SESSION["armsUpOrDown"]="down";
            $armsUpOrDown="down";
        }
        else{
            $_SESSION["armsUpOrDown"]="up";
            $armsUpOrDown="up";
        }
    }       
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ 바지길이 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    //짧은/긴 클릭되면
    if($_POST['option']=='pantsShortOrLong'){
        if($_SESSION["pantsShortOrLong"]=="long"){
            $_SESSION["pantsShortOrLong"]="short";
            $pantsShortOrLong="short";
        }
        else{
            $_SESSION["pantsShortOrLong"]="long";
            $pantsShortOrLong="long";
        }
    }   
}

if($_SESSION['jacketCovered']=="yes"){
    $color_jacketCoveringFront=$color_jacket;
}else{
    $color_jacketCoveringFront="transparent";
}
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