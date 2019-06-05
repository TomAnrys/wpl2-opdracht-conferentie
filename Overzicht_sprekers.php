<?php
require_once ('scripts/database.php');

$sqlSprekers = "SELECT naam, voornaam, afbeelding, bio FROM sprekers WHERE afbeelding IS NOT NULL";

if (!$resSprekers = $mysqli ->query($sqlSprekers)){
  echo "Oeps, een query foutje op DB voor opzoeken van spreker";
  print("<p>Error: " . $mysqli->error . "</p>");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Multi-Mania sprekers</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Arimo&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style/screen.css" />
  </head>
  <body class="container-fluid">
  <header class="row col-12">
        <div class="col-3">
          <a href="index.html"><img src="images/Logo wit.png" class="img-fluid" alt="logo" /></a>
        </div>
        <div class="col-6">
          <nav>
            <ul class="list-unstyled">
              <li><a href="index.html">Home</a></li>
              <li class="active"><a href="Overzicht_sprekers.php">Sprekers</a></li>
              <li><a href="Overzicht_zalen.php">Schedule</a></li>
              <li><a href="#">Sponsors</a></li>
              <li><a href="#">Tickets</a></li>
            </ul>
          </nav>
          
        </div>
        <div class="col-3">
          <form>
            <input type="text" placeholder="Zoeken" name="zoeken" id="zoeken" /><button class="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
      </header>

      <main class="col-12">
      <div class="col-12" id="sorteren">
          <ul class="list-unstyled">
              <li><a href="#">Nieuwste</a></li>
              <li><a href="#">Meeste likes</a></li>
              <li><a href="#">Meest populair</a></li>
            </ul>
            </div>
            <section class="row" id="bevat">

            <?php
            while ($row = $resSprekers->fetch_assoc()) {
              $tempAfbeelding = $row['afbeelding'];
              $tempAchternaam = $row['naam'];
              $tempVoornaam = $row['voornaam'];
              $tempBio = $row['bio'];

              print('<div class="col-3">');
              print('<div class="persoon">');
              print('<img src="images/images/speakers/x250/' . $tempAfbeelding . '"class="img-fluid">');
              print('<h2>'. $tempAchternaam .' '. $tempVoornaam .'</h2>');
              print('<div class=" row">');
              print(' <p class="col-10">' . $tempBio .'</p>');
              print('<p class="col-2">11 likes</p>');
              print('</div>');
              print('<div class="row col-12">');
              print('<div class="col-2">');
              print('<p><i class="far fa-heart"></i></p>');
              print('</div>');
              print('<div class="col-9 text-right">');
              print('<button>More Info</button>');
              print('</div>');
              print('</div>');
              print('</div>');
              print('</div>');
            }
          ?>

          </section>
      </main> 

    <footer class="row col-12">
        <div class="col-3">
          <h1>Openingsuren</h1>
        </div>
        <div class="col-3">
          <h1>Onze sprekers</h1>
        </div>
        <div class="col-3">
          <h1>Onze zalen</h1>
        </div>
        <div class="col-3">
          <h1>Contact</h1>
        </div>
        <hr class="col-12"></hr>
        <div class="col-3">
          Al de zalen voor deconferenties zijn open van 8 uur tot 12 uur en van 13 uur tot 17 uur
        </div>
        <div class="col-3">
          Onze sprekers zijn heel geboeid door informatica en beschikbaar voor vele vragen 
        </div>
        <div class="col-3">
          We hebben verschillende zalen van klein voor 80 personen tot grote zalen voor 400 personen
        </div>
        <div class="col-3">
          <p>e-mail: multi.mania@gmail.com</p>
          <p>telefoon: 056 523 512</p>
          <p>U mag ons ook contacteren via facebook, linkedin of twitter</p>
        </div>
        <div class="col-12 text-right">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/uas/login?_l=nl"><i class="fab fa-linkedin"></i></a>
        </div>
      </footer>
  </body>
</html>