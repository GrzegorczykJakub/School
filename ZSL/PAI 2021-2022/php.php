<?php
echo "Text<br><t>";
$name="Krystyna";
echo "Imię: $name<br>";

//typy danych!!


//całkowite
$całkowita=10;
$bin=0b1010; //10
$oct=011; //9
$hex=0x11; //17


//zmiennoprzecinkowe
$x=10.5;
echo gettype($x);


//logiczna
$prawda=true;
$fałsz=false;


//składnia heredoc
//służy do wyświetlenia danych
echo <<< E
<hr> <br>Imię: $name<br><br>
ZSŁ
<hr>
E;


//2 wersja heredoca (nie działa mi)
$text = <<< P
<hr> <br>Imię: $name<br><br>
ZSŁ
<hr>
P;


//nowdoc
echo <<< 'E'
<hr>Imię: $name<br>
ZSŁ
<br><br><hr>
E;


//konkatenacja
echo "text1"."text2";
//dzięki backslashowi traktuje zmienną jako stringa
echo "<br><br>Imię: \$name"; 
?>
