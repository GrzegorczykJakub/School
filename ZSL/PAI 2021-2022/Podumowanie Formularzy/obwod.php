<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="GET">
      <input type="number" name="promien" placeholder="Give me promien" step="0.00000001"><br>
      <input type="submit" name="submit">
    </form>
  <?php
  $promien = $_GET['promien'];
  $obwod = 3.14*2*$promien;
  echo <<< L
  Obwod wynosi: $obwod
L;
  ?>
  </body>
</html>
