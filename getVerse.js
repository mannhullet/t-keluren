function getVerse(){

// Gjør om fra objekt til JSON string, og tilbake til objekt igjen. Unødvendig
/*
var myJSON=JSON.stringify(myObj);


localStorage.setItem("testJSON", myJSON);

text=localStorage.getItem("testJSON");
obj=JSON.parse(text);
*/

var antallVers = Object.keys(myObj["sjiraffenvers"]).length;
var i = Math.floor((Math.random() * antallVers));

document.getElementById("visvers").innerHTML= myObj["sjiraffenvers"][i]["tekst"];

}
