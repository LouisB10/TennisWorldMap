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
    <link rel="icon" type="image/x-icon" href="../image/logo-remove.webp">
    <link rel="stylesheet" href="../css/style.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/navfooter.css?v=<?=date("H:i:s")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php
  $isOnPage1 = false;
  $isOnPage2 = false;
  $isOnPage3 = false; 
  $isOnPage4 = true;
 include '../includes/header.php'; ?>
    <section class="contact-section">
        <div class="page-titre">
            <p class="titre">CONTACTEZ NOUS</p>
        </div>
        <div class="trois-div">
          <div class="div-carte">
            <div id="map"> <img src="../image/carte-emplacement.PNG" alt=""></div>
            <p>Montpellier</p>
            <p>4657 Rue de la Jeune Parque</p>
            <input type="button" value="Emplacement" 
            onclick="window.open('https://www.google.fr/maps/place/4657+Rue+de+la+Jeune+Parque,+34070+Montpellier', '_blank');">
          </div>
          <div class="div-formulaire">
            <form action="../pages/contact.php" method="POST">
              <label for="nom">Nom</label>
              <input id="nom" type="text" name="nom"  maxlength="30" aria-label="Nom" aria-describedby="nom-description" pattern="^[a-zA-ZÀ-ÿ]+([\-'\s][a-zA-ZÀ-ÿ]+)*$" >
              <label for="prenom">Prénom</label>
              <input id="prenom" type="text" name="prenom" maxlength="30" aria-label="Prénom" aria-describedby="prénom-description" pattern="^[a-zA-ZÀ-ÿ]+([\-'\s][a-zA-ZÀ-ÿ]+)*$">
              <label for="email">Adresse e-mail<span>*</span></label>
              <input id="email" type="text" name="email"  maxlength="100" required aria-label="Adresse email" aria-describedby="email-description" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
              <label for="message">Message<span >*</span></label>
              <textarea id="message" name="message"  maxlength="500" required aria-label="Message" aria-describedby="message-description"></textarea>
              <p><span>*</span>informations obligatoires</p>
              <input type="submit" value="Envoyer" aria-label="Envoyer le formulaire">
            </form>
          </div>
          <div class="div-contact">
            <div class="div-mail-phone">
              <img alt="" src="../image/icon-mail.svg">
              <p>E-mail</p>
              <p>tennisworldmap@gmail.com</p> 
            </div>
            <div class="div-mail-phone">
              <img alt="" src="../image/icon-phone.svg">
              <p>Téléphone</p>
              <p>06 06 07 06 06</p>
            </div>
            <div class="div-media">
              <p>Rejoignez-moi</p>
              <div class="img-reseau">
                <img alt="" src="../image/icon-githubblack.png" onclick="window.open('https://www.github.com', '_blank');">
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
        $type_message = 1; /**message recu = 1, message archivé = 2 , message supprimé = 3 */
        
        $insert = "INSERT INTO messages(nom, prenom, email, message, date_envoi, type_message) VALUES (:nom, :prenom, :email, :message, :date_envoi, :type_message)";
        $req = $bdd->prepare($insert);
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':email', $email);
        $req->bindParam(':message', $message);
        $req->bindParam(':date_envoi', $date_envoi);
        $req->bindParam(':type_message', $type_message);
        // Exécution de la requête SQL
        try {
            $req->execute();
            echo "Données envoyées avec succès !";
        } catch(PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
?>
