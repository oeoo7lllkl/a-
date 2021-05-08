<style>
  .man{
    width:<?=130/100*$percent=100?>px;
    height:<?=500/100*$percent?>px;
  }
  :root{
    <?php
      $headheight=14;           $headwidth=35;
    ?>
    --head-height:<?=$headheight;?>%;   --head-width:<?=$headwidth;?>%;

    <?php
      $neckheight=6;            $neckwidth=$headwidth-12;
        $necktop=-3;     $neckleft=0;
    ?>
    --neck-height:<?=$neckheight-$necktop;?>%;   --neck-width:<?=$neckwidth;?>%;
      --neck-top:<?=$necktop;?>%;            --neck-left:<?=$neckleft;?>%;

    <?php
      $bodyheight=32;             $bodywidth=67;
      $bodytop=$necktop;
    ?>
    --body-height:<?=$bodyheight;?>%;      --body-width:<?=$bodywidth;?>%;
      --body-top:<?=$bodytop;?>%;

    <?php
      $armheight=$bodyheight+3;   $armwidth=(100-$bodywidth)/2;
      $armtop=-$bodyheight+$necktop;       $armleft=0;
      $armrighttop=-$bodyheight-$armheight+$necktop;  $armrightleft=$bodywidth+$armwidth;
    ?>
    --arm-height:<?=$armheight;?>%;      --arm-width:<?=$armwidth;?>%;
      --arm-top:<?=$armtop;?>%;            --arm-left:<?=$armleft;?>%;
      --armright-top:<?=$armrighttop;?>%;  --armright-left:<?=$armrightleft;?>%;

    <?php
      $handheight=9;   $handwidth=(100-$bodywidth)/2;
      $handtop=-$bodyheight-$armheight+$necktop;       $handleft=0;
      $handrighttop=-$armheight-$bodyheight-$handheight+$necktop;  $handrightleft=$bodywidth+$handwidth;
    ?>
    --hand-height:<?=$handheight;?>%;      --hand-width:<?=$handwidth;?>%;
      --hand-top:<?=$handtop;?>%;            --hand-left:<?=$handleft;?>%;
      --handright-top:<?=$handrighttop;?>%;  --handright-left:<?=$handrightleft;?>%;
      
    <?php
      $legheight=$bodyheight+12;   $legwidth=32;
      $legtop=-2*$armheight-2*$handheight+$necktop;       $legleft=50-$legwidth;
      $legrighttop=-2*$handheight-2*$armheight-$legheight+$necktop;  $legrightleft=50;
    ?>
    --leg-height:<?=$legheight;?>%;      --leg-width:<?=$legwidth;?>%;
      --leg-top:<?=$legtop;?>%;            --leg-left:<?=$legleft;?>%;
      --legright-top:<?=$legrighttop;?>%;  --legright-left:<?=$legrightleft;?>%;
    
    <?php
      $footheight=100-$headheight-$neckheight-$bodyheight-$legheight;   $footwidth=22;
      $foottop=-$legheight-2*$armheight-2*$handheight+$necktop;       $footleft=50-$legwidth/2-$footwidth/2;
      $footrighttop=-$legheight-2*$handheight-2*$armheight-$footheight+$necktop;  $footrightleft=50+$legwidth/2-$footwidth/2;
    ?>
    --foot-height:<?=$footheight;?>%;      --foot-width:<?=$footwidth;?>%;
      --foot-top:<?=$foottop;?>%;            --foot-left:<?=$footleft;?>%;
      --footright-top:<?=$footrighttop;?>%;  --footright-left:<?=$footrightleft;?>%;
    

    --head-height:<?=$headheight;?>%;
  }
</style>