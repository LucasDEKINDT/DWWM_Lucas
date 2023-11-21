<?php
require_once "models/connexion.php";
require_once "models/categorie/categorie.php";



class Categoriemanager extends Model{
    private $categories;//tableau de Modele

    public function ajoutcategorie($categorie){
        $this->categories[] = $categorie;
    }

    public function getCategories(){
        return $this->categories;
    }

    public function chargementcategorie(){
        $req = $this->getBdd()->prepare("SELECT * FROM categorie");
        $req->execute();
        $mesCategorie = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesCategorie as $categorie){
            $l = new Categorie($categorie['IdCategorie'],$categorie['NomCategorie']);
            $this->ajoutCategorie($l);
        }
    }

    public function getCategorieById($IdCategorie){
        $req = $this->getBdd()->prepare("SELECT * FROM categorie WHERE IdCategorie = :IdCategorie");
        $req->bindValue(":IdCategorie", $IdCategorie, PDO::PARAM_INT);
        $req->execute();
        $categorie = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
    
         // Assurez-vous que $piece contient les données correctes
    
        if (!$categorie) {
            throw new Exception("La categorie n'existe pas");
        }
    
        return new Categorie($categorie['IdCategorie'], $categorie['NomCategorie']);
    }

    public function ajoutCategorieBd($NomCategorie){
        $req = "
        INSERT INTO categorie ( NomCategorie)
        values ( :NomCategorie)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":NomCategorie",$NomCategorie,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $categorie = new Categorie($this->getBdd()->lastInsertId(),$NomCategorie);
            $this->ajoutCategorie($categorie);
        }        
    }

    public function suppressionCategorieBD($IdCategorie){
        $req = "
        Delete from categorie where IdCategorie = :IdCategorie
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdCategorie",$IdCategorie,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            $categorie = $this->getCategorieById($IdCategorie);
            unset($categorie);
        }
    }

    public function modificationCategorieBD($IdCategorie,$NomCategorie){
        $req = "
        update categorie
        set NomCategorie = :NomCategorie
        where IdCategorie = :IdCategorie";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdCategorie",$IdCategorie,PDO::PARAM_INT);
        $stmt->bindValue(":NomCategorie",$NomCategorie,PDO::PARAM_STR);
        
        
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $this->getCategorieById($IdCategorie)->setNomcategorie($NomCategorie);
            
           
        }
    }
}