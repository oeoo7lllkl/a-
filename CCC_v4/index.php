<head>
  <title>Change Cloth's Color</title>
  <?php
    include "CSS.php";
  ?>
</head>
<script>
  function reload(){
    k=event.keyCode;
    if(k==113|k==12610|k==93){
      location.reload();
    }
  }
</script>
<body onkeypress="reload()">
  <div class="wrap">
    <header></header>
  </div>
</body>
</html>