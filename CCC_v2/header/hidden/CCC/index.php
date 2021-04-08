<?php
$t=$_SESSION['man-size'];
    if(!isset($t)){
        $t=100;
        //사람크기
    }
if(isset($_POST['man-size'])){
    $t+=intval($_POST['man-size'])/5;
    $t+=intval($_POST['man-size']);

    if($_POST['man-size']==10& ($t==108|$t==104))$t=100;
    if($_POST['man-size']==-10& $t==92)$t=100;
}

if($t>104){
    $t=104;
}else if($t<0){
    $t=0;
}

// ia($t);
$_SESSION['man-size']=$t;
?>
<form action="." method="post" id="man_size_form">
    <input type="hidden" id="man_size" name="man-size">
</form>