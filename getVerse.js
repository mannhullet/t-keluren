function getVerse(){
  text=document.getElementById("hentvers").innerHTML;

  obj=JSON.parse(text);

  var antallVers = obj.sjiraffenvers.length;

  var i = Math.floor((Math.random() * antallVers));

  document.getElementById("visVers").innerHTML= obj.sjiraffenvers[i]['tekst'];
  document.getElementById("visForfatter").innerHTML= "Forfatter: " + obj.sjiraffenvers[i]['forfatter'];
  document.getElementById("visKommentar").innerHTML= "Kommentar: " + obj.sjiraffenvers[i]['kommentar'];
  document.getElementById("visDato").innerHTML= "Skrevet: " + obj.sjiraffenvers[i]['dato'];

}
