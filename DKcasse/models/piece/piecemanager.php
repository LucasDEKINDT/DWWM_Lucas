<?php
require_once "models/connexion.php";
require_once "pieces.php";



class Piecemanager extends Model{
    private $pieces;//tableau de Livre

    public function ajoutPiece($piece){
        $this->pieces[] = $piece;
    }

    public function getPieces(){
        return $this->pieces;
    }

    public function chargementpiece(){
        $req = $this->getBdd()->prepare("SELECT * FROM pieces");
        $req->execute();
        $mesPiece = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesPiece as $piece){
            $l = new Piece($piece['IdPiece'],$piece['NomPiece'],$piece['Prix'],$piece['Stock'],$piece['IdTypePiece']);
            $this->ajoutPiece($l);
        }
    }

    public function getPieceById($idpiece){
        for($i=0; $i < count($this->pieces);$i++){
            if($this->pieces[$i]->getIdPiece() === $idpiece){
                return $this->pieces[$i];
            }
        }
        throw new Exception("La piece n'existe pas");
    }

    public function ajoutPieceBd($nompiece,$prix,$stock,$idTypePiece){
        $req = "
        INSERT INTO pieces ( NomPiece, Prix,Stock,IdTypePiece)
        values ( :NomPiece, :Prix , :Stock , :IdTypePiece)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":NomPiece",$nompiece,PDO::PARAM_STR);
        $stmt->bindValue(":Prix",$prix,PDO::PARAM_INT);
        $stmt->bindValue(":Stock",$stock,PDO::PARAM_INT);
        $stmt->bindValue(":IdTypePiece",$idTypePiece,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $piece = new Piece($this->getBdd()->lastInsertId(),$nompiece,$prix,$stock,$idTypePiece);
            $this->ajoutPiece($piece);
        }        
    }

    public function suppressionPieceBD($idpiece){
        $req = "
        Delete from pieces where IdPiece = :IdPiece
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdPiece",$idpiece,PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            $piece = $this->getPieceById($idpiece);
            unset($piece);
        }
    }

    public function modificationPieceBD($idpiece,$nompiece,$prix,$stock,$idTypePiece){
        $req = "
        update pieces
        set NomPiece = :NomPiece, Prix = :Prix, Stock = :Stock , IdTypePiece = IdTypePiece
        where IdPiece = :IdPiece";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":IdPiece",$idpiece,PDO::PARAM_INT);
        $stmt->bindValue(":NomPiece",$nompiece,PDO::PARAM_STR);
        $stmt->bindValue(":Prix",$prix,PDO::PARAM_INT);
        $stmt->bindValue(":Stock",$stock,PDO::PARAM_STR);
        $stmt->bindValue(":IdTypePiece",$idTypePiece,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $this->getPieceById($idpiece)->setNompiece($nompiece);
            $this->getPieceById($idpiece)->setNompiece($prix);
            $this->getPieceById($idpiece)->setNompiece($stock);
            $this->getPieceById($idpiece)->setNompiece($idTypePiece);
        }
    }
}