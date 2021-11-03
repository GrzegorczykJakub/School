function trojkat(){
    var a = parseInt(prompt("Podaj bok a"))
    var b = parseInt(prompt("Podaj bok b"))
    var c = parseInt(prompt("Podaj bok c"))
    if (a!=0 && b!=0 && c!=0){
    if (a+b>c && a+c>b && b+c>a){
        document.write("Trojkat istnieje")
    }
    else {
        document.write("Trojkat nie istnieje")
    }
}
else {
    document.write("Bok nie moze byc rowny 0!")
}
}
trojkat();