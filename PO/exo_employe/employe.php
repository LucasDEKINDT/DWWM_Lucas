<?php

class Employe {
    protected $nom;
    protected $prenom;
    protected $numSecu;
    protected $salaire;
    protected $job;

    public function __construct($nom, $prenom, $numSecu, $salaire, $job) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numSecu = $numSecu;
        $this->salaire = $salaire;
        $this->job = $job;
    }

    public function toString() {
        echo"<br>Nom : " . $this->nom . "<br>Prénom : " . $this->prenom . "<br>Numéro de Sécurité Sociale : " . $this->numSecu . "<br>Salaire : " . $this->salaire . "<br>Job : " . $this->job;
    }

    public function effectueSonJob() {
        echo "<br>";
        switch($this->job){
            case "soudeur":
                echo "je soude les pieces";
                break;
                case "assistant mécanicien":
                    echo "j'assiste le mécaniciens";
                    break;
                    case "magasinière":
                        echo "Je met en magasin les pieces et produits ";
                        break;
        }
    }
}

?>