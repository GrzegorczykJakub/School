// var data = new Date(); //pobranie czasu systemowego
// document.write(data);   
var dzien = new Date();
var d1 = document.getElementById("d1").innerHTML="Dzisiaj jest: <br> Dzien: "+ dzien.getDate()+"<br>Miesiac: "+dzien.getMonth()+"<br>Rok: "+ dzien.getUTCFullYear();

//zadanie 2

const monthNames = ["Styczen", "Luty", "Marzec", "Kwiecien", "Maj", "Czerwiec",
  "Lipiec", "Sierpien", "Wrzesien", "Pazdziernik", "Listopad", "Grudzien"];
const x1 = new Date();
var d2 = document.getElementById("d2").innerHTML= dzien.getDate()+" "+monthNames[x1.getMonth()]+" "+dzien.getFullYear()+" roku<br><br>";

//zadanie 3
//cos tutaj nie dziala, jakis maly blad, ktorego nie moge zlokalizowac!
const dayNames = ["Niedziela", "Poniedzialek", "Wtorek", "Sroda", "Czwartek", "Piatek", "Sobota"];
var d3 = document.getElementById("d3").innerHTML = dzien.getDate()+ " "+ monthNames[x1.getMonth()]+dzien.getFullYear()+ "r., "+dayNames[x1.getDay()]+getHours()+":"+getMinutes()+":"+getSeconds();