alert("Imie");
/* let zmienna_a = 3;  //lepiej tej uzywac
var zmienna_b = 1;  //tej nie uzywamy raczej
const zmienna_stala = "Tekst";  //nie mozna zmieniac wartosci stalej
const zmienna_stala_num = 3;    //nie mozna zmieniac wartosci stalej
*/ 
confirm ("Confirm that you're over 18 years old");
let users_country = prompt ("What country do you live in?", "America"); //przypisanie wyniu prompta do zmiennej
alert(users_country);   //sprawdzenie czy zmienna zostala przypisana
document.write("I live in ", users_country);
document.write("\tI live in " + users_country); //mozna dodac plusem (lepszy sposob)
var first_number = prompt("Give me a number");
var second_number = prompt("Give me another number");
var result = parseInt(first_number)+parseInt(second_number);    //zmiana stringa na inta
document.write(result); 