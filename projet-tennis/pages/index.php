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
    <link rel="stylesheet" href="../css/style.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/test.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/animation.css?v=<?=date("H:i:s")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <?php
   $isOnPage1 =  true; 
   $isOnPage2 = false;
   $isOnPage3 = false;
   $isOnPage4 = false;  
   include '../includes/header.php'; ?>
   <!-- <section>
   <div class="page-titre">
        <p class="titre">CARTE</p>
    </div>
        <div class="center">
                <img class="ball" src="../image/balle-tennis.png">
            <div class="shadow"></div>
        </div>    
   </section> -->
   <?php  include '../includes/footer.php'; ?>
</body>

</html>

