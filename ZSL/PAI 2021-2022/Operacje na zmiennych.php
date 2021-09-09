<?php
echo "test<br><br>";
echo 2**10, '<br>';


//porównywanie (1 lub -1 w outpucie)
$x=1000;
$y=100;
echo $x<=>$y;


//równe lub identyczne
$x=1;   //jako integer
$y=1.0; //jako double
if($x==$y)
{
    echo "<br>Equal";

}
else
{
    echo "<br>Not Equal";
}


//równe lub identyczne + typ danych
$x=1;   //jako integer działa
$y=1.0; //jako double działa
if($x===$y)
{
    echo "<br>Equal";

}
else
{
    echo "<br>Not Equal"; //wynik to "Not Equal" bo różne typy danych (int and double)
}

?>