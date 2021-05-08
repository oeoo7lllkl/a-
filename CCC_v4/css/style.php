<style>
:root{
  --nav-height:50px;
}
*{margin:0;padding:0;}
body{
  background:gray;
}
h1,h2,p{
  text-align:center;
}
h1{
  padding:20px;
}
h2{
  padding:20px;
}
p{
  padding-bottom:40px;
}
nav{
  height:var(--nav-height);
  background:black;
}
nav img{
  height:var(--nav-height);
}
.wrapper{
  width:900px;
  margin:0 auto;
  background:gray;
}nav .wrapper {
  background:black;
  height:var(--nav-height);
}
/* ///////////////////////////// */
nav ul{
  float:right;
  display:flex;
  align-items:center;
  height:100%;
  position:relative;
}
nav ul>li{
  list-style: none;
  cursor:pointer;
}
nav ul>li>a{
  padding:10px;
  color:white;
  text-decoration:none;
}
nav ul>li>a:hover{
  opacity:50%;
}


.index-intro{
  height:600px;
  display:flex;
  align-items:center;
}
/* ==================================================================== */
/* man----------------------- */
.man{
  /* background:black; */
  margin:0 auto;
}.man *{
}

.head{
  position:relative;
  height:var(--head-height);
  width:var(--head-width);
  margin:0 auto;
  /* background:none; */
}
    <?php
    $part='glasses';
      ${"{$part}height"}=16;           ${"{$part}width"}=92;
      ${"{$part}top"}=48;     ${"{$part}left"}=50-${"{$part}width"}/2;
    ?>
.<?=$part?>{
  <?php
  if ($_SESSION['cccv4wear'.$part]==0) {
    ?>
    display:none;
    <?php
  } 
  else {
    ?>
    display:flex;
    <?php
  }
  ?>
  position:absolute;
  z-index:1;
  height:<?=${"{$part}height"}?>%;
  width:<?=${"{$part}width"}?>%;
  top:<?=${"{$part}top"}?>%;
  left:<?=${"{$part}left"}?>%;
  margin:0 auto;
}
<?php
  $part2="side";
  ${"{$part2}height"}=9;
  ${"{$part2}top"}=10;
?>
.<?=$part?> .<?=$part2?>{
  position:relative;
  <?php
    $name="width";
    ${"{$part2}{$name}"}=14;
    $middle=7;
  ?>
  <?=$name?>:<?=${"{$part2}{$name}"}?>%;
  <?php
    $name="height";
    ${"{$part2}{$name}"}=10;
  ?>
  <?=$name?>:<?=${"{$part2}{$name}"}?>%;
  <?php
    $name="top";
    ${"{$part2}{$name}"}=100/3-${"{$part2}height"}/2;
  ?>
  <?=$name?>:<?=${"{$part2}{$name}"}?>%;
  background:<?=$sidecolor="yellow"?>;
}
<?php
  $part2="glass";
?>
.<?=$part?> .<?=$part2?>{
  position:relative;
  <?php
    $name="width";
    ${"{$part2}{$name}"}=100-3*$sidewidth-$middle/2;
  ?>
  <?=$name?>:<?=${"{$part2}{$name}"}?>%;
  <?php
    $name="height";
    ${"{$part2}{$name}"}=100;
  ?>
  <?=$name?>:<?=${"{$part2}{$name}"}?>%;
  <?php
    $name="top";
    ${"{$part2}{$name}"}=0;
  ?>
  <?=$name?>:<?=${"{$part2}{$name}"}?>%;
  background:<?=$glasscolor="none"?>;
  border:0.5px solid black;
}
<?php
  $part2="middle";
?>
.<?=$part?> .<?=$part2?>{
  position:relative;
  <?php
    $name="width";
    ${"{$part2}{$name}"}=$sidewidth+$middle;
  ?>
  <?=$name?>:<?=${"{$part2}{$name}"}?>%;
  <?php
    $name="height";
    ${"{$part2}{$name}"}=10;
  ?>
  <?=$name?>:<?=${"{$part2}{$name}"}?>%;
  <?php
    $name="top";
    ${"{$part2}{$name}"}=100/4-${"{$part2}height"}/2;
  ?>
  <?=$name?>:<?=${"{$part2}{$name}"}?>%;
  background:<?=$sidecolor?>;
}

.neck{
  position:relative;
  margin:0 auto;
  top:var(--neck-top);
  left:var(--neck-left);
  height:var(--neck-height);
  width:var(--neck-width);
  background:none;
}

.body{
  position:relative;
  top:var(--body-top);
  margin:0 auto;
  height:var(--body-height);
  width:var(--body-width);
  background:none;
}

.arm{
  position:relative;
  top:var(--arm-top);
  left:var(--arm-left);
  height:var(--arm-height);
  width:var(--arm-width);
  /* background:none; */
}
.arm.right{
  top:var(--armright-top);
  left:var(--armright-left);
}

.hand{
  position:relative;
  top:var(--hand-top);
  left:var(--hand-left);
  height:var(--hand-height);
  width:var(--hand-width);
  background:none;
}
.hand.right{
  top:var(--handright-top);
  left:var(--handright-left);
}

.leg{
  position:relative;
  top:var(--leg-top);
  left:var(--leg-left);
  height:var(--leg-height);
  width:var(--leg-width);
  background:none; 
}
.leg.right{
  top:var(--legright-top);
  left:var(--legright-left);
}

.foot{
  position:relative;
  top:var(--foot-top);
  left:var(--foot-left);
  height:var(--foot-height);
  width:var(--foot-width);
  background:none;
}
.foot.right{
  top:var(--footright-top);
  left:var(--footright-left);
}


#wear{
  position:absolute;
  left:20%;
  font-size:20px;
  width:100px;
  height:100px;
}
.index-intro ul{
  <?php 
    if ( 
      $_SESSION['cccv4clickcloth']==0 
      &
      $_SESSION['cccv4wear'.$cloth]==0 
    ) {
      ?>display:none;<?php 
    }
  ?>
  position:absolute;
  left:75%;
  list-style: none;
}

</style>