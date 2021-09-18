<!DOCTYPE html>
<html>
<head>

</head>
<body>
    Zawartość strony:<hr>
    <?php
    //include '3_1.php';
    require '3_1.php'; //include działa podobnie ale nie kończy po error :)
    include_once '3_1.php'; ///jeżeli mamy już inne include, to nie doda tej linijki
    require_once '3_1.php'; ///tak jak powyżej, tylko z require
    ?>
    <hr>Koniec pliku //test
</body>

</html>
