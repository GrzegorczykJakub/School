x = parseInt(prompt("Give me first number"));
i = 0
if (x>=0){
while (i<x){
    document.write(i)
    i++
}
i=0
do {
    document.write(i)
    i++
}
while (i<x);
for (i=0; i<x; i++){
    document.write(i)
}
}
else{
    document.write("Podaj liczbe nieujemna")
}