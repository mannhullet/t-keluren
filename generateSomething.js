function generateVerse() {
    var alle_vers = JSON.parse("sjiraffen.json");
    //$.getJSON("sjiraffen.json", ) //jQuery
    var vers = alle_vers["sjiraffenvers"][0]["tekst"];

    document.getElementById("visvers").innerHTML=vers;

}
