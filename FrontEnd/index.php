<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page carte interactive">
    <title>TennisWorldMap</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="stylesheet" href="style.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="navfooter.css?v=<?=date("H:i:s")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <!-- Leaflet -->
    <link rel="stylesheet" href="leaflet/leaflet.css" />
</head>
<body>
  <header>
   <nav class="menu-navigation">
  <div class="menu-decoration-left">
    <img src="image/decovert.webp" alt="Décoration verte" class="decoration-verte deco-reverse" />
    <img src="image/decojaune.webp" alt="Décoration jaune" class="decoration-jaune" />
  </div>
  <div class="nav-links-left"> 
    <ul>
      <li>
        <a href="index.php" class="nav-link" id="page-actuelle">Carte</a>
      </li>
      <li>
        <a href="classement.php" class="nav-link">Classement <br>ATP</a>
      </li>
    </ul>
  </div>
  <div class="menu-logo">
    <a href="index.php" class="logoo"  aria-label="Carte">
      <img src="image/logo.webp" alt="Logo" class="logo" />
    </a>
  </div>
  <div class="nav-links-right">
    <ul>
      <li>
        <a href="calendrier.php" class="nav-link">Calendrier<br>des tournois</a>
      </li>
      <li>
        <a href="contact.php" class="nav-link">Contact</a>
      </li>
    </ul>
  </div>
  <div class="menu-decoration-right">
    <img src="image/decojaune.webp" alt="Décoration jaune"  class="decoration-jaune deco-reverse" />
    <img src="image/decovert.webp" alt="Décoration verte" class="decoration-verte" />
  </div>
  </nav>
  </header>
   <section>
   <div class="page-titre">
            <p class="titre">CARTE</p>
        </div>
   </section>
 <footer class="footer" id="lol">
  <div class="logo-bottom">
    <a href="index.php" aria-label="Revenir à la page d'accueil"><img alt="" src="image/logo.webp" class="logo-btm"></a>
  </div>
</footer>
<script src="leaflet/leaflet.js"></script>
<script src="carte-script.js"></script>
</body>
</html>