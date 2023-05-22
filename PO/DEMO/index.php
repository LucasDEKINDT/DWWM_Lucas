<?php 
    require_once "Livre.php";

    $livre1 = new Livre("Le Petit Prince", "Antoine de Saint-Exupéry",1943);
    $livre2 = new Livre("1984", "Georges Orwell",1949);

    if(isset($_POST['titre1'])){
        $livre1->setTitre($_POST['titre1']);
    }
    if(isset($_POST['auteur1'])){
        $livre1->setAuteur($_POST['auteur1']);
    }
    if(isset($_POST['annee1'])){
        $livre1->setAnnee($_POST['annee1']);
    }

    echo "<div>";
    $livre1->affichage();
    echo "</div>";


    //Formulaire pour modifier le Livre - avec les setters
    echo "<form method='POST'>
        <label for='titre1'>Titre :</label>
        <input type='text' name='titre1' value='" . $livre1->getTitre() ."'><br>

        <label for='auteur1'>Auteur :</label>
        <input type='text' name='auteur1' value='" . $livre1->getAuteur() . "'><br>

        <label for='annee1'>Année :</label>
        <input type='text' name='annee1' value='" . $livre1->getAnnee(). "'><br>

        <button type='submit'>Modifier le livre</button>

    </form>";




?>