<?php
session_start();

// Teste si user est authentifié
if (isset($_SESSION['isauth']) && $_SESSION['isauth']) {
    $isauth = true;
} else {
    $isauth = false;
    
}

// Teste si role est défini
if (isset($_SESSION['role']) && $_SESSION['role']) {
    $role = $_SESSION['role'];
} else {
    $role = "adherent";
}

include '../config.php';
$bdd = new PDO('mysql:host=127.0.0.1;dbname=abysses', 'root', '');

// if (isset($_POST['forminscription'])) {
//     if (isset($_POST['nom']) && !empty($_POST['nom'])) {
//         $nom = htmlspecialchars($_POST['nom']);
//     }

//     if (isset($_POST['mail']) && !empty($_POST['mail'])) {
//         $mail = htmlspecialchars($_POST['mail']);
//     }

//     if (isset($_POST['password']) && !empty($_POST['password'])) {
//         $password = htmlspecialchars($_POST['password']);
//     }

//     if (isset($_POST['cpassword']) && !empty($_POST['cpassword'])) {
//         $cpassword = htmlspecialchars($_POST['cpassword']);
//     }


//     if (isset($mail) && isset($password)) {
//         $password = hash('sha256', hash('md5', $password) . hash('sha1', strtolower($mail)));
//     }
//     if (isset($mail) && isset($cpassword)) {
//         $cpassword = hash('sha256', hash('md5', $cpassword) . hash('sha1', strtolower($mail)));
//     }
//     if (isset($mail) && isset($cpassword)) {
//         $image = '../image/default-avatar.png';
//     }

//     $image = $_FILES['image']['name'];
//     $image_tmp_name = $_FILES['image']['tmp_name'];
//     $image_size = $_FILES['image']['size'];
//     $image_folder = '../image/' . $image;
// }
// if (!empty($_POST['nom']) and !empty($_POST['mail']) and !empty($_POST['password']) and !empty($_POST['cpassword'])) {
//     $nomlength = strlen($nom);
//     if ($nomlength <= 255) {
//         if ($mail) {
//             if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
//                 $reqmail = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
//                 $reqmail->execute(array($mail));
//                 $mailexist = $reqmail->rowCount();
//                 if ($mailexist == 0) {
//                     if ($password == $cpassword) {
//                         $insertmbr = $bdd->prepare("INSERT INTO users(nom, mail, password, role, image) VALUES(?, ?, ?, 'adherent', ?)");
//                         $insertmbr->execute(array($nom, $mail, $password, $image));
//                         if ($insertmbr) {
//                             move_uploaded_file($image_tmp_name, $image_folder);
//                             $erreur = 'inscription réussie !';
//                         } elseif ($image_size > 2000000) {
//                             $message[] = 'taille d\'image trop grande !';
//                             header('location:../index.php');
//                         }
//                     } else {
//                         $message[] = 'les mots de passe ne correspondent pas !';
//                     }
//                 } else {
//                     $message[] = 'utilisateur déjà existant !';
//                 }
//             } else {
//                 $message[] = "Votre adresse mail n'est pas valide !";
//             }
//         }
//     } else {
//         $message[] = "Votre nom ne doit pas dépasser 255 caractères !";
//     }
// }
// ?>
 <?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=abysses', 'root', '');

if (isset($_POST['formconnexion'])) {
    if (isset($_POST['mail']) && !empty($_POST['mail'])) {
        $mail = htmlspecialchars($_POST['mail']);
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = htmlspecialchars($_POST['password']);
    }

    if (isset($mail) && isset($password)) {
        $password = hash('sha256', hash('md5', $password) . hash('sha1', strtolower($mail)));
    }

    $select = $bdd->prepare("SELECT * FROM `users` WHERE mail = ? AND password = ?");
    $select->execute([$mail, $password]);
    $row = $select->fetch(PDO::FETCH_ASSOC);
    if ($select->rowCount() === 1) {
        $_SESSION['isauth']= true;
        $_SESSION['nom']= ucwords(strtolower($row['nom']));
        $_SESSION['prenom']= ucwords(strtolower($row['prenom']));
        $_SESSION['id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        if ($row['role'] == 'bureau') {
            $_SESSION['bureau_id'] = $row['id'];
            header("Location: ../backOffice/backOffice.php?id=" .$_SESSION['id']);
        } elseif ($row['role'] == 'adherent') {
            $_SESSION['adherent_id'] = $row['id'];
            header("Location: ../espaceMembre/membre.php?id=" .$_SESSION['id']);
        } else {
            $message[] = 'aucun utilisateur trouvé!';
        }
    } else {
        $message[] = 'mail ou mot de passe invalide!';
    }

    
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="../resetMeyer.css">
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" href="../responsive/membre.inscription.css">
    <link rel="stylesheet" href="../responsive/footer.inscription.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="../favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon//favicon-16x16.png">
    <link rel="manifest" href="../favicon//site.webmanifest">
</head>

<body class="container">

    <header>
        <img class="banner" src="../images/image16.png" alt="poisson Oscar">
        <div class="container3">

            <span class="text1"><a id="toIndex" href=../index.php><img class="logo" src="../images/logoAbysses.png" alt="logo de l'association les abysses"></a></span>
            <span class="text2">Rueil-Malmaison</span>
        </div>
        <div class="toggle"></div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="./quiSommesNous.php">Qui Sommes Nous ?</a></li>
                <li><a href="./galerie.php">Galerie</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a class="active" href="./inscription.php" class="">Se connecter</a></li>
                <li><a href="https://www.instagram.com/aquabysses/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/Club-aquariophile-les-abysses-558375734206459" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a></li>
            </ul>
        </nav>
    
    </header>

    <main>

        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '
         <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
            }
        }
        ?>
        <div class="vide"></div>

        <section class="form-container">

            <div class="grid">

                <!-- <form class="box1" action="" method="post" enctype="multipart/form-data">
                    <h3>s'inscrire</h3>
                    <input type="text" required placeholder="entrez un nom d'utilisateur" class="box" name="nom">
                    <input type="email" required placeholder="entrez un email" class="box" name="mail">
                    <input type="password" required placeholder="entrez un mot de passe" class="box" name="password">
                    <input type="password" required placeholder="confirmez votre mot de passe" class="box" name="cpassword">
                    <input type="file" name="image" class="box" accept="image/jpg, image/png, image/jpeg, image/webp">

                    <input type="submit" value="s'inscrire" class="btn" name="forminscription">
                </form> -->


                <form class="box2" action="" method="post" enctype="multipart/form-data">
                    <h3>connexion</h3>
                    <input type="email" required placeholder="entrez votre email" class="box" name="mail">
                    <input type="password" required placeholder="entrez votre mot de passe" class="box" name="password">
                    <!-- <p>pas encore de compte ? <a href="register.php">s'inscrire</a></p> -->
                    <input type="submit" value="connexion" class="btn" name="formconnexion">
                </form>
            </div>

        </section>




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


</body>

</html>