<!DOCTYPE html>
<html lang="pl">    <!-- Kartkowka, Jakub Grzegorczyk, grupa 1. -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze kartkowka</title>
</head>
<body>
    <?php 
    if (!empty($_GET['bok'])&& !empty($_GET['wysokosc'])){
        $a=$_GET['bok'];
        $h=$_GET['wysokosc'];
        $pole=$a*$h/2;
        echo "Pole trojkata wynosi ".$pole." cm";
    }
    else{
        ?>
        <p>Wypelnij wszystkie dane</p> 
        <?php 
    }   
    ?>
</body>
</html>