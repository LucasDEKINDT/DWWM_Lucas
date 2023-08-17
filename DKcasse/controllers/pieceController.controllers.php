
<?php
require_once "models/piece/piecemanager.php";

class PieceController{
    private $PieceManager;

    public function __construct(){
        $this->PieceManager = new PieceManager;
        $this->PieceManager->chargementPiece();
    }

    public function afficherPieces(){
         $piece= $this->PieceManager->getPieces();
        require "views/piece/pieces.view.php";
    }

    public function afficherPiece($idpiece){
        $piece = $this->PieceManager->getPieceById($idpiece);
        require "views/piece/afficherLivre.view.php";
    }

    public function ajoutPiece(){
        require "views/piece/ajoutLivre.view.php";
    }

    public function ajoutPieceValidation(){
        var_dump($_POST['NomPiece']);
        $this->PieceManager->ajoutPieceBd($_POST['NomPiece'],$_POST['Prix'],$_POST['Stock'],$_POST['IdTypePiece']);
        
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Ajout Réalisé"
        ];
        
        header('Location: '. URL . "pieces");
    }

    public function suppressionPiece($idpiece){
        $this->PieceManager->suppressionPieceBD($idpiece);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Suppression Réalisée"
        ];
        header('Location: '. URL . "pieces");
    }

    public function modificationPiece($idpiece){
        $piece = $this->PieceManager->getPieceById($idpiece);
        require "views/piece/modifierLivre.view.php";
    }

    public function modificationPieceValidation(){
       
        $this->PieceManager->modificationPieceBD($_POST['identifiant'],$_POST['NomPiece'],$_POST['Prix'],$_POST['Stock'],$_POST['IdTypePiece']);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "modification Réalisée"
        ];
        
        header('Location: '. URL . "pieces");
    }

   
}