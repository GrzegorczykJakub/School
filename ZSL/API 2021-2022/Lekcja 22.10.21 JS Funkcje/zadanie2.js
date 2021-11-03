function wzrost(){
    var a = parseInt(prompt("Podaj mi swoj wzrost"))
    if (a<150){
        document.write("Kategoria: niski")
    }
    else if (a>180){
        document.write("Kategoria: wysoki")
    }
    else {
        document.write("Kategoria: średni")
    }
}
wzrost();