var a = 0;
var x = 1;
document.write("1")
while (a>=0){
    a = parseInt(prompt("podaj liczbe"))
    if (a>=0){
    x =x*a;
    document.write(" * " + a);
    }
    else{
        break;
    }
}document.write(" = "+x);
