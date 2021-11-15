function liczba() {
    document.getElementById("result").innerHTML="";
    let password=prompt("Podaj hasło");
    if (password!="liczba") {
        alert("Nieprawidłowe hasło");
    }
    else if (password == "liczba") {
        location.href="main_liczba.html";
    }
}