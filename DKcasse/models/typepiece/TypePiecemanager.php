<?php
require_once "models/connexion.php";
require_once "TypePiece.php";



class Typepiecemanager extends Model{
    private $typepieces;//tableau de Livre

    public function ajoutTypepiece($typepiece){
        $this->typepieces[] = $typepiece;
    }

    public function getTypepieces(){
        return $this->typepieces;
    }

    public function chargementTypepiece(){
        $req = $this->getBdd()->prepare("SELECT * FROM typepiece");
        $req->execute();
        $mestypepiece = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mestypepiece as $typepiece){
            $l = new Typepiece($typepiece['IdTypePiece'],$typepiece['Referencepiece'],$typepiece['IdCategorie']);
            $this->ajoutTypepiece($l);
        }
    }

    public function getTypepieceById($idtypepiece){
        $req = $this->getBdd()->prepare("SELECT * FROM typepiece WHERE IdTypePiece = :IdTypePiece");
        $req->bindValue(":IdTypePiece", $idtypepiece, PDO::PARAM_INT);
        $req->execute();
        $typepiece = $req->fetch(PDO::FETCH_ASSOC);
        $req->closeCursor();
    
         // Assurez-vous que $piece contient les données correctes
    
        if (!$typepiece) {
            throw new Exception("Le type de la  pièce n'existe pas");
        }
    
        return new Typepiece($typepiece['IdTypePiece'], $typepiece['Referencepiece'], $typepiece['IdCategorie']);
    }

    public function ajoutTypepieceBd($Referencepiece,$IdCategorie){
        $req = "
        INSERT INTO typepiece ( Referencepiece, IdCategorie)
        values ( :Referencepiece, :IdCategorie)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":Referencepiece",$Referencepiece,PDO::PARAM_STR);
        $stmt->bindValue(":IdCategorie",$IdCategorie,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $typepiece = new Typepiece($this->getBdd()->lastInsertId(),$Referencepiece,$IdCategorie);
            $this->ajoutTypepiece($typepiece);
        }        
    }

    public function suppressionTypepieceBD($idtypepiece){
        $req = "
        Delete from typepiece where IdTypepiece = :IdTypepiece
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdTypepiece",$idtypepiece,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            $typepiece = $this->getTypepieceById($idtypepiece);
            unset($typepiece);
        }
    }

    public function modificationTypepieceBD($idtypepiece,$Referencepiece,$IdCategorie){
        $req = "
        update typepiece
        set Referencepiece = :Referencepiece, IdCategorie = :IdCategorie
        where IdTypepiece = :IdTypepiece";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdTypepiece",$idtypepiece,PDO::PARAM_INT);
        $stmt->bindValue(":Referencepiece",$Referencepiece,PDO::PARAM_STR);
        $stmt->bindValue(":IdCategorie",$IdCategorie,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $this->gettypepieceById($idtypepiece)->setReferencepiece($Referencepiece);
            $this->gettypepieceById($idtypepiece)->setReferencepiece($IdCategorie);
            
        }
    }
}