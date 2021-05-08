<?php
        function alpha($N){
            if($N>9){
                $alpha=array('a','b','c','d','e','f');
                $N=$alpha[$N-9-1];
            }
            return $N;
        }
  function skin($per){
      if($per<100){
          $zin=16;
          $num=round(pow($zin,2)/100*$per);
          
          $first_num=floor($num/$zin);
          $second_num=$num-$first_num*$zin;
          // die("$first_num");
      
          $first_num=alpha($first_num);
          $second_num=alpha($second_num);
          $color="background:#ebd6c0".$first_num.$second_num.";";
      }else{
          $color="background:#ebd6c0;";
      }


      return $color;
  }

  session_start();

  if (!isset($_SESSION['cccv4cloth'])) {
    $_SESSION['cccv4cloth'] = "index";
  }
  if (!isset($_SESSION['cccv4clickcloth'])) {
    $_SESSION['cccv4clickcloth'] = 0;
  }

  if (!isset($_SESSION['cccv4hatcolor'])) {
    $_SESSION['cccv4hatcolor'] = "darkblack";
  }

  $cloth='hat';
  if (!isset($_SESSION['cccv4wear'.$cloth])) {
    $_SESSION['cccv4wearhat'] = 0;
  }
  $cloth='glasses';
  if (!isset($_SESSION['cccv4wear'.$cloth])) {
    $_SESSION['cccv4wear'.$cloth] = 0;
  }
  $cloth='mask';
  if (!isset($_SESSION['cccv4wear'.$cloth])) {
    $_SESSION['cccv4wear'.$cloth] = 0;
  }

  if (isset($_POST['-'])) {
    //------------------------------------------------------//
    $cloth= 'glasses' ;
    if($_POST['-'] === 'wear'.$cloth) {
        if ($_SESSION['cccv4wear'.$cloth] === 1){
            $_SESSION['cccv4wear'.$cloth] = 0;
        }
        else {
            $_SESSION['cccv4wear'.$cloth] = 1;
        }
    }
    //------------------------------------------------------//
    $cloth= 'hat' ;
    if($_POST['-'] === 'wear'.$cloth) {
        if ($_SESSION['cccv4wear'.$cloth] === 1){
            $_SESSION['cccv4wear'.$cloth] = $_SESSION['cccv4clickcloth'] = 0;
        }
        else {
            $_SESSION['cccv4wear'.$cloth] = $_SESSION['cccv4clickcloth'] = 1;
        }
    }
    if($_POST['-'] === $cloth.'colorwhite') {
        $_SESSION['cccv4'.$cloth.'color']='rgb(230,230,230)';
    }
    if($_POST['-'] === $cloth.'colorred') {
        $_SESSION['cccv4'.$cloth.'color']='red';
    }
    if($_POST['-'] === $cloth.'colorblack') {
        $_SESSION['cccv4'.$cloth.'color']='rgb(70,70,70)';
    }
    //------------------------------------------------------//
    $cloth= 'mask' ;
    if($_POST['-'] === 'wear'.$cloth) {
        if ($_SESSION['cccv4wear'.$cloth] === 1){
            $_SESSION['cccv4wear'.$cloth] = $_SESSION['cccv4clickcloth'] = 0;
        }
        else {
            $_SESSION['cccv4wear'.$cloth] = $_SESSION['cccv4clickcloth'] = 1;
        }
    }
    if($_POST['-'] === $cloth.'colorwhite') {
        $_SESSION['cccv4'.$cloth.'color']='rgb(250,250,250)';
    }
    if($_POST['-'] === $cloth.'colorred') {
        $_SESSION['cccv4'.$cloth.'color']='red';
    }
    if($_POST['-'] === $cloth.'colorblack') {
        $_SESSION['cccv4'.$cloth.'color']='rgb(10,10,10)';
    }
  }
?>