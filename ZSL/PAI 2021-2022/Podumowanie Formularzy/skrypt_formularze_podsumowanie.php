<?php

if (!empty($_GET['name'])&& !empty($_GET['age'])&& !empty($_GET['choose'])&& !empty($_GET['over'])){
  if($_GET['choose']=="Pole"){
    header('location:pole.php');
  }else{
    header('location:obwod.php');
  }
}else{
  ?>
  <script>
  history.back();
  </script>
  <?php
}

?>
