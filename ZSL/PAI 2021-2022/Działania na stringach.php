<?php
 $text = <<<T
 zsl - Zespół
 Szkół
 Łączności
 T;
echo "$text<br>";
echo nl2br($text); //new line to break

$name="<br><hr>JaNusZ";
//zamiana na małe litery
echo strtolower($name);//string to lower 
//zamiana na duże
echo strtoupper($name);

$data="<br><hr>jaNuSZ koWAlskI";
echo ucfirst($data); //upper case first  
echo ucwords($data); 

$lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur iure nihil, reiciendis molestiae nesciunt veritatis officiis voluptate impedit quo facilis velit et fuga! Rem nobis nulla consequuntur id temporibus.";

echo "<hr>$lorem<hr>";
$col=wordwrap($lorem,40,"<br>");
echo $col;

//czyszczenie bufora
ob_clean();

//usuwanie białych znaków
$name="Anna";
$name1="  Anna  ";

echo "Długość \$name: ",strlen($name), '<br>'; //4
echo "Długość \$name1: ",strlen($name1), '<br>'; //8
echo "<br><hr>",strlen(ltrim($name1));//6 usuwa z lewej
echo "<br><hr>",strlen(rtrim($name1));//6 usuwa z prawej
echo "<br><hr>",strlen(trim($name1));//4  usuwa z obu stron

//przeszukiwanie ciągów znaków
echo strstr("janusz@gmail.com","@"); //gmail.com szuka konkretnego znaku
echo stristr("janusz@gmail.com","G"); //gmail.com ignoruje wielkość znaków

$name3="<br>Janusz";
echo substr($name3,2); //nusz
echo substr($name3,2,3); //nus
echo substr($name3,-2); //sz
echo substr($name3,-2,1); //s
echo substr(strstr("janusz@gmail.com"));
?>
