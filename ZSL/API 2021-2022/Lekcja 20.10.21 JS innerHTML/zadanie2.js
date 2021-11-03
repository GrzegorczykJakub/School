var a = parseInt(prompt("Podaj liczbe a"));
var b = parseInt(prompt("Podaj liczbe b"));
if (a==0){
    document.write("a nie moze byc rowne 0")
}
else{
    var b2 = b*(-1);
    var wynik = b2/a;
    document.write("Rownanie "+a + "x + "+b+" = 0")
    document.write("<br>x = "+wynik)
}