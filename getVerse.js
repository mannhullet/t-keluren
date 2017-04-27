function getVerse() {
  text = document.getElementById("hentvers").innerHTML;

  obj = JSON.parse(text);

  var antallVers = obj.sjiraffenvers.length;

  /*TODO: legg inn "hukommelse" for hva som har blitt trekkt. Ikke trekk ny før
          alle har blitt vist minst 1 gang */
  var i = Math.floor((Math.random() * antallVers));

  document.getElementById("plassholder").innerHTML = "<span class=\"infoDescription\"> Trykk igjen for nytt vers! </span>";
  document.getElementById("visVers").innerHTML = obj.sjiraffenvers[i].tekst;

  var forfatter = obj.sjiraffenvers[i].forfatter;
  var kommentar = obj.sjiraffenvers[i].kommentar;
  var dato = obj.sjiraffenvers[i].dato;

  if (forfatter === undefined) {
    forfatter = "Ukjent";
  }
  if (kommentar === undefined) {
    kommentar = "";
  }
  if (dato === undefined) {
    dato = "Ukjent";
  }

  document.getElementById("visForfatter").innerHTML = "<span class=\"infoDescription\">Forfatter: </span>" + forfatter;
  document.getElementById("visKommentar").innerHTML = "<span class=\"infoDescription\">Kommentar: </span>" + kommentar;
  document.getElementById("visDato").innerHTML = "<span class=\"infoDescription\">Skrevet: </span>" + dato;


}

function removePlaceholder() {

}
