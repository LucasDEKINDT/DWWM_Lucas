<?php
require_once "models/TypePiecemanager.php";

class ModeleController{
    private $TypepieceManager;

    public function __construct(){
        $this->TypepieceManager = new TypepieceManager;
        $this->TypepieceManager->chargementTypepiece();
    }

    public function afficherTypepieces(){
        $modele = $this->TypepieceManager->getTypepiece();
        require "views/typepiece.view.php";
    }

    public function afficherTypepiece($idtypepiece){
        $modele = $this->TypepieceManager->getTypepieceById($idtypepiece);
        require "views/affichertypepiece.view.php";
    }

    public function ajoutTypepiece(){
        require "views/ajouttypepiece.view.php";
    }

    public function ajoutTypepieceValidation(){
        
        $this->TypepieceManager->ajoutTypepieceBd($_POST['NomModele'],$_POST['Annee']);
        
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Ajout Réalisé"
        ];
        
        header('Location: '. URL . "modeles");
    }

    public function suppressionTypepiece($idtypepiece){
        $this->TypepieceManager->suppressionTypepieceBD($idtypepiece);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Suppression Réalisée"
        ];
        header('Location: '. URL . "modeles");
    }

    public function modificationModele($idtypepiece){
        $modele = $this->TypepieceManager->getTypepieceById($idtypepiece);
        require "views/modifiertypepiece.view.php";
    }

    public function modificationModeleValidation(){
       
        $this->TypepieceManager->modificationTypepieceBD($_POST['identifiant'],$_POST['Referencepiece00                                                                                                          '],$_POST['Annee']);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "modification Réalisée"
        ];
        
        header('Location: '. URL . "modeles");
    }

   
}