<?php
require_once "models/categorie/categoriemanager.php";

class CategorieController{
    private $CategorieManager;

    public function __construct(){
        $this->CategorieManager = new CategorieManager;
        $this->CategorieManager->chargementCategorie();
    }

    public function afficherCategories(){
        $categorie = $this->CategorieManager->getCategories();
        require "views/categorie/categorie.view.php";
    }

    public function afficherCategorie($idcategorie){
        $categorie = $this->CategorieManager->getCategorieById($idcategorie);
        require "views/categorie/afficherCategorie.view.php";
    }

    public function ajoutCategorie(){
        require "views/categorie/ajoutCategorie.view.php";
    }

    public function ajoutCategorieValidation(){
        var_dump($_POST['NomCategorie']);
        $this->CategorieManager->ajoutCategorieBd($_POST['NomCategorie']);
        
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Ajout Réalisé"
        ];
        
        header('Location: '. URL . "categorie");
    }

    public function suppressionCategorie($idcategorie){
        $this->CategorieManager->suppressionCategorieBD($idcategorie);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "Suppression Réalisée"
        ];
        header('Location: '. URL . "categorie");
    }

    public function modificationCategorie($idcategorie){
        $modele = $this->CategorieManager->getCategorieById($idcategorie);
        require "views/categorie/modifierCategorie.view.php";
    }

    public function modificationCategorieValidation(){
       
        $this->CategorieManager->modificationCategorieBD($_POST['identifiant'],$_POST['NomCategorie']);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg" => "modification Réalisée"
        ];
        
        header('Location: '. URL . "categorie");
    }

   
}