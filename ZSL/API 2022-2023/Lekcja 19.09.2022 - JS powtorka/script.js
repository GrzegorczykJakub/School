// zadanie 1
document.getElementById("akapit1").innerHTML +=" Jakub Grzegorczyk"
// zadanie 2
document.getElementById("akapit2").addEventListener('mouseover', function mouseover(){
    akapit2.style.color = 'red'
    akapit2.style.fontFamily = 'monospace'
})
document.getElementById("akapit2").addEventListener('mouseout', function mouseout(){
    akapit2.style.color = 'black'
    akapit2.style.fontFamily = ''
})
// zadanie 3
document.getElementById("btn1").addEventListener("click", function(){
    var size = document.getElementById("i1").value
    document.getElementById("akapit1").style.fontSize = size+"px"
})
// zadanie 4
document.getElementById("btn2").addEventListener("click", function(){
    var temp = document.getElementById("i2").value
    document.getElementById("div1").innerHTML += " "+temp;
    var kolor = document.getElementById("color").value;
    
})
// zadanie 5
document.getElementById("btn3").addEventListener("click", function(){
    var a3 = parseInt(document.getElementById("i3").value);
    var a4 = parseInt(document.getElementById("i4").value);
    var temp1 = a3;
    if (a3<a4){
        var temp1 = a3;
        do{
            document.getElementById("p2").innerHTML += " "+temp1;
            temp1=temp1+1;
        }while (temp1<=a4)
        document.getElementById("p2").innerHTML += ". Ciag jest rosnacy";
    }
    else if(a3>a4){
        var temp1 = a3;
        do{
            document.getElementById("p2").innerHTML += " "+temp1;
            temp1=temp1-1;
        }while (temp1>=a4)
        document.getElementById("p2").innerHTML += ". Ciag jest malejacy";
    }
    else {
        document.getElementById("p2").innerHTML += a3+". Ciag jest jednoelementowy";
    }
})
// zadanie 6
var czas= new Date();
document.getElementById("data").innerHTML += czas.getDate()+"."+czas.getMonth()+"."+czas.getFullYear();
// zadanie 7
// ! DODAC setInterval
function zegarek(){
    var czas = new Date();
    document.getElementById("timer").innerHTML = "Teraz jest: ";
    document.getElementById("timer").innerHTML += czas.getHours()+":"+czas.getMinutes()+"."+czas.getSeconds();
}

// Zad.8.
var arr1 = [];
document.getElementById("btn4").addEventListener("click", function(){
var new_text = document.getElementById("i5").value;
arr1.push(new_text);
arr1.sort();
document.getElementById("result").innerHTML = arr1;
});
setInterval(zegarek, 1000);  