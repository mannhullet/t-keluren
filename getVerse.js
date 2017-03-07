function getVerse(){


var myJSON=JSON.stringify(myObj);


localStorage.setItem("testJSON", myJSON);

text=localStorage.getItem("testJSON");
obj=JSON.parse(text);


var j = Object.keys(obj["sjiraffenvers"]).length;
var i = Math.floor((Math.random()*j));

document.getElementById("visvers").innerHTML= obj["sjiraffenvers"][i]["tekst"];

}
