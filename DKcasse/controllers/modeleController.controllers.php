<?php
require_once "models/modelemanager.php";

class ModeleController{
    private $ModeleManager;

    public function __construct(){
        $this->ModeleManager = new ModeleManager;
        $this->ModeleManager->chargementModele();
    }

    public function afficherModeles(){
        $piece = $this->ModeleManager->getModeles();
        require "views/Modeles.view.php";
    }

    public function afficherModele($idpiece){
        $piece = $this->ModeleManager->getModeleById($idpiece);
        require "views/afficherModele.view.php";
    }

    public function ajoutModele(){
        require "views/ajoutModele.view.php";
    }

    public function ajoutModeleValidation(){
        
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
        require "views/modifierModele.view.php";
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