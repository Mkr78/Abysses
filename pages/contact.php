<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../resetMeyer.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../responsive/membre.contact.css">
    <link rel="stylesheet" href="../responsive/footer.contact.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="180x180" href="../favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon//favicon-16x16.png">
    <link rel="manifest" href="../favicon//site.webmanifest">
</head>

<body>


    <header>
        <img class="banner" src="../images/image18.jpg" alt="poisson Oscar">
        <div class="container3">

            <span class="text1"><a id="toIndex" href=../index.php><img class="logo" src="../images/logoAbysses.png" alt="logo de l'association les abysses"></a></span>
            <span class="text2">Rueil-Malmaison</span>
        </div>
        <div class="toggle"></div>
        <nav>
            <ul>
                <li><a  href="../index.php">Home</a></li>
                <li><a  href="./quiSommesNous.php">Qui Sommes Nous ?</a></li>
                <li><a  href="./galerie.php">Galerie</a></li>
                <li><a class="active" href="./contact.php">Contact</a></li>
                <li><a  href="./inscription.php" class="">Se connecter</a></li>
                <li><a href="https://www.instagram.com/aquabysses/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/Club-aquariophile-les-abysses-558375734206459" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 id="geo">Où nous trouver ?</h2>
        <section class="icons">

            <ul>
                <li class="location"><i class="fa-solid fa-location-dot"></i>
                    <p>8 Boulevard Edmond Rostand<br>
                        92500 Rueil-Malmaison</p>
                </li>
                <li class="heure"><i class="fa-solid fa-clock"></i>
                    <p>Mercredi 14h00-17h00<br>Samedi 12h00-16h00</p>
                </li>
                <li class="phone"><i class="fa-solid fa-phone">
                    </i>
                    <p>06.62.98.69.14</p>
                </li>
                <li class="envelope"><i class="fa-solid fa-envelope"></i><a id="email" href="mailto:aquabysses@gmail.com">aquabysses@gmail.com</a></li>
                <li class="arret"><i class="fa-solid fa-bus-simple"></i>
                    <p>Bus 141 (Départ La Défense) :<br>
                        Arrêt Rue des Folies<br>
                        Bus 244 :Arrêt Edmond Rostand</p>
                </li>
            </ul>
            <div class="map">
                <img class="plan" src="../images/fleche2.jpg" alt="plan d'accès au club">
            </div>
        </section>



        <!-- <php
        include '../pages/membre.inc.php';

        ?> -->
        <div class="container" id="blocForm">
            <div class="d-flex justify-content-center">
                <div class="col-12 m-">
                    <form action="contact.php" method="POST">
                        <div class="form-group">
                            <div class="text-center">
                                <h1 id="border">Contactez-nous ! </h1>
                            </div>
                            <div class="d-flex">
                                <input  type="text" name="surname" pattern = [a-z,A-Z]{3,20} maxlength="20" placeholder="Nom (20 caractères max)" title="Votre nom 20 caractères max" autocomplete="off" class="form-control"required style="margin-right:10px" />

                                <input type="text" name="firstname" pattern = [a-z,A-Z]{3,20} maxlength="20" placeholder="Prénom (20 caractères max)" title="Votre prénom (20 caractères max)" autocomplete="off" class="form-control" required />
                            </div>
                            <br />
                            <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control" required />
                            <br />
                            <textarea rows="10" name="message" pattern=[\w] placeholder="Votre message" title="votre message" class="form-control"></textarea>
                            <br />
                            <button type="submit" class="btn btn-lg btn-primary send-btn " value="send">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST["surname"]) && !empty($_POST["surname"])) {
            $nom = htmlspecialchars($_POST["surname"]);
        };
        if (isset($_POST["firstname"]) && !empty($_POST["firstname"])) {
            $prenom = htmlspecialchars($_POST["firstname"]);
        };
        if (isset($_POST["email"]) && !empty($_POST["email"])) {
            $email = htmlspecialchars($_POST["email"]);
        }

        if (isset($_POST["message"]) && !empty($_POST["message"])) {
            $message = htmlspecialchars($_POST["message"]);
        }


        if (isset($_POST["message"])) {
            $inbox  = "Ce message vous a été envoyé via la page contact du site Aquabysses 
        Nom : " . $nom . "
        Prenom : " . $prenom . "
        Email : " . $email . "
        Message : " . $message;
            $retour = mail(
                "m.moh78260@gmail.com",
                "Demande d'informations",
                $inbox,
                "",
                "From: aquabysses.wixsite@gmail.com" . "\r\n" . "Reply-to:" . $email
            );
            if ($retour) {
                echo "<p>L'email a bien été envoyé !</p>";
            }
        }

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
    <script src="../js/logo.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>