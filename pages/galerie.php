
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
    <link rel="stylesheet" href="../resetMeyer.css">
    <link rel="stylesheet" href="../css/galerie.css">
    <link rel="stylesheet" href="../responsive/membre.galerie.css">
    <link rel="stylesheet" href="../responsive/footer.galerie.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="apple-touch-icon" sizes="180x180" href="../favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon//favicon-16x16.png">
    <link rel="manifest" href="../favicon//site.webmanifest">
</head>

<body>


    <header>
        <img class="banner" src="../images/poisson10.jpg" alt="poisson Oscar">
        <div class="container3">

        <span class="text1"><a id="toIndex" href=../index.php><img class="logo" src="../images/logoAbysses.png" alt="logo de l'association les abysses"></a></span>
            <span class="text2">Rueil-Malmaison</span>
        </div>
        <div class="toggle"></div>
        <nav>
            <ul>
                <li><a  href="../index.php">Home</a></li>
                <li><a  href="./quiSommesNous.php">Qui Sommes Nous ?</a></li>
                <li><a class="active" href="./galerie.php">Galerie</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a  href="./inscription.php" class="">Se connecter</a></li>
                <li><a href="https://www.instagram.com/aquabysses/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/Club-aquariophile-les-abysses-558375734206459" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
    <h2>Visitez notre galerie</h2>
    <br>
<div id="popup-bg">
    <div id="popup-content">
        <div id="popup-close">
        <ion-icon name="close-circle"></ion-icon>
        </div>
        <img id="popup-img" src="" alt="fermeture de la modale" />
    </div>
</div>

<div id="grid">
  
    <div class="grid-item" id="poisson-1"><img src="../images/poisson1.jpg" alt="axelotl" class="grid-img"></div>
   
    <div class="grid-item" id="poisson-2"><img src="../images/poisson2.jpg" alt="axelotl" class="grid-img"></div>
   
    <div class="grid-item" id="poisson-3"><img src="../images/poisson3.jpg" alt="crevette red cherry" class="grid-img"></div>
    <div class="grid-item" id="poisson-4"><img src="../images/poisson4.jpg" alt="guppy endler male" class="grid-img"></div>
    <div class="grid-item" id="poisson-5"><img src="../images/poisson5.jpg" alt="guppy endler femelle" class="grid-img"></div>
    <div class="grid-item" id="poisson-6"><img src="../images/poisson6.jpg" alt="cichlidé joyau" class="grid-img"></div>
    <div class="grid-item" id="poisson-7"><img src="../images/poisson7.jpg" alt="corydoras" class="grid-img"></div>
    <div class="grid-item" id="poisson-8"><img src="../images/poisson8.jpg" alt="corydoras" class="grid-img"></div>
    <div class="grid-item" id="poisson-9"><img src="../images/poisson9.jpg" alt="corydoras" class="grid-img"></div>
    <div class="grid-item" id="poisson-10"><img src="../images/poisson10.jpg" alt="platy" class="grid-img"></div>
    <div class="grid-item" id="poisson-11"><img src="../images/poisson11.jpg" alt="platy" class="grid-img"></div>
    <div class="grid-item" id="poisson-12"><img src="../images/poisson12.jpg" alt="corydoras" class="grid-img"></div>
    <div class="grid-item" id="poisson-13"><img src="../images/poisson13.jpg" alt="corydoras" class="grid-img"></div>
    <div class="grid-item" id="poisson-14"><img src="../images/poisson14.jpg" alt="scalaire" class="grid-img"></div>
    <div class="grid-item" id="poisson-15"><img src="../images/poisson15.jpg" alt="oscar" class="grid-img"></div>
    <div class="grid-item" id="poisson-16"><img src="../images/poisson16.jpg" alt="oscar" class="grid-img"></div>
    <div class="grid-item" id="poisson-17"><img src="../images/poisson17.jpg" alt="oscar" class="grid-img"></div>
    <div class="grid-item" id="poisson-18"><img src="../images/poisson18.jpg" alt="tetra" class="grid-img"></div>
    <div class="grid-item" id="poisson-19"><img src="../images/poisson19.jpg" alt="loricaria" class="grid-img"></div>
    <div class="grid-item" id="poisson-20"><img src="../images/poisson20.jpg" alt="tetra" class="grid-img"></div>
</div>

<?php
   include'../pages/membre.inc.php';

?>

<div class="bubbles">
            <img src="../images/bubble.png" alt="bulles d'air">
            <img src="../images/bubble.png" alt="bulles d'air">
            <img src="../images/bubble.png" alt="bulles d'air">
            <img src="../images/bubble.png" alt="bulles d'air">
            <img src="../images/bubble.png" alt="bulles d'air">
            <img src="../images/bubble.png" alt="bulles d'air">
            <img src="../images/bubble.png" alt="bulles d'air">
        </div>
    </main>

<?php

include '../pages/footer.inc.php';
?> 




<script src="../js/index.js"></script>
<script src="../js/galerie.js"></script>
<script type="text/javascript" src="../js/logo.js"></script> 
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
