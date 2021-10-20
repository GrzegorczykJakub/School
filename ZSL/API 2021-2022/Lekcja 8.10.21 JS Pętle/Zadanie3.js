var x = 20;
while (x>=20 && x<=40){
    if (x%5==0) {
        document.write("<span style='color:green', font-style='bold'>"+x+"</span>, ")
        x++;
    }
    else{
document.write(x+ ", ");
x++;
    }
}