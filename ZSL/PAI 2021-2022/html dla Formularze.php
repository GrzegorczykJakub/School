<!<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularz</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form>
      <input type="text" name="name" placeholder="Imię"><br><br>
      <input type="text" name="surname" placeholder="Nazwisko"><br><br>
      <input type="submit" value="Zatwierdź dane">
    </form>
    <?php
    if (!empty($_GET["name"]) && !empty($_GET["surname"])) { //!empty musi być pusty formularz
      echo $_GET["name"];
    } else {
      echo "Wypełnij wszystkie pola";
    }
    ?>

  </body>
</html>
