<?php
 echo PHP_VERSION;

 echo 2**10, "<br>";

 $x=1000;
 $y=100;
 echo $x<=>$y;
 //równe
 $x=1; //jako int
 $y=1.0; //jako double

 if ($x==$y) {
     echo "<br>równe";
 }else{
     echo "<br>różne";
 }
/*
postinkrementacja $x++
preinktrementacja ++$x
postdekrementacja $x--
predekrementacja --$x
*/


$x=1
echo '<hr>' ,%x; //1
echo ++$x; //2
echo $x++; //2
echo ++$x; ;<hr>; //4


$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=x++
echo $x;  //4
echo "$y<br>" //3


 ?>
