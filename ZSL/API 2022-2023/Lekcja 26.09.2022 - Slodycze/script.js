document.getElementById("btn1").addEventListener("click", function(){
    var ksztalt = document.getElementById("ksztalt").value;
    document.getElementById("p1").innerHTML ="Twoje zamowienie to cukierek";
    if(ksztalt==1){
        document.getElementById("p1").innerHTML += " cytryna"
    }
    else if(ksztalt==2){
        document.getElementById("p1").innerHTML += " liść"
    }
    else if(ksztalt==3){
        document.getElementById("p1").innerHTML += " banan"
    }
    else{
        document.getElementById("p1").innerHTML += " inny"
    }
    var r = document.getElementById("R").value;
    var g = document.getElementById("G").value;
    var b = document.getElementById("B").value;
    document.getElementById("btn2").style.backgroundColor = "rgb("+r+","+g+","+b+")";
})