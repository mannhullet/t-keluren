function getVerse(){

var myObj={"sjiraffenvers":[
    {"tekst":"Jeg ønsker meg en himmelseng en himmelseng med speil i, så jeg kan ligge og speile meg og se hvor jeg er deilig.",
    "dato":"15.02.17",
    "kommentar":"Originalt vers, tatt fra Onlines hjemmeside"},
    {"tekst":"jeg møtte på en homofil han ville ta meg bakfra men jeg tok å lurte han jeg snudde meg og gapa",
    "dato":"15.02.17",
    "kommentar":"Originalt vers, tatt fra Onlines hjemmeside"},
    {"tekst":"et vers til ",
    "dato":"15.02.17",
    "kommentar":"Originalt vers, tatt fra Onlines hjemmeside"}
            ]};
var myJSON=JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON);

text=localStorage.getItem("testJSON");
obj=JSON.parse(text);


var j = Object.keys(obj["sjiraffenvers"]).length;
var i = Math.floor((Math.random()*j));

document.getElementById("visvers").innerHTML= obj["sjiraffenvers"][i]["tekst"];

}
