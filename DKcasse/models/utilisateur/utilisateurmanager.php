<?php
require_once "models/connexion.php";
require_once "utilisateur.php";

class UtilisateurManager extends Model{
    private $utilisateurs; // tableau d'Utilisateur

    public function ajoutUtilisateur($utilisateur){
        $this->utilisateurs[] = $utilisateur;
    }

    public function getUtilisateurs(){
        return $this->utilisateurs;
    }

    public function chargementUtilisateurs(){
        $req = $this->getBdd()->prepare("SELECT * FROM utilisateur");
        $req->execute();
        $mesUtilisateurs = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesUtilisateurs as $utilisateur){
            $u = new Utilisateur(
                $utilisateur['IdUtilisateur'],
                $utilisateur['Grade'],
                $utilisateur['NomUtilisateur'],
                $utilisateur['PrenomUtilisateur'],
                $utilisateur['EmailUtilisateur'],
                $utilisateur['MotDePasse']
            );
            $this->ajoutUtilisateur($u);
        }
    }

    public function getUtilisateurById($Idutilisateur){
        for($i=0; $i < count($this->utilisateurs); $i++){
            if($this->utilisateurs[$i]->getIdutilisateur() === $Idutilisateur){
                return $this->utilisateurs[$i];
            }
        }
        throw new Exception("L'utilisateur n'existe pas");
    }

    public function ajoutUtilisateurBd($Idutilisateur, $Grade, $Nomutilisateur, $Prenomutilisateur, $Emailutilisateur, $Motdepasse){
        $req = "
        INSERT INTO utilisateur (Idutilisateur, Grade, Nomutilisateur, Prenomutilisateur, Emailutilisateur, Motdepasse)
        values (:Idutilisateur, :Grade, :Nomutilisateur, :Prenomutilisateur, :Emailutilisateur, :Motdepasse)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":Idutilisateur", $Idutilisateur, PDO::PARAM_INT);
        $stmt->bindValue(":Grade", $Grade, PDO::PARAM_BOOL);
        $stmt->bindValue(":Nomutilisateur", $Nomutilisateur, PDO::PARAM_STR);
        $stmt->bindValue(":Prenomutilisateur", $Prenomutilisateur, PDO::PARAM_STR);
        $stmt->bindValue(":Emailutilisateur", $Emailutilisateur, PDO::PARAM_STR);
        $stmt->bindValue(":Motdepasse", $Motdepasse, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $utilisateur = new Utilisateur($Idutilisateur, $Grade, $Nomutilisateur, $Prenomutilisateur, $Emailutilisateur, $Motdepasse);
            $this->ajoutUtilisateur($utilisateur);
        }        
    }

    public function suppressionUtilisateurBD($Idutilisateur){
        $req = "
        DELETE FROM utilisateur WHERE Idutilisateur = :Idutilisateur
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":Idutilisateur", $Idutilisateur, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            $utilisateur = $this->getUtilisateurById($Idutilisateur);
            unset($utilisateur);
        }
    }

    public function modificationUtilisateurBD($Idutilisateur, $Grade, $Nomutilisateur, $Prenomutilisateur, $Emailutilisateur, $Motdepasse){
        $req = "
        UPDATE utilisateurs
        SET Grade = :Grade, Nomutilisateur = :Nomutilisateur, Prenomutilisateur = :Prenomutilisateur, Emailutilisateur = :Emailutilisateur, Motdepasse = :Motdepasse
        WHERE Idutilisateur = :Idutilisateur";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":Idutilisateur", $Idutilisateur, PDO::PARAM_INT);
        $stmt->bindValue(":Grade", $Grade, PDO::PARAM_BOOL);
        $stmt->bindValue(":Nomutilisateur", $Nomutilisateur, PDO::PARAM_STR);
        $stmt->bindValue(":Prenomutilisateur", $Prenomutilisateur, PDO::PARAM_STR);
        $stmt->bindValue(":Emailutilisateur", $Emailutilisateur, PDO::PARAM_STR);
        $stmt->bindValue(":Motdepasse", $Motdepasse, PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $this->getUtilisateurById($Idutilisateur)->setGrade($Grade);
            $this->getUtilisateurById($Idutilisateur)->setNomutilisateur($Nomutilisateur);
            $this->getUtilisateurById($Idutilisateur)->setPrenomutilisateur($Prenomutilisateur);
            $this->getUtilisateurById($Idutilisateur)->setEmailutilisateur($Emailutilisateur);
            $this->getUtilisateurById($Idutilisateur)->setMotdepasse($Motdepasse);
        }
    }
}
