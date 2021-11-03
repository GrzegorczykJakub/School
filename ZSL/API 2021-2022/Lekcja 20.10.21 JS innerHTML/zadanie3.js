var a = parseInt(prompt("Podaj liczbe a"));
var b = parseInt(prompt("Podaj liczbe b"));
var c = parseInt(prompt("Podaj liczbe c"));
if (c==0){
    if (a==0){
    document.write("a nie moze byc rowne 0")
    }
    else{
    var b2 = b*(-1);
    var wynik = b2/a;
    document.write("Rownanie "+a + "x + "+b+" = 0")
    document.write("<br>x = "+wynik)
    }
}
else{
    var delta = c*c - 4*c*b;
    var delta_pierwiastek = math.pow(delta, 2);
    var x1 = (-a + delta_pierwiastek)/(2*c);
    var x2 = (-a - delta_pierwiastek)/(2*c);
    document.write("x1 = "+x1);
    document.write("<br>x2 = "+x2);
}   