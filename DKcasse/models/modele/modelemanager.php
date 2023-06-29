<?php
require_once "models/connexion.php";
require_once "models/modele/Modeles.php";



class Modelemanager extends Model{
    private $modeles;//tableau de Modele

    public function ajoutModele($modele){
        $this->modeles[] = $modele;
    }

    public function getModeles(){
        return $this->modeles;
    }

    public function chargementModele(){
        $req = $this->getBdd()->prepare("SELECT * FROM modeles");
        $req->execute();
        $mesModele = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesModele as $modele){
            $l = new Modele($modele['IdModele'],$modele['NomModele'],$modele['Annee']);
            $this->ajoutModele($l);
        }
    }

    public function getModeleById($idmodele){
        for($i=0; $i < count($this->modeles);$i++){
            if($this->modeles[$i]->getIdModele() === $idmodele){
                return $this->modeles[$i];
            }
        }
        throw new Exception("Le modele n'existe pas");
    }

    public function ajoutModeleBd($NomModele,$Annee){
        $req = "
        INSERT INTO modeles ( NomModele, Annee)
        values ( :NomModele, :Annee)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":NomModele",$NomModele,PDO::PARAM_STR);
        $stmt->bindValue(":Annee",$Annee,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $modele = new Modele($this->getBdd()->lastInsertId(),$NomModele,$Annee);
            $this->ajoutModele($modele);
        }        
    }

    public function suppressionModeleBD($idmodele){
        $req = "
        Delete from modeles where IdModele = :IdModele
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdModele",$idmodele,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            $modele = $this->getModeleById($idmodele);
            unset($modele);
        }
    }

    public function modificationModeleBD($idmodele,$NomModele,$Annee){
        $req = "
        update modeles
        set NomModele = :NomModele, Annee = :Annee
        where IdModele = :IdModele";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdModele",$idmodele,PDO::PARAM_INT);
        $stmt->bindValue(":NomModele",$NomModele,PDO::PARAM_STR);
        $stmt->bindValue(":Annee",$Annee,PDO::PARAM_INT);
        
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $this->getModeleById($idmodele)->setNomModele($NomModele);
            $this->getModeleById($idmodele)->setNomModele($Annee);
           
        }
    }
}