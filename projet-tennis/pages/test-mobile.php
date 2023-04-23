
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page carte interactive">
    <title>test</title>
    <link rel="icon" type="image/x-icon" href="../image/logo-remove.webp">
    <link rel="stylesheet" href="../css/test.css?v=<?=date("H:i:s")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header>
   <nav class="nav-bar">
    <div class="decoration-left">
        <img src="../image/decovert.png"/>
        <!-- <img src="../image/decojaune.png"/> -->
        <img src="../image/decovert-top.png" alt="" class="nav-bar-deco">
    </div>
    <div class="div-center">
        <a href="../pages/index.php" class="logo"><img src="../image/logo.webp"></a>
        <div class="hamburger-btn">
            <button type="button" class="script-hamburger" onclick="displayMenu()">
                <div class="icon-hamburger"><span></span><span></span><span></span></div>
            </button>
        </div>
    </div>
    <div class="decoration-right">
        <img src="../image/decojaune.png"/>
        <!-- <img src="../image/decovert.png"/> -->
        <img src="../image/decojaune-top.png" alt="" class="nav-bar-deco"><!-- 106px donc environ 40px et decojaune-bottom 66Px-->
    </div>
  </nav>
  <div class="hamburger-menu">
    <div class="menu-deco">
        <div class="menu-deco-left">
            <img src="../image/decovert-bottom.png" alt="" class="deco-hamburger">
        </div>
        <ul>
            <li><a href="../pages/index.php" class="nav-link">Carte</a></li>
            <li><a href="../pages/classement.php" class="nav-link">Classement ATP</a></li>
            <li><a href="../pages/calendrier.php" class="nav-link">Calendrier des tournois</a></li>
            <li><a href="../pages/contact.php" class="nav-link">Contact</a></li>
        </ul>
        <div class="menu-deco-right">
            <img src="../image/decojaune-bottom.png" alt="" class="deco-hamburger">
        </div>
    </div>
    <div class="deco-bottom">
        <img src="../image/decojaune.png" alt="">
        <img src="../image/decovert.png" alt="">
    </div>
  </div>
</header>
<script>
    document.querySelector('.script-hamburger').addEventListener('click', function () {
document.querySelector('.icon-hamburger').classList.toggle('open');
});

function displayMenu(){
    var menu = document.querySelector(".hamburger-menu");
    menu.classList.toggle('open-menu');

}


</script>   
</body>
</html>

<!-- https://mdbootstrap.com/docs/standard/extended/hamburger-menu/ -->
    <!-- 320px : pour les écrans mobiles les plus petits, tels que les anciens iPhones et Androids.
    375px : pour les écrans mobiles de taille moyenne, tels que l'iPhone 6/7/8.
    414px : pour les écrans mobiles plus grands, tels que l'iPhone 6/7/8 Plus.
    480px : pour les écrans mobiles plus grands, tels que certains téléphones Android et Windows. -->