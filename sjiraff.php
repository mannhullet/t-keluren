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
           <p id="visVers" class="mainInfo"></p>
           <p id="visForfatter" class="extraInfo"></p>
           <p id="visKommentar" class="extraInfo"></p>
           <p id="visDato" class="extraInfo"></p>
  </div>
  <div class = "contentright">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem deleniti accusantium quasi ab ad officia cupiditate sed aliquam nobis expedita velit dolorum perspiciatis pariatur nam vero et magnam soluta tempora!
Eveniet deserunt consequatur porro molestiae nulla optio quis totam libero iste nemo odit eum facilis sapiente. Harum similique cupiditate voluptas ea optio sunt molestias eius ab qui obcaecati nesciunt id?
Necessitatibus delectus sint vitae eos quasi optio esse dignissimos enim laborum ipsum harum perspiciatis eaque. Magnam fugiat delectus neque laboriosam in accusamus a veniam inventore asperiores consequatur nihil quae quo.
Eligendi quaerat nesciunt sint nobis qui? Temporibus maiores esse molestiae hic cum culpa sed recusandae dolore sequi modi. Quos illum debitis odio consequatur voluptatum error aliquam rem similique officia recusandae.
Ex suscipit earum reiciendis eaque dolorem inventore accusantium modi voluptatum saepe cum quam tempora autem corrupti illum deleniti iure rerum mollitia quo ducimus soluta ea! Illum aliquid consectetur vitae quod?
Minus rem tempora quo. Deleniti mollitia dignissimos laborum quis quos facilis dolore soluta error provident recusandae veniam minus consequatur blanditiis. Facere tempore praesentium soluta fugiat quia eligendi dolores ullam doloribus!
Aut nulla perferendis officiis accusamus ut aspernatur hic possimus amet blanditiis incidunt repudiandae ullam inventore ipsam recusandae nihil provident facilis totam quibusdam natus eligendi optio quia sapiente rerum quos illo?
Porro soluta nisi impedit voluptatem ex accusantium facilis amet quod blanditiis quia similique totam enim id ratione minus quo modi sequi nam dicta iste aliquid itaque velit accusamus quibusdam consequuntur.
Ab assumenda in ad nesciunt recusandae labore voluptates vero suscipit tenetur ullam sint beatae odio harum quo aperiam quas temporibus pariatur consectetur saepe eveniet minus voluptatem atque iusto similique repudiandae?
In enim odit repellat maxime harum eum expedita fuga vel eaque quaerat optio hic </p>
  </div>

</div>

</body>
</html>
