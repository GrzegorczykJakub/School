<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rectangle</title>
  </head>
  <body>
    <h3>Rectangle</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj dlugosc boku a"> <!-- Dajemy type="text" a nie number, bo chcemy konwertowac przecinki na kropki-->
      <input type="text" name="sideB" placeholder="Podaj dlugosc boku b">
      <input type="submit" name="button" value="Oblicz">
  </form>
  <?php
  if(isset($_GET['button'])){
    if (!empty($_GET['sideA']) && !empty($_GET['sideB'])) {
      $sideA=str_replace(',', '.', $_GET['sideA']); //zmieniamy przecinki na kropki
      $sideB=str_replace(',', '.', $_GET['sideB']); //zmieniamy przecinki na kropki
      $area=$sideA*$sideB;
      $circuit=(2*$sideA)+(2*$sideB);
      echo <<< RESULT
      <br>
        Pole prostokatu wynosi: $area cm<sup>2</sup>
        Obwod prostokatu wynosi: $circuit cm
      RESULT;
    }
    else {
      echo "Wypelnij pole!";
    }
  }
   ?>
  </body>
</html>
