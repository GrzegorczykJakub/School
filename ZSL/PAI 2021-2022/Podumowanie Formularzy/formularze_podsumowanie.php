<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Podsumowanie z formularzy</title>
  </head>
  <body>
    <form method="get" action="skrypt_formularze_podsumowanie.php">
      <input type="text" name="name" placeholder="Give me name"><br>
      <input type="number" name="age" placeholder="Give me age" step="0.00001"><br>
      <input type="checkbox" name="over" value="over">Ponad 18?<br><hr>
      <input type="radio" name="choose" value="Pole" checked>Pole<br>
      <input type="radio" name="choose" value="Obwod">Obwod<br>
      <input type="submit" name="submit" value="Wyslij">
    </form>
  </body>
</html>
