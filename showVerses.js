function showVerses(){
  text=document.getElementById("hentvers").innerHTML;

  obj=JSON.parse(text);

  var antallVers = obj.sjiraffenvers.length;




  for (i = 0; i < antallVers; i++) {
    document.getElementById("visAlleVers").innerHTML += obj.sjiraffenvers[i]['tekst'];
    document.getElementById("visAlleVers").innerHTML += "<br />\r\n <br />\r\n";
  }



}

window.onload = showVerses;
