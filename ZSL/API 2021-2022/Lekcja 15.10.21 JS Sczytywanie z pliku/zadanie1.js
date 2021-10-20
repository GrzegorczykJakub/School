var a = document.getElementById("akapit");
a.style.color="lightgreen";
a.style.backgroundColor="lightyellow";
a.style.fontSize="20px";
a.style.fontStyle="bold";
a.style.width="100%";
a.style.height="45px";
var acolor = document.getElementById("users_color")
acolor.onclick = function() {
    a.style.color=users_color.value;    
}

