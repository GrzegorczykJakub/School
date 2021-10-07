<!DOCTYPE html> 
<html lang="pl"> <!-- Kartkowka, Jakub Grzegorczyk, grupa 1. -->
<head>           <!-- Utworz strone index.php, w ktorej bedzie widoczny naglowek 2 stopnie o tresci "pole trojkata". 
Na stronie ma znajdowac sie formularz z danymi do wpisania(a oraz h). Sprqawdz po zatwierdzeniu formularza przyciskiem, 
czy wszystkie dane zostaly wypelnione. Jesli nie to wyswietl komunikat uzupelnij dane. Kiedy dane sa prawidlowe, 
oblicz pole trojkata. Wynik zaokraglij do 2 miejsc po przecinku -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze kartkowka</title>
</head>
<body>
    <h2>Pole trojkata</h2>
    <form method="GET" action="index2.php">
    <input type="number" name="bok" placeholder="Podaj bok a" step="0.01"><br>
    <input type="number" name="wysokosc" placeholder="Podaj wysokosc" step="0.01"><br>
    <input type="submit" name="submit" value="Wyslij dane">
    </form>
</body>
</html>
