<?php
require_once "connexion.php";
require_once "modeles.php";



class Modelemanager extends Model{
    private $modeles;//tableau de Modele

    public function ajoutmodele($modele){
        $this->modeles[] = $modele;
    }

    public function getModeles(){
        return $this->modeles;
    }

    public function chargementmodele(){
        $req = $this->getBdd()->prepare("SELECT * FROM modeles");
        $req->execute();
        $mesModele = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesModele as $modele){
            $l = new Modele($modele['IdModele'],$modele['NomModele'],$modele['Annee']);
            $this->ajoutmodele($l);
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

    public function ajoutModeleBd($nommodele,$annee){
        $req = "
        INSERT INTO modeles ( NomModele, Annee)
        values ( :NomModele, :Annee)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":NomModele",$nommodele,PDO::PARAM_STR);
        $stmt->bindValue(":Annee",$annee,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $modele = new Modele($this->getBdd()->lastInsertId(),$nommodele,$annee);
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

    public function modificationModeleBD($idmodele,$nommodele,$annee){
        $req = "
        update modele
        set NomPiece = :NomPiece, Prix = :Prix, Stock = :Stock , IdTypePiece = IdTypePiece
        where IdPiece = :IdPiece";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdPiece",$idmodele,PDO::PARAM_INT);
        $stmt->bindValue(":NomPiece",$nommodele,PDO::PARAM_STR);
        $stmt->bindValue(":Prix",$annee,PDO::PARAM_INT);
        
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $this->getModeleById($idmodele)->setNomModele($nommodele);
            $this->getModeleById($idmodele)->setNomModele($annee);
           
        }
    }
}