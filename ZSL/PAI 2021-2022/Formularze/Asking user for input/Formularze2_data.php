<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!empty($_GET["age"]) && !empty($_GET["name"])) {
      $name = ucfirst(strtolower($_GET["name"]));
      echo <<< L
      <h3>Dane użytkownika pobrane z formulara</h3>
      Imię: $name[name]<br>
      Wiek: $_GET[age])
L;
    }
    ?>
  </body>
</html>
