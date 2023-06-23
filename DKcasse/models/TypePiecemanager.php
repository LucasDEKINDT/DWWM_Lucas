<?php
require_once "connexion.php";
require_once "TypePiece.php";



class Typepiecemanager extends Model{
    private $typepieces;//tableau de Livre

    public function ajoutPiece($typepiece){
        $this->typepieces[] = $typepiece;
    }

    public function getPieces(){
        return $this->typepieces;
    }

    public function chargementpiece(){
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
        for($i=0; $i < count($this->typepieces);$i++){
            if($this->typepieces[$i]->getIdTypepiece() === $idtypepiece){
                return $this->typepieces[$i];
            }
        }
        throw new Exception("La piece n'existe pas");
    }

    public function ajoutTypepieceBd($Referencepiece,$IdCategorie){
        $req = "
        INSERT INTO typepiece ( Referencepiece, IdCategorie,Stock,IdTypePiece)
        values ( :Referencepiece, :IdCategorie , :Stock , :IdTypePiece)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":Referencepiece",$Referencepiece,PDO::PARAM_STR);
        $stmt->bindValue(":IdCategorie",$IdCategorie,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $typepiece = new Typepiece($this->getBdd()->lastInsertId(),$Referencepiece,$IdCategorie);
            $this->ajoutPiece($typepiece);
        }        
    }

    public function suppressionPieceBD($idtypepiece){
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
        $stmt->bindValue(":IdPiece",$idtypepiece,PDO::PARAM_INT);
        $stmt->bindValue(":Referencepiece",$Referencepiece,PDO::PARAM_STR);
        $stmt->bindValue(":IdCategorie",$IdCategorie,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $this->gettypepieceById($idtypepiece)->setNompiece($Referencepiece);
            $this->gettypepieceById($idtypepiece)->setNompiece($IdCategorie);
            
        }
    }
}