<style>
  <?php
  //===================//===================//===================//===================
      for($i=0;$i<$times=250;$i++){

        $a=6;
        $a=25;

        $b=25;
        $b=$a;
        if($i<$none=$times/100* $a ){

          $headbackground="background:black;";
          
          $startwidth = 0;
          $onewidth = 95;

          $width=$startwidth+sqrt(1-pow(( $none-$i )/( $none ),2))*( -$startwidth + $onewidth );

          $background="background:black;";
          $facebackground="background:black;";
          
          $facewidth=0;
          $hairwidth=50;
          
          if ($_SESSION['cccv4wearhat'] == 1) {
            $hatcolor = $_SESSION['cccv4hatcolor'];
          } else {
            $hatcolor = "none";
          }
          $hatfacecolor=$hatcolor;
          $hathairwidth=0;

        }else if($i<$one=$times/100* $b ){

          $width=$onewidth-( $i - $none )/( $one - $none )*( $onewidth - 100 );
          $background="background:black;";
          $facebackground="background:black;";
          $facewidth=0;
          $hairwidth=50;
          
          if ($_SESSION['cccv4wearhat'] == 1) {
            $hatcolor = $_SESSION['cccv4hatcolor'];
          } else {
            $hatcolor = "none";
          }
          $hatfacecolor=$hatcolor;
          $hathairwidth=0;
          // !!

        }else if ( $i< $hat = $times/100* 39 ) {

          $width=$twowidth= $onewidth;
          
          $hatfacecolor="none";

          $hatstartwidth= 0;
          $hatendwidth=90;

          $facewidth=$hatstartwidth+sqrt(1-pow(($i - $hat)/($hat-$one),2))*($hatendwidth-$hatstartwidth);
          $hairwidth=(100-$facewidth)/2;
          
        }else if ($i<$hat = $times/100* 37 ) {

          $hatfacecolor="none";
          
        }else if ($i<$hair = $times/100* 34 ) {

          $width=$twowidth= 100 ;

          $hatcolor="none";
          $hatfacecolor='none';

          $hathairwidth=0;
          
        }else if ($i<$sidehair = $times/100* 50 ) {
          
          $headbackground=skin(100);
          $facebackground="background:red;";

          $startfacewidth= 0;
          $lastfacewidth= 87;

          $facewidth= $startfacewidth
          +sqrt(1-pow(($i-$hair -($sidehair-$hair))/($sidehair-$hair),2))*($lastfacewidth-$startfacewidth);
          $hairwidth=(100-$facewidth)/2;

          $hatcolor="none";

        }else if ($i<$two1 = $times/100* 56 ) {

          $hairwidth=(100-$lastfacewidth)/2;

        }else if ($i<$two1 = $times/100* 60 ) {

          $width=100;
          $hairwidth=0;

          $facewidth=87;

        }else if ($i<$sidehair2 = $times/100* 68 ) {

          $width=$twowidth ;
          $width=100;
          $hairwidth=0;

          if ($_SESSION['cccv4wearmask']==1) {
            $color=$_SESSION['cccv4maskcolor'];
          }
          else {
            $color="none";
          }
          $facebackground="background:".$color.";";

        }else if ($i<$chin = $times/100* 75 ) {

          $width=$chinwidth=$twowidth-13 ;
          $hairwidth=0; 
          $facewidth=100;

        }else {
          
          $hairwidth=0;
          $lastwidth=22;
          $width=$chinwidth - ($i - $chin)/($times - $chin)*( $chinwidth - $lastwidth );

        }
          ?>
          .head .line<?=$i?>{
            display:flex;
            <?=$headbackground?>
            position:relative;
            z-index:1;
            margin:0 auto;
            height:<?=100/$times+$tick=2?>%;
            top:<?=-($tick)*$i?>%;
            width:<?=$width?>%;
          }
          .head .line<?=$i?> .face{
            <?=$facebackground?>
            width:<?=$facewidth?>%;
            margin:0 auto;
            height:100%;
          }
          .head .line<?=$i?> .hair{
            <?=$background?>
            width:<?=$hairwidth?>%;
            height:100%;
          }

          .head .line<?=$i?> .hat{
            background:<?=$hatcolor?>;
            width:<?=100+$hatwidth=0?>%;
            left:-<?=$hatwidth/2?>%;
            position:relative;
            height:100%;
          }
          .head .line<?=$i?> .face .hat{
            background:<?=$hatfacecolor?>;
          }
          .head .line<?=$i?> .hair .hat{
            width:<?=100+$hathairwidth?>%;
            left:-<?=$hathairwidth/2?>%;
          }
          <?php
      }

  //===================//===================//===================//===================
      for($i=0;$i<$times;$i++){

        if($i<$one=$times/100* 20 ){

          $onewidth = 100;
          $width=$onewidth-( $i )/( $one )*( $onewidth - 100 );
          $left=0;

          $shirtsbackground='none';

        }else if ($i<$two = $times/100* 70 ) {

          $width=$twowidth= 100 ;
          $left=0;

        } else if ($i < $three = $times / 100 * 85 ) {

          $threewidth = 200;
          $width = $twowidth + ($i - $two)/($three - $two) * ( - $twowidth + $threewidth );
          $left=($i - $two)/( $three - $two )*(100-$threewidth)/2;

          $shirtsbackground = 'none';

        } else {

          $width = $twowidth + ($i - $two)/($three - $two) * ( - $twowidth + $threewidth );
          $left=($i - $two)/( $three - $two )*(100-$threewidth)/2;

          $shirtsbackground='red';

        }
          ?>
          .neck .line<?=$i?>{
            <?=skin(15)?>
            position:relative;
            margin:0 auto;
            left:<?=$left?>%;
            height:<?=100/$times+$tick?>%;
            top:<?=-($tick)*$i?>%;
            width:<?=$width?>%;
          }

          .neck .line<?=$i?> .shirts{
            background:<?=$shirtsbackground?>;
            height:<?=100?>%;
          }
          <?php
      }

  //===================//===================//===================//===================
      for($i=0;$i<$times;$i++){
        if($i<$shoulder=$times/100*25){
          $width=100;
        }else if ($i<$chest = $times/100* 50 ) {
          $width=$chestwidth= 95 ;
        }else if ($i<$stomach = $times/100* 67 ) {
          $stomachwidth = 75;
          $width=$chestwidth-($i-$chest)/($stomach - $chest)*( $chestwidth - $stomachwidth );
        }else {
          $heapwidth=2*$legwidth;
          $width=$stomachwidth+($i - $stomach)/($times - $stomach)*( 100/$bodywidth*$heapwidth - $stomachwidth );
        }
          ?>
          .body .line<?=$i?>{
            <?=skin(60)?>
            position:relative;
            margin:0 auto;
            height:<?=100/$times+$tick?>%;
            top:<?=-($tick)*$i?>%;
            width:<?=$width?>%;
          }
          <?php
      }

  //===================//===================//===================//===================
      for($i=0;$i<$times;$i++){

        if($i<$one=$times/100* 5 ){

          $onewidth = 60;
          $width=$onewidth-( $i )/( $one )*( $onewidth - 100 );
          $left=(100-$width)/2;
          $left2=($width-100)/2;

        }else if ($i<$two = $times/100* 55 ) {

          $left=0;
          $left2=0;
          $width=$twowidth= 100 ;

        }else {

          $left=0;
          $left2=0;
          $lastwidth=50;
          $width=$twowidth - ($i - $two)/($times - $two)*( $twowidth - $lastwidth );

        }
          ?>
          .arm .line<?=$i?>{
            <?=skin(25)?>
            position:relative;
            left:<?=$left?>%;
            margin:0 auto;
            height:<?=100/$times+$tick?>%;
            top:<?=-($tick)*$i?>%;
            width:<?=$width?>%;
          }
          .arm.right .line<?=$i?>{
            left:<?=$left2?>%;
          }
          <?php
      }

  //===================//===================//===================//===================
      for($i=0;$i<$times;$i++){

        if($i<$one=$times/100* 25 ){

          $onewidth = 50;$twowidth= 90 ;
          $width=$onewidth-( $i )/( $one )*( $onewidth - $twowidth );

        }else if ($i<$two = $times/100* 60 ) {

          $width=$twowidth;

        }else {

          $lastwidth=50;
          $width=$twowidth - ($i - $two)/($times - $two)*( $twowidth - $lastwidth );

        }
          ?>
          .hand .line<?=$i?>{
            <?=skin(30)?>
            position:relative;
            margin:0 auto;
            height:<?=100/$times+$tick?>%;
            top:<?=-($tick)*$i?>%;
            width:<?=$width?>%;
          }
          <?php
      }

  //===================//===================//===================//===================
      for($i=0;$i<$times;$i++){
        if($i< $sep =$times/100* 10 ){
          $width=100;
        }else if($i< $knee =$times/100* 55 ){
          $thirdwidth = 55;
          $width=100-(100-$thirdwidth)*($i-$sep)/($knee-$sep);
        }else if( $i < $sep = $times/100* 70 ){
          $width=$thirdwidth;
        }else if( $i < $knee = $times/100* 85 ){
          $fourthwidth = 30;
          $width=$thirdwidth-($thirdwidth-$fourthwidth)*($i-$sep)/($knee-$sep);
        }else{
          $width=$fourthwidth;
        }
          ?>
          .leg .line<?=$i?>{
            <?=skin(30)?>
            position:relative;
            margin:0 auto;
            height:<?=100/$times+$tick?>%;
            top:<?=-($tick)*$i?>%;
            width:<?=$width?>%;
          }
          <?php
      }

  //===================//===================//===================//===================
      for($i=0;$i<$times;$i++){

        if($i<$one=$times/100* 70 ){

          $onewidth = $fourthwidth;
          $twowidth = 85;
          $width=$onewidth-( $i )/( $one )*( $onewidth - $twowidth );

        }else if ($i<$two = $times/100* 85 ) {

          $width=$threewidth= $twowidth ;

        }else {

          $lastwidth=$threewidth-20;
          $width=$threewidth - ($i - $two)/($times - $two)*( $threewidth - $lastwidth );

        }
          ?>
          .foot .line<?=$i?>{
            <?=skin(70)?>
            position:relative;
            margin:0 auto;
            height:<?=100/$times+$tick?>%;
            top:<?=-($tick)*$i?>%;
            width:<?=$width?>%;
          }
          <?php
      }
      //===================//===================//===================//===================
  ?>
</style>