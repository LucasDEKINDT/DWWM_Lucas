<?php
require_once "models/utilisateur/utilisateurmanager.php";

class UtilisateurController{
    private $UtilisateurManager;

    public function __construct(){
        $this->UtilisateurManager = new UtilisateurManager;
        $this->UtilisateurManager->chargementUtilisateurs();
    }

    public function afficherUtilisateurs(){
        $utilisateur = $this->UtilisateurManager->getUtilisateurs();
        require "views/utilisateur/utilisateurs.view.php";
    }

    public function afficherUtilisateur($Idutilisateur){
        $utilisateur = $this->UtilisateurManager->getUtilisateurById($Idutilisateur);
        require "views/utilisateur/afficherUtilisateur.view.php";
    }

    public function ajoutUtilisateur(){
        require "views/utilisateur/ajoutUtilisateur.view.php";
    }

    public function ajoutUtilisateurValidation(){
        $this->UtilisateurManager->ajoutUtilisateurBd(
            $_POST['Idutilisateur'],
            $_POST['Grade'],
            $_POST['Nomutilisateur'],
            $_POST['Prenomutilisateur'],
            $_POST['Emailutilisateur'],
            $_POST['Motdepasse']
        );

        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Ajout Réalisé"
        ];

        header('Location: ' . URL . "utilisateurs");
    }

    public function suppressionUtilisateur($Idutilisateur){
        $this->UtilisateurManager->suppressionUtilisateurBD($Idutilisateur);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Suppression Réalisée"
        ];
        header('Location: ' . URL . "utilisateur");
    }

    public function modificationUtilisateur($Idutilisateur){
        $utilisateur = $this->UtilisateurManager->getUtilisateurById($Idutilisateur);
        require "views/utilisateur/modifierUtilisateur.view.php";
    }

    public function modificationUtilisateurValidation(){
        $this->UtilisateurManager->modificationUtilisateurBD(
            $_POST['Idutilisateur'],
            $_POST['Grade'],
            $_POST['Nomutilisateur'],
            $_POST['Prenomutilisateur'],
            $_POST['Emailutilisateur'],
            $_POST['Motdepasse']
        );
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Modification Réalisée"
        ];

        header('Location: ' . URL . "utilisateur");
    }
}
