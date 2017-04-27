function getVerse() {
  text = document.getElementById("hentvers").innerHTML;

  obj = JSON.parse(text);

  var antallVers = obj.sjiraffenvers.length;

  /*TODO: legg inn "hukommelse" for hva som har blitt trekkt. Ikke trekk ny før
          alle har blitt vist minst 1 gang */
  var i = Math.floor((Math.random() * antallVers));

  /*TODO: Sjekk at verset faktisk har en property før den vises. Feks hvis
          det ikke er noen forfatter lagt inn, så skal det vises ingenting
          i stedet for "undefined". */
  document.getElementById("plassholder").innerHTML = "<span class=\"infoDescription\"> Trykk igjen for nytt vers! </span>";
  document.getElementById("visVers").innerHTML = obj.sjiraffenvers[i]['tekst'];
  document.getElementById("visForfatter").innerHTML = "<span class=\"infoDescription\">Forfatter: </span>" + obj.sjiraffenvers[i]['forfatter'];
  document.getElementById("visKommentar").innerHTML = "<span class=\"infoDescription\">Kommentar: </span>" + obj.sjiraffenvers[i]['kommentar'];
  document.getElementById("visDato").innerHTML = "<span class=\"infoDescription\">Skrevet: </span>" + obj.sjiraffenvers[i]['dato'];


}

function removePlaceholder() {

}
