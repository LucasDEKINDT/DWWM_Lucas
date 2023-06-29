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

    public function getCategorieById($idcategorie){
        for($i=0; $i < count($this->categories);$i++){
            if($this->categories[$i]->getIdCategorie() === $idcategorie){
                return $this->categories[$i];
            }
        }
        throw new Exception("La categorie n'existe pas");
    }

    public function ajoutCategorieBd($nomcategorie){
        $req = "
        INSERT INTO categorie ( NomCategorie)
        values ( :NomCategorie)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":NomCategorie",$nomcategorie,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $categorie = new Categorie($this->getBdd()->lastInsertId(),$nomcategorie);
            $this->ajoutCategorie($categorie);
        }        
    }

    public function suppressionCategorieBD($idcategorie){
        $req = "
        Delete from categorie where IdCategorie = :IdCategorie
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdCategorie",$idcategorie,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            $categorie = $this->getCategorieById($idcategorie);
            unset($categorie);
        }
    }

    public function modificationCategorieBD($idcategorie,$nomcategorie){
        $req = "
        update categorie
        set NomCategorie = :NomCategorie
        where IdCategorie = :IdCategorie";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdCategorie",$idcategorie,PDO::PARAM_INT);
        $stmt->bindValue(":NomCategorie",$nomcategorie,PDO::PARAM_STR);
        
        
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $this->getCategorieById($idcategorie)->setNomCategorie($nomcategorie);
            
           
        }
    }
}