function getSomething(){

var myObj={"objekter":[
    {"tekst":"element1","element2","element3"},
    {"tekst":"element4","element5":"element6",},
    {"tekst":"element7","element8":"element9",}
                      ]};

var myJSON=JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON);

text=localStorage.getItem("testJSON");
obj=JSON.parse(text);

var j = Object.keys(obj["objekter"]).length;
var i = Math.floor((Math.random()*j));

document.getElementById("visGenerert").innerHTML= obj["objekter"][i]["tekst"];
}
