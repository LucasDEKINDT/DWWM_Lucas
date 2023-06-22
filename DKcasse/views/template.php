<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/5/pulse/bootstrap.min.css">
    <link rel="stylesheet" href="/views/style.css">
</head>

<?php
// Assurez-vous que la variable $grade est définie
$grade = isset($grade) ? $grade : 0;
?>

<nav class="navbar navbar-expand-lg  navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">DK-CASSE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="../index.php">Accueil</a>
                    <a class="nav-link" href="<?= URL ?>pieces">Pieces</a>
                    <a class="nav-link" href="<?= URL ?>modeles">Modeles</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catégorie</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="piece_carrosserie.php">Pièce Carrosserie</a>
                        <a class="dropdown-item" href="piece_mecanique.php">Pièce Mécanique</a>
                        <a class="dropdown-item" href="piece_electrique.php">Pièce Électrique</a>
                        <a class="dropdown-item" href="piece_vidange.php">Pièce Vidange</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nous_contacter.php">Nous contacter</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mon compte</a>
                    <div class="dropdown-menu">
                        <?php
                        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true && $grade == 1) {
                          // L'utilisateur est connecté en tant qu'administrateur, afficher l'onglet "Administration"
                          echo '<a class="dropdown-item" href="administration.php">Administration</a>';
                      }
                        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
                            // L'utilisateur est connecté, afficher le lien de déconnexion
                            echo '<a class="dropdown-item" href="profil.php">Mon Profil</a>';
                            echo '<a class="dropdown-item" href="deconnexion.php">Déconnexion</a>';
                        } else {
                            // L'utilisateur n'est pas connecté, afficher le lien de connexion/inscription
                            echo '<a class="dropdown-item" href="connexion.php">Connexion</a>';
                            echo '<a class="dropdown-item" href="inscription.php">Inscription</a>';
                        }

                        
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

 <?= $content ?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<footer class="footer d-flex text-white pt-4 justify-content-center fw-bold">2023 © Tous droits réservés</footer>
</html>
