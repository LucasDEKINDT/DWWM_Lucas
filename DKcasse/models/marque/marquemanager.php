<?php
require_once "models/connexion.php";
require_once "marques.php";



class Marquemanager extends Model{
    private $marques;//tableau de Livre

    public function ajoutMarque($marque){
        $this->marques[] = $marque;
    }

    public function getMarques(){
        return $this->marques;
    }

    public function chargementmarque(){
        $req = $this->getBdd()->prepare("SELECT * FROM marques");
        $req->execute();
        $mesmarque = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesmarque as $marque){
            $l = new Marque($marque['IdMarque'],$marque['NomMarque'],$marque['IdModele']);
            $this->ajoutMarque($l);
        }
    }

    public function getMarqueById($IdMarque){
        for($i=0; $i < count($this->marques);$i++){
            if($this->marques[$i]->getIdMarque() === $IdMarque){
                return $this->marques[$i];
            }
        }
        throw new Exception("La marque n'existe pas");
    }

    public function ajoutMarqueBd($NomMarque,$IdModele){
        $req = "
        INSERT INTO marques ( NomMarque, IdModele)
        values ( :NomMarque, :IdModele)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":NomMarque",$NomMarque,PDO::PARAM_STR);
        $stmt->bindValue(":IdModele",$IdModele,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $marque = new Marque($this->getBdd()->lastInsertId(),$NomMarque,$IdModele);
            $this->ajoutMarque($marque);
        }        
    }

    public function suppressionMarqueBD($IdMarque){
        $req = "
        Delete from marques where IdMarque = :IdMarque
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdMarque",$IdMarque,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            $typepiece = $this->getMarqueById($IdMarque);
            unset($typepiece);
        }
    }

    public function modificationMarqueBD($IdMarque,$NomMarque,$IdModele){
        $req = "
        update marques
        set NomMarque = :NomMarque, IdModele = :IdModele
        where IdMarque = :IdMarque";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdMarque",$IdMarque,PDO::PARAM_INT);
        $stmt->bindValue(":NomMarque",$NomMarque,PDO::PARAM_STR);
        $stmt->bindValue(":IdModele",$IdModele,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $this->getMarqueById($IdMarque)->setNommarque($NomMarque);
            $this->getMarqueById($IdMarque)->setNommarque($IdModele);
            
        }
    }
}