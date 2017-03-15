<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="blå web nettside mannhullet marin tåkeluren teknikk php javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="takeluren.css" rel="stylesheet" type="text/css">
    <link href="sjiraffen.css" rel="stylesheet" type="text/css">
    <script src="sjiraffen.js" type="text/javascript"></script>
    <script src="getVerse.js" type="text/javascript"></script>
    <title>Sjiraffenvers</title>
</head>
<!-- Kommentar -->
<body>
    <div id="vers" style="display: none;">
      <?php
        print(file_get_contents('sjiraffen.js'));
      ?>
    </div>

    <div class="navigasjonsbar">
        <div class="navigasjonsbar-content">
            <ul>
				<li> <a href="sjiraff.html">Sjiraffenvers</a></li>
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
		</div>
	</div>
<div class = "content">
  <div class = "contentleft">
<h3>Skriv inn sjiraffenvers her:</h3>
<form method="post" action="lagre.php">
  <textarea class="inputbox" id="myText" name="myText" rows="4" cols="50"
    placeholder="Jeg kjøpte meg en himmelseng...">
  </textarea>

  <input type="submit" value="Lagre">
</form>

<!-- class="knappen" onclick="myFunction()"><svg fill="#FFFFFF" height="24" viewBox="0 0 24 15" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
</svg>Send inn</button>-->

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("myText").value;

</script>

  </div>
      <div class = "contentmid">
        <button type = "button" onclick="getVerse();">  <img class = "takelurmunn"
          src="img/tak4.jpg" ></button>
           <p id="visvers">Her er det tomt</p>




          </div>
    <div class = "contentrigth">
  </div>
</div>





</body>
</html>
