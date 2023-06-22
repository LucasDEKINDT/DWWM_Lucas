<?php


define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/pieceController.controllers.php";
$pieceController = new PieceController;

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
            default : throw new Exception("La page n'existe pas");
        }
    }
}
catch(Exception $e){
    $msg = $e->getMessage();
    require "views/error.view.php";
   
}
require_once "controllers/modeleController.controllers.php";
$modeleController = new ModeleController;

try{
    if(empty($_GET['page'])){
        require "views/accueil.php";
    } else {
        $url = explode("/", filter_var($_GET['page']),FILTER_SANITIZE_URL);

        switch($url[0]){
            case "accueil" : require "views/accueil.php";
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
            default : throw new Exception("La page n'existe pas");
        }
    }
}
catch(Exception $e){
    $msg = $e->getMessage();
    require "views/error.view.php";
   
}
require_once "views/template.php";
