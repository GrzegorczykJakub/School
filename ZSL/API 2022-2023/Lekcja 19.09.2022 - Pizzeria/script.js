document.getElementById("btn1").addEventListener("click", function(){
    var checkbox = document.getElementById("check1");
    var input = document.getElementById("inp1").value;
    if (checkbox.checked){
        document.getElementById("dowoz").innerHTML = "Dowieziemy Twoja pizzę za darmo";
    }
    else if (input == 0){
        alert("Nie mozna podac 0!")
    }
    else{
        var cena = 2*input;
        document.getElementById("dowoz").innerHTML = "Dowóz będzie Cię kosztował "+cena;
    }
})