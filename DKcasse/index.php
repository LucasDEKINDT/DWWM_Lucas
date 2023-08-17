<?php ob_start() ?>
<?php


define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
require_once "controllers/modeleController.controllers.php";
require_once "controllers/pieceController.controllers.php";
require_once "controllers/typepieceControllers.php";
require_once "controllers/categorieController.php";
require_once "controllers/marqueController.php";
require_once "controllers/utilisateurController.php";
require_once "./models/utilisateur/Utilisateur.php";
$pieceController = new PieceController;
$modeleController = new ModeleController;
$typepieceController = new TypepieceController;
$categorieController = new CategorieController;
$marqueController = new MarqueController;
$utilisateurController = new UtilisateurController;
try{
    if(empty($_GET['page'])){
        require "views/accueil.php";
    } else {
        $url = explode("/", filter_var($_GET['page']),FILTER_SANITIZE_URL);

        switch($url[0]){
            case "accueil" : require "views/accueil.php";
            break;
            case "pieces" : 
                if(empty($url[1])){
                    $pieceController->afficherPieces();
                } else if($url[1] === "l") {
                    $pieceController->afficherpiece($url[2]);
                } else if($url[1] === "a") {
                    $pieceController->ajoutpiece();
                } else if($url[1] === "m") {
                    $pieceController->modificationpiece($url[2]);
                } else if($url[1] === "s") {
                    $pieceController->suppressionPiece($url[2]);
                } else if($url[1] === "av") {
                    $pieceController->ajoutPieceValidation();
                } else if($url[1] === "mv") {
                    $pieceController->modificationPieceValidation();
                }
                else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            case "modeles" : 
                if(empty($url[1])){
                    $modeleController->afficherModeles();
                } else if($url[1] === "l") {
                    $modeleController->afficherModele($url[2]);
                } else if($url[1] === "a") {
                    $modeleController->ajoutModele();
                } else if($url[1] === "m") {
                    $modeleController->modificationModele($url[2]);
                } else if($url[1] === "s") {
                    $modeleController->suppressionModele($url[2]);
                } else if($url[1] === "av") {
                    $modeleController->ajoutModeleValidation();
                } else if($url[1] === "mv") {
                    $modeleController->modificationModeleValidation();
                }
                else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            case "typepiece" : 
                if(empty($url[1])){
                    $typepieceController->afficherTypepieces();
                } else if($url[1] === "l") {
                    $typepieceController->afficherTypepiece($url[2]);
                } else if($url[1] === "a") {
                    $typepieceController->ajoutTypepiece();
                } else if($url[1] === "m") {
                    $typepieceController->modificationTypepiece($url[2]);
                } else if($url[1] === "s") {
                    $typepieceController->suppressionTypepiece($url[2]);
                } else if($url[1] === "av") {
                    $typepieceController->ajoutTypepieceValidation();
                } else if($url[1] === "mv") {
                    $typepieceController->modificationTypepieceValidation();
                }
                else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            case "categorie" : 
                if(empty($url[1])){
                    $categorieController->afficherCategories();
                } else if($url[1] === "l") {
                    $categorieController->afficherCategorie($url[2]);
                } else if($url[1] === "a") {
                    $categorieController->ajoutCategorie();
                } else if($url[1] === "m") {
                    $categorieController->modificationCategorie($url[2]);
                } else if($url[1] === "s") {
                    $categorieController->suppressionCategorie($url[2]);
                } else if($url[1] === "av") {
                    $categorieController->ajoutCategorieValidation();
                } else if($url[1] === "mv") {
                    $categorieController->modificationCategorieValidation();
                }
                else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            case "marques" : 
                if(empty($url[1])){
                    $marqueController->afficherMarques();
                } else if($url[1] === "l") {
                    $marqueController->afficherMarque($url[2]);
                } else if($url[1] === "a") {
                    $marqueController->ajoutMarque();
                } else if($url[1] === "m") {
                    $marqueController->modificationMarque($url[2]);
                } else if($url[1] === "s") {
                    $marqueController->suppressionMarque($url[2]);
                } else if($url[1] === "av") {
                    $marqueController->ajoutMarqueValidation();
                } else if($url[1] === "mv") {
                    $marqueController->modificationMarqueValidation();
                }
                else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            case "utilisateurs" : 
                if(empty($url[1])){
                    $utilisateurController->afficherUtilisateurS();
                } else if($url[1] === "l") {
                    $utilisateurController->afficherUtilisateur($url[2]);
                } else if($url[1] === "a") {
                    $utilisateurController->ajoutUtilisateur();
                } else if($url[1] === "m") {
                    $utilisateurController->modificationUtilisateur($url[2]);
                } else if($url[1] === "s") {
                    $utilisateurController->suppressionUtilisateur($url[2]);
                } else if($url[1] === "av") {
                    $utilisateurController->ajoutUtilisateurValidation();
                } else if($url[1] === "mv") {
                    $utilisateurController->modificationUtilisateurValidation();
                }
                else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            default : throw new Exception("La page n'existe pas");
        }
    }  
       
            
            
        }
catch(Exception $e){
    $msg = $e->getMessage();
    require "views/error.view.php";
   
}




   

require_once "views/template.php";