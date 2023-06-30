<?php
require_once "models/marque/marquemanager.php";

class MarqueController{
    private $marqueManager;

    public function __construct(){
        $this->marqueManager = new MarqueManager;
        $this->marqueManager->chargementmarque();
    }

    public function afficherMarques(){
        $marque = $this->marqueManager->getMarques();
        require "views/marque/marques.php";
    }

    public function afficherMarque($IdMarque){
        $marque = $this->marqueManager->getMarqueById($IdMarque);
        require "views/marque/afficherMarque.php";
    }

    public function ajoutMarque(){
        require "views/marque/ajoutMarque.php";
    }

    public function ajoutMarqueValidation(){
        var_dump($_POST['NomMarque']);
        $this->marqueManager->ajoutMarqueBd($_POST['NomMarque'],$_POST['IdModele']);
        
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Ajout Réalisé"
        ];
        
        header('Location: '. URL . "marques");
    }

    public function suppressionMarque($IdMarque){
        $this->marqueManager->suppressionMarqueBD($IdMarque);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Suppression Réalisée"
        ];
        header('Location: '. URL . "marques");
    }

    public function modificationMarque($IdMarque){
        $marque = $this->marqueManager->getMarqueById($IdMarque);
        require "views/marque/modifierMarque.php";
    }

    public function modificationMarqueValidation(){
       
        $this->marqueManager->modificationMarqueBD($_POST['identifiant'],$_POST['NomMarque'],$_POST['IdModele']);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "modification Réalisée"
        ];
        
        header('Location: '. URL . "marques");
    }

   
}