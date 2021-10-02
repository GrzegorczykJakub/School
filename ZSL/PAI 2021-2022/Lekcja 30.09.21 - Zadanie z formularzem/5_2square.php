<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj dlugosc boku a"> <!-- Dajemy type="text" a nie number, bo chcemy konwertowac przecinki na kropki-->
      <input type="submit" name="button" value="Oblicz">
  </form>
  <?php
  if(isset($_GET['button'])){
    if (!empty($_GET['sideA'])) {
      $sideA=str_replace(',', '.', $_GET['sideA']); //zmieniamy przecinki na kropki
      $area=$sideA**2;
      $circuit=4*$sideA;
      echo <<< RESULT
      <br>
        Pole kwadratu wynosi: $area cm<sup>2</sup>
        Obwod kwadratu wynosi: $circuit cm
      RESULT;
    }
    else {
      echo "Wypelnij pole!";
    }
  }
   ?>
  </body>
</html>
