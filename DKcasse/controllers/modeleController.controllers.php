<?php
require_once "models/modele/modelemanager.php";

class ModeleController{
    private $ModeleManager;

    public function __construct(){
        $this->ModeleManager = new ModeleManager;
        $this->ModeleManager->chargementModele();
    }

    public function afficherModeles(){
        $modele = $this->ModeleManager->getModeles();
        require "views/modele/modeles.view.php";
    }

    public function afficherModele($idmodele){
        $modele = $this->ModeleManager->getModeleById($idmodele);
        require "views/modele/afficherModele.view.php";
    }

    public function ajoutModele(){
        require "views/modele/ajoutModele.view.php";
    }

    public function ajoutModeleValidation(){
        var_dump($_POST['NomModele']);
        $this->ModeleManager->ajoutModeleBd($_POST['NomModele'],$_POST['Annee']);
        
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Ajout Réalisé"
        ];
        
        header('Location: '. URL . "modeles");
    }

    public function suppressionModele($idmodele){
        $this->ModeleManager->suppressionModeleBD($idmodele);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Suppression Réalisée"
        ];
        header('Location: '. URL . "modeles");
    }

    public function modificationModele($idmodele){
        $modele = $this->ModeleManager->getModeleById($idmodele);
        require "views/modele/modifierModele.view.php";
    }

    public function modificationModeleValidation(){
       
        $this->ModeleManager->modificationModeleBD($_POST['identifiant'],$_POST['NomModele'],$_POST['Annee']);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "modification Réalisée"
        ];
        
        header('Location: '. URL . "modeles");
    }

   
}