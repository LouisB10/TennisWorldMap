<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page carte interactive">
    <title>test</title>
    <link rel="icon" type="image/x-icon" href="../image/logo-remove.webp">
    <link rel="stylesheet" href="../css/test.css?v=<?= date("H:i:s") ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="decoration-left">
                <img src="../image/decovert.png" class="deco-fixed" style="transform: scaleY(-1);" />
                <img src="../image/decojaune.png" class="deco-relative"/>
                <img src="../image/decovert-top.png" class="deco-hamburger" id="deco-left">
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
                <img src="../image/decojaune.png" class="deco-fixed" style="transform: rotate(180deg);" />
                <img src="../image/decovert.png" class="deco-relative" style="transform: scaleX(-1);"/>
                <img src="../image/decojaune-top.png"  class="deco-hamburger" id="deco-right">
            </div>
        </nav>
        <div class="hamburger-menu">
            <div class="menu-top">
                <div class="top-deco-left">
                    <img src="../image/decovert-bottom.png" alt="decoration à gauche du menu">
                </div>
                <ul>
                    <li><a href="../pages/index.php">Carte</a></li>
                    <li><a href="../pages/classement.php">Classement ATP</a></li>
                    <li><a href="../pages/calendrier.php">Calendrier des tournois</a></li>
                    <li><a href="../pages/contact.php">Contact</a></li>
                </ul>
                <div class="top-deco-right">
                    <img src="../image/decojaune-bottom.png" alt="decoration à droite du menu" >
                </div>
            </div>

            <div class="menu-deco-bottom">
                <img src="../image/decojaune.png" alt="decoration en bas du menu">
                <img src="../image/decovert.png" alt="decoration en bas du menu">
            </div>
        </div>
    </header>
    <script>
        function displayMenu() {
            var hamburger = document.querySelector(".icon-hamburger");
            var menu = document.querySelector(".hamburger-menu");

            var decoRelative = document.querySelectorAll(".deco-relative");
            var decoHamburger = document.querySelectorAll(".deco-hamburger");
            decoRelative.forEach(function(item) {
                item.classList.toggle('open');
            });
            decoHamburger.forEach(function(item) {
                item.classList.toggle('open');
            });

            hamburger.classList.toggle('open');
            menu.classList.toggle('open-menu');

        }
    </script>
</body>

</html>