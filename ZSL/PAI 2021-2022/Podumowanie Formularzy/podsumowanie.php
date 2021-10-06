<?php
echo PHP_VERSION; //wypisuje wersje PHP

//<<<PRZYPISYWANIE WARTOSCI ZMIENNYCH I OPERACJE NA NICH>>>//

echo "<br>text<br>";
$name = " Wojtus "; //przypisanie wartosci do zmiennej
$example = <<< E
  tekst
  tekst1
  tekst2
E;
echo "Imie: $name<br><br>";
echo nl2br($example), '<br><br><br><br>';

$calkowita1 = 5;
$binarna = 0b1010;  //0b oznacza liczbe binarna
$octagonalna = 011;  //0 z przodu oznacza liczbe osmkowa
$hexagonalny = 0x11; //0x oznacza liczbe szesnastkowa
echo $calkowita1.$binarna.$hexagonalny."<br>";   //kropka laczy stringi - nazywa sie to KONKATENACJA
echo gettype($calkowita1.$binarna.$hexagonalny);  //sprawdzenie typu zmiennej
echo '<br><br><br>';
echo strtolower($name); //lower case
echo '<br>';
echo strtoupper($name); //upper case
echo '<br>';
echo ucfirst($name);  //first letter upper case
echo '<br>';
echo lcfirst($name);  //first letter lower case
echo '<br>';

$x = 10;  //integer
$x = 10.5; //double

$falsz = false; //nie jest rowna 0, nie ma wartosci
$prawda = true; //jest rowna 1
echo "<hr>", ltrim($name); //usuwa spacje z lewej
echo "<hr>", rtrim($name); //usuwa spacje z prawej
echo "<hr>", trim($name),"<hr>"; //usuwa spacje z obu stron
echo strlen($name); //liczy dlugosc stringa
echo '<br>';
$email = "grzesiu.python@gmail.com";
echo strstr($email, "@"); //wypisuje wartosc od danego znaku
echo stristr($email, "@"); //wypisuje wartosc od danego znaku, nie patrzy na jego wielkosc
//<<<HEREDOC I NEWDOC>>>//  

//otwarcie etykiety HEREDOC.
echo <<< ETYKIETA
  <br><br><br>
  tekst
  <br>
  tekst
  <br>
  $binarna
ETYKIETA;
//zamkniecie etykiety HEREDOC

//przypisane etykiety do zmiennej
$text = <<<ETYKIETA
  <br>
  ETYKIETka JAKO ZMIENNA
  <br>
ETYKIETA;
echo $text;
//koniec

//Nowdoc to to co heredoc ale ignoruje zmienne
echo <<< 'ETYKIETA'
  <br>
  Nowdoc
  $binarna
ETYKIETA;
//koniec
echo '<br>';
echo 2**10; //potegowanie

//<<<POROWNYWANIE WARTOSCI>>>//

$z = 100;
$y = 10;
echo $x <=> $y; //jak x>y = 1; jak x<y=-1; jak x=y=0

$z = 100;
$y = 100.0;
if ($z==$y){  //sprawdzenie czy wartosci zmiennych sa takie same
  echo "rowne";
}else{
  echo "rozne";
}
echo '<br>';
echo '<br>';
echo '<br>';
if ($z===$y){  //sprawdzenie czy typ zmiennych jest taki sam
  echo "identyczne";
}else{
  echo "rozne";
}

//<<<INKREMENTACJE>>>//

/*
postinkrementacja $x++
preinktrementacja ++$x
postdekrementacja $x--
predekrementacja --$x
*/
echo '<hr><br>INKREMENTACJE<br>';
$x = 1;
echo $x;  //1
echo ++$x; //2
echo $x++; //2 (3 w pamieci)
echo ++$x; //4

$x=1;
echo '<br>';
echo '<br>';
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x;  //2 odwoluje sie do linii 98
$y=++$x;
echo $x;  //3 odwoluje sie do linii 98
echo $y;  //3
$y=$x++;
echo $x;  //4 odwoluje sie do linii 98
echo $y;  //3

//<<<DOLACZANIE PLIKOW>>>//
    // include '3_1.php';  //konczy po error
    // require '3_1.php'; //include działa podobnie ale nie kończy po error :)
    // include_once '3_1.php'; //jeżeli mamy już inne include, to nie doda tej linijki
    // require_once '3_1.php'; //jeżeli mamy już inne include, to nie doda tej linijki

// ob_clean(); //wyczyszcenie bufora
?>
