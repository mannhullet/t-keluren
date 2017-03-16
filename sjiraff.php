<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="blå web nettside mannhullet marin tåkeluren teknikk php javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="takeluren.css" rel="stylesheet" type="text/css">
    <script src="getVerse.js" type="text/javascript"></script>
    <title>Sjiraffenvers</title>
</head>
<!-- Kommentar -->
<body>
    <div id="hentvers" style="display: none;">
      <?php
        print(file_get_contents('sjiraff.js'));
      ?>
    </div>

    <div class="navigasjonsbar">
        <div class="navigasjonsbar-content">
            <ul>
				<li> <a href="sjiraff.php">Sjiraffenvers</a></li>
				<li> <div class="dropdown">
					<button class="dropdown-button">Om oss</button>
					</div>
				</li>
				<li> <div class="dropdown">
					<button class="dropdown-button">Språk</button>
					</div>
				</li>
				<li> <div class="dropdown">
					<button class="dropdown-button">Prosjekter</button>
					</div>
				</li>
				<li> <div class="dropdown">
					<button class="dropdown-button">Kontakt oss</button>
					</div>
				</li>

            </ul>
        </div>
    </div>

<div class = "content">
  <div class = "contentleft">
      <h3>Skriv inn sjiraffenvers her:</h3>
      <form method="post" action="saveVerse.php">
        <textarea class="inputbox" id="formText" name="formText" rows="4" cols="50"
          placeholder="Jeg kjøpte meg en himmelseng..."></textarea>
        <textarea class="inputbox" id="formAuthor" name="formAuthor" rows="1" cols="50"
          placeholder="Navn..."></textarea>
        <textarea class="inputbox" id="formComment" name="formComment" rows="2" cols="50"
          placeholder="Annen info..."></textarea>
        <div = "submitButton">
        <input type="submit" value="Lagre">
       </div>
      </form>

  </div>

  <div class = "contentmid">
        <button type = "button" onclick="getVerse();">  <img class = "takelurmunn"
          src="img/tak4.jpg" ></button>
           <p id="visVers"></p>
           <p id="visForfatter"></p>
           <p id="visKommentar"></p>
           <p id="visDato"></p>
  </div>

</div>


</body>
</html>
