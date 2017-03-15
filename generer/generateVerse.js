function generateVerse() {
    var alle_vers = JSON.parse("sjiraff.json");
    //$.getJSON("sjiraff.json", ) //jQuery
    var vers = alle_vers["sjiraffenvers"][0]["tekst"];

    document.getElementById("visVers").innerHTML=vers;

}
