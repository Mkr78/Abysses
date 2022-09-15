<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui Sommes Nous ?</title>
    <link rel="stylesheet" href="../resetMeyer.css">
    <link rel="stylesheet" href="../css/quiSommesNous.css">
    <link rel="stylesheet" href="../responsive/membre.quiSommesNous.css">
    <link rel="stylesheet" href="../responsive/footer.quiSommesNous.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/membre.css">

    <link rel="apple-touch-icon" sizes="180x180" href="../favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon//favicon-16x16.png">
    <link rel="manifest" href="../favicon//site.webmanifest">
</head>

<body class="container1">

    <header>
        <img class="banner" src="../images/poissonCombattant.png" alt="Duo de poissons Combattant bêta">
        <div class="container5">

            <span class="text1"><a id="toIndex" href=../index.php><img class="logo" src="../images/logoAbysses.png" alt="logo de l'association les abysses"></a></span>
            <span class="text2">Rueil-Malmaison</span>
        </div>
        <div class="toggle"></div>
        <nav>
            <ul>
                <li><a  href="../index.php">Home</a></li>
                <li><a  class="active"href="./quiSommesNous.php">Qui Sommes Nous ?</a></li>
                <li><a href="./galerie.php">Galerie</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a  href="./inscription.php" class="">Se connecter</a></li>
                <li><a href="https://www.instagram.com/aquabysses/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/Club-aquariophile-les-abysses-558375734206459" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="presentation">
            <div class="blocG">
                <div id="intro">
                    <p>
                        Un Club, une Association:<br>
                        né le 12 janvier 2013
                    </p>


                    <p>Le club est une association située dans la commune de Rueil-Malmaison. Ce local vide, bâti parpaing par  parpaing par les tout premiers adhérents, a beaucoup évolué depuis sa création.<br>
                    Il a pour but de :
                    </p>
                </div>

                <ol>
               <li> <span>Réunir des aquariophiles passionnés</span> de tous niveaux (novices ou confirmés) afin de partager nos   connaissances, nous entraider et conseiller en toute convivialité​.
                    </li>
                    <li><span> Aider à la maintenance des bacs</span> du club allant du nano au 1000L d'eau douce.
                    </li>
                    <li><span>Reproduire certaines espèces</span> de poissons et de plantes.</li>
                    <li><span>Organiser des sorties:</span> magasins aquariophiles en Belgique, restaurants ...</li>
                    <li><span>Aider les plus novices à créer leur premier aquarium</span> dans les meilleures conditions.</li>
                    <li><span>Offrir une seconde chance à des poissons</span> maintenus dans des conditions précaires.</li>
                </ol>
            </div>
            <div class="blocD">
                <img src="../images/HERO_club_qui_sommes_nous.png" id="hero1" alt="intérieur du club Les Abysses">
             
            </div>
            <div class="blocD2">
                <img src="../images/hero2.png" id="hero2" alt="intérieur du club Les Abysses">
            </div>
            <div class="blocD3">
                <img src="../images/intérieur425.jpg" id="hero3" alt="intérieur du club Les Abysses">
            </div>
         
        </section>
        <div class="separ"></div>

    



<?php 
require_once'membre.inc.php';

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
    require_once'footer.inc.php';
?>

<script src="../js/index.js"></script>

<script type="text/javascript" src="../js/logo.js"></script>
</body>
</html>