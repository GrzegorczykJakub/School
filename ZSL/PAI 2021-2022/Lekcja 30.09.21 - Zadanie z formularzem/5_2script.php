<?php
echo "<pre>";
print_r ($_POST);
echo "</pre>";
if (!empty($_POST['name']) && !empty($_POST['geometricFigure'])) {
  switch ($_POST['geometricFigure']) {
    case 'kwadrat':
      header('location: 5_2square.php');
      break;
      case 'prostokat':
      header('location: 5_2rectangle.php');
      break;
  }
}else {
  ?>
  <script>
    history.back();
  </script>
<?php
}
 ?>
