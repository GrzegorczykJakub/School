start: var input = parseInt(prompt("Podaj liczbe od 1 do 4:"));
var in1 = parseInt(prompt("Podaj pierwszą liczbę:"));
var in2 = parseInt(prompt("Podaj drugą liczbę:"));


switch(input){
    case 1:
        document.write("Dodawanie: ");
        var sum = in1 + in2;
        document.write(sum);
        continue start;
    case 2:
        document.write("Odejmowanie: ");
        var min = in1 - in2;
        document.write(min);
        continue start;
    case 3:
        document.write("Mnożenie: ");
        var mul = in1 * in2;
        document.write(mul);
        continue start;
    case 4:
        document.write("Dzielenie: ");
        var div = in1 / in2;
        document.write(div);
        continue start;
    default:
        alert("Błędna wartość. Podaj wartość od 1 do 4.");
        continue start;
        }
