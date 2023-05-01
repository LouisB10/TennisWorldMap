<?php
include('../admin/connect.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page carte interactive">
    <title>TennisWorldMap - Carte</title>
    <link rel="icon" type="image/x-icon" href="../image/logo-remove.webp">
    <link rel="stylesheet" href="../css/contact.css?v=<?= date("H:i:s") ?>">
    <link rel="stylesheet" href="../css/navfooter.css?v=<?= date("H:i:s") ?>">
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
    <section>
        <div class="titre-page">
            <p>CONTACTEZ NOUS</p>
        </div>
        <div class="contact-main">
            <div class="contact-form">
                <form action="../pages/contact.php" method="POST">
                    <label for="nom">Nom</label>
                    <input id="nom" type="text" name="nom" maxlength="30" aria-label="Nom" aria-describedby="nom-description" pattern="^[a-zA-ZÀ-ÿ]+([\-'\s][a-zA-ZÀ-ÿ]+)*$">
                    
                    <label for="prenom">Prénom</label>
                    <input id="prenom" type="text" name="prenom" maxlength="30" aria-label="Prénom" aria-describedby="prénom-description" pattern="^[a-zA-ZÀ-ÿ]+([\-'\s][a-zA-ZÀ-ÿ]+)*$">
                    
                    <label for="email">Adresse e-mail<span>*</span></label>
                    <input id="email" type="text" name="email" maxlength="100" required aria-label="Adresse email" aria-describedby="email-description" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                    
                    <label for="message">Message<span>*</span></label>
                    <textarea id="message" name="message" maxlength="500" required aria-label="Message" aria-describedby="message-description"></textarea>
                    
                    <p><span>*</span>informations obligatoires</p>
                    <input type="submit" value="Envoyer" aria-label="Envoyer le formulaire">
                </form>
            </div>
            <div class="contact-map">

            </div>
            <div class="contact-info">

            </div>
        </div>




    </section>




    <?php include '../includes/footer.php'; ?>
</body>

</html>