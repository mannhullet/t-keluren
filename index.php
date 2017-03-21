<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="blå web nettside mannhullet marin tåkeluren teknikk php javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="takeluren.css" rel="stylesheet" type="text/css">
    <script src="getVerse.js" type="text/javascript"> </script>
    <script src ="showVerses.js" type="text/javascript"></script>
    <title>Sjiraffenvers</title>
</head>
<!-- Kommentar -->
<body>
    <div id="hentvers" style="display: none;">
      <?php
        print(file_get_contents('sjiraff.js'));
      ?>
    </div>



<div class = "content">
  <div class = "contentleft">
      <h3>Skriv inn sjiraffenvers her:</h3>
      <form method="post" action="saveVerse.php">
        <textarea class="inputbox" id="formText" name="formText" rows="4" cols="50"
          placeholder="Jeg kjøpte meg en himmelseng..."></textarea>
        <textarea class="inputbox" id="formAuthor" name="formAuthor" rows="1" cols="50"
          placeholder="Navn..."></textarea>
        <textarea class="inputbox" id="formComment" name="formComment" rows="1" cols="50"
          placeholder="Annen info..."></textarea>
        <div = "submitButton">
        <input type="submit" value="Send inn!" class ="knapp">
       </div>
      </form>
      <div class = "scrollbarWindow">
        <p id="visAlleVers"></p>

      </div>
  </div>

  <div class = "contentmid">
        <button type = "button" onclick="getVerse(); " class = "takelurmunn">  <img
          src="img/tak4.jpg" style="width:450px;" ></button>
           <p id="visVers" class="mainInfo"></p>
           <p id="visForfatter" class="extraInfo"></p>
           <p id="visKommentar" class="extraInfo"></p>
           <p id="visDato" class="extraInfo"></p>
  </div>



</div>

</body>
</html>
