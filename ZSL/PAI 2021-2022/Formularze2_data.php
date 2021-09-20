<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!empty($_GET["age"]) && !empty($_GET["name"])) {
      echo <<<
      <h3>Dane użytkownika pobrane z formulara</h3>
      Imię: $_GET[name]<br>
      Wiek: $_GET[age])
      
    }

    ?>
  </body>
</html>
