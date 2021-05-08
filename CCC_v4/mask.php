<?php
  include_once 'header.php';
  $cloth='mask';
  $_SESSION['cccv4cloth']=$cloth;
?>

    <section class="index-intro">
      <button id='wear'value='<?=$cloth?>'>
        <?php
          if ($_SESSION['cccv4wear'.$cloth] === 0){?>
            착용
          <?php }
          else {?>
            해제
          <?php }
        ?>
      </button>

      <?php
        include 'man.php';
      ?>

						<ul>
						<li onclick='formid.value="<?=$cloth?>color<?=$color="white";?>";form.submit();'><?=$color?></li>
						<li onclick='formid.value="<?=$cloth?>color<?=$color="red";?>";form.submit();'><?=$color?></li>
						<li onclick='formid.value="<?=$cloth?>color<?=$color="black";?>";form.submit();'><?=$color?></li>
						</ul>
						
						
						
    </section>

<?php
  include_once 'footer.php';
?>