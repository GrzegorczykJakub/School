var first_number = prompt("Give me a number");
var second_number = prompt("Give me another number");
var result_adding = parseInt(first_number)+parseInt(second_number);
var result_subtraction = parseInt(first_number)-parseInt(second_number)
var result_multiplying = parseInt(first_number)*parseInt(second_number);
var result_dividing = parseInt(first_number)/parseInt(second_number)
document.write("Result of adding "+first_number+" and "+second_number+" is "+result_adding+"<br>")
document.write("Result of substraction "+first_number+" and "+second_number+" is "+result_subtraction+"<br>")
document.write("Result of multiplying "+first_number+" and "+second_number+" is "+result_multiplying+"<br>")
if (second_number=="0"){
    document.write("Can't divide by 0<br>")
}
else {
    document.write("Result of dividing "+first_number+" and "+second_number+" is "+result_dividing+"<br>")

}
//triangle
var first_side = parseINT(prompt("Give me first side"));
var second_side = parseINT(prompt("Give me second side"));
var third_side = parseINT(prompt("Give me third side"));
if (first_side+second_side>third_side){
    document.write("Triangle can be created")
}
else if (third_side+first_side>second_side){
    document.write("Triangle can be created")
}
else if (third_side+second_side>first_side){
    document.write("Triangle can be created")
}
else {
    document.write("Traingle can't be created")
}