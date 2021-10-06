var number = parseInt(prompt("Give me a number between 1-4"));
var a = parseInt(prompt("Give me a number"));
var b = parseInt(prompt("Give me a number"));

switch (number) {
    case 1:
        document.write("Dodawanie<br>")
        document.write(a+b);
        break;
    case 2:
        document.write("Odejmowanie<br>")
        document.write(a-b);
        break;
    case 3:
        document.write("Mnozenie<br>")
        document.write(a*b);
        break;
    case 4:
        document.write("Dzielenie<br>")
        document.write(a/b);
        break;
    default:
        document.write("Error")
}