<?php 
 include('../admin/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie</title>
    <link rel="icon" type="image/x-icon" href="../image/favicon.png">
    <link rel="stylesheet" href=../css/style.css ?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/navfooter.css?v=<?=date("H:i:s")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php include '../includes/header.php'; ?>
  <section class="messagerie-section">
    <div class="page-titre">
      <p class="titre">MESSAGERIE</p>
    </div>
    <div>
      <form action="../admin/deconnect.php">
      <button class="btn-connexion">Se déconnecter</button>
      </form>
    </div>
  </section>
  <?php include '../includes/footer.php'; ?>
</body>
</html>


