<?php
require_once "models/TypePiecemanager.php";

class TypepieceController{
    private $TypepieceManager;

    public function __construct(){
        $this->TypepieceManager = new TypepieceManager;
        $this->TypepieceManager->chargementTypepiece();
    }

    public function afficherTypepieces(){
        $typepiece = $this->TypepieceManager->getTypepieces();
        require "views/Typepiece.php";
    }

    public function afficherTypepiece($idtypepiece){
        $typepiece = $this->TypepieceManager->getTypepieceById($idtypepiece);
        require "views/afficherTypepiece.php";
    }

    public function ajoutTypepiece(){
        require "views/ajoutTypepiece.php";
    }

    public function ajoutTypepieceValidation(){
        
        $this->TypepieceManager->ajoutTypepieceBd($_POST['Referencepiece'],$_POST['IdCategorie']);
        
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Ajout Réalisé"
        ];
        
        header('Location: '. URL . "typepiece");
    }

    public function suppressionTypepiece($idtypepiece){
        $this->TypepieceManager->suppressionTypepieceBD($idtypepiece);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Suppression Réalisée"
        ];
        header('Location: '. URL . "typepiece");
    }

    public function modificationTypepiece($idtypepiece){
        $typepiece = $this->TypepieceManager->getTypepieceById($idtypepiece);
        require "views/modifiertypepiece.php";
    }

    public function modificationTypepieceValidation(){
       
        $this->TypepieceManager->modificationTypepieceBD($_POST['identifiant'],$_POST['Referencepiece'],$_POST['IdCategorie']);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "modification Réalisée"
        ];
        
        header('Location: '. URL . "typepiece");
    }

   
}