<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Change Cloth's Color</title>
  <?php include_once 'includes/index.inc.php';?>
  <?php include_once 'css/root.php';?>
  <?php include_once 'css/style.php';?>
  <?php include_once 'css/line.php';?>
</head>
<body onkeypress="keypress()">
    
  <nav>   
    <div class="wrapper">
      <a href="index.php"><img src="img/logo.png" alt="logo"></a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="hat.php">모자</a></li>
        <li onclick="formid.value='wearglasses';form.submit();"><a>안경</a></li>
        <li><a href="mask.php">마스크</a></li>
        <li><a href="shirts.php">셔츠</a></li>
        <li><a href="jacket.php">자켓</a></li>
        <li><a href="pants.php">바지</a></li>
        <li><a href="shoes.php">신발</a></li>
      </ul>   
    </div>
  </nav>

<div class="wrapper">