document.getElementById("akapit").style.color="red";
document.getElementById("akapit").style.backgroundColor="lightgreen";
var a = document.getElementById("akapit");  //przypisanie elementu ze strony do zmiennej
a.style.backgroundColor="yellow";
//getElementById zczytuje wartosci ze strony o danym id

var users_color_submitted = document.getElementById("users_color");
var users_color_submit_button = document.getElementById("users_color_button");
users_color_submit_button.onclick = function()
{
    var users_color_submitted=document.getElementById("users_color")
    alert(users_color_submitted);
}   