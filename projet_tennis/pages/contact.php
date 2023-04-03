<?php 
 include('../admin/connect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de contact">
    <title>TennisWorldMap - Contact</title>
    <link rel="icon" type="image/x-icon" href="../image/favicon.png">
    <link rel="stylesheet" href="../css/style.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/navfooter.css?v=<?=date("H:i:s")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7TWqD_afr06nyAXM5bEkLtiYOt-c9uOk&callback=initMap" async defer></script>
    <script>
      function initMap() {
        var geocoder = new google.maps.Geocoder();
        var address = "4657 Rue de la Jeune Parque, 34070 Montpellier";
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            var myLatLng = results[0].geometry.location;
    
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: myLatLng
            });
    
            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: address
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
</head>
<body>
<?php
  $isOnPage1 = false;
  $isOnPage2 =  false;
  $isOnPage3 = false; 
$isOnPage4 =  true;
 include '../includes/header.php'; ?>
    <section class="contact-section">
        <div class="page-titre">
            <p class="titre">CONTACTEZ NOUS</p>
        </div>
        <div class="trois-div">
          <div class="div-carte">
            <div id="map"></div>
            <p class="city">Montpellier</p>
            <p class="adress">4657 Rue de la Jeune Parque</p>
            <input type="button" value="Emplacement" class="btn_emplacement" 
            onclick="window.open('https://www.google.fr/maps/place/4657+Rue+de+la+Jeune+Parque,+34070+Montpellier', '_blank');">
          </div>
          <div class="div-formulaire">
            <form action="../pages/contact.php" method="POST">
              <label class="text">Nom</label>
              <input type="text" name="nom" class="textform"maxlength="50" aria-label="Nom">
              <label  class="text">Prénom</label>
              <input type="text" name="prenom" class="textform" maxlength="50" aria-label="Prénom">
              <label  class="text">Adresse e-mail<span class="star">*</span></label>
              <input type="text" name="email" class="textform" maxlength="100" required aria-label="Adresse email">
              <label  class="text">Message<span class="star">*</span></label>
              <textarea name="message" class="message" maxlength="500" required aria-label="Message"></textarea>
              <p class="etoile"><span class="star">*</span>informations obligatoires</p>
              <input type="submit" value="Envoyer" class="btn_envoyer">
            </form>
          </div>
          <div class="div-reseau">
            <div class="bigdiv">
              <img alt="" src="../image/iconmail.svg" class="iconmail" >
              <p class="reseau-titre">E-mail</p>
              <p class="reseau-info">louisbousquet13@gmail.com</p>
            </div>
            <div class="bigdiv">
              <img alt="" src="../image/iconphone.svg" class="iconphone">
              <p class="reseau-titre">Téléphone</p>
              <p class="reseau-info">06 09 92 26 30</p>
            </div>
            <div class="smalldiv">
              <p class="reseau-titre" id="j">Rejoignez-nous</p>
              <div class="img-reseau">
                <img alt="" src="../image/iconfb.svg" class="fb" onclick="window.open('https://www.facebook.com', '_blank');">
                <img alt="" src="../image/icontwitter.svg" class="twitter" onclick="window.open('https://www.twitter.com', '_blank');">
                <img alt="" src="../image/iconinsta.svg" class="insta" onclick="window.open('https://www.instagram.com', '_blank');">
              </div>
            </div>
          </div>
        </div>
        <div class="div-messagerie">
          <div class="boutons">
          <?php if(!isset($_SESSION['admin'])) {
              echo '<button class="btn-connexion">Connexion</button>';
          } ?>
          </div>
          <div class="modal">
            <div class="top-form">
              <img alt="" src="../image/traverser.png" class="close">
              <img alt="" src="../image/logo-remove.webp" class="logo-form">
            </div>
            <form action="../admin/connexion.php" method="post">
              <input type="hidden" name="form_connexion" value="1">
              <label for="form_id" class="text">Identifiant:</label>
              <input type="text" class="textform" name="form_id" maxlength="10" required>
              <label for="form_password" class="text" >Mot de passe:</label>
              <input type="password" class="textform" name="form_password"  maxlength="10" required >
              <input type="submit" class="btn-submit" value="Se connecter" >
            </form>
          </div>
        </div>
    </section>   
    <script src="../js/messagerie.js"></script>
    <?php include '../includes/footer.php'; ?>
   
</body>
</html>
<?php 
    $DB_NAME = "tennisworldmap";
    $DB_USER = "root";
    $DB_PASS = "";
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // Préparation de la requête SQL
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['message'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $date_envoi = date('Y-m-d H:i:s');
        $insert = "INSERT INTO messages(nom, prenom, email, message, date_envoi) VALUES (:nom, :prenom, :email, :message, :date_envoi)";
        $req = $bdd->prepare($insert);
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':email', $email);
        $req->bindParam(':message', $message);
        $req->bindParam(':date_envoi', $date_envoi);
        // Exécution de la requête SQL
        try {
            $req->execute();
            echo "Données envoyées avec succès !";
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
?>
