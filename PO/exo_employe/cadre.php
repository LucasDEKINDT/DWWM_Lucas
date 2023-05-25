<?php

class Cadre extends Employe {
    public $listeEmploye;

    public function __construct($nom, $prenom, $numSecu, $salaire, $job) {
        parent::__construct($nom, $prenom, $numSecu, $salaire, $job);
        $this->listeEmploye = array();
    }

    public function manage() {
        echo "******************************************<br>Le cadre " . $this->prenom . " " . $this->nom . " gère les employés suivants :<br>";
        foreach ($this->listeEmploye as $employe) {
            echo $employe->toString() . "<br>";
        }
    }

    public function augmenteUnSalarie(Employe $emp, $pourcentage) {
        $ancienSalaire = $emp->salaire;
        $augmentation = $ancienSalaire * ($pourcentage / 100);
        $nouveauSalaire = $ancienSalaire + $augmentation;
        $emp->salaire = $nouveauSalaire;

        echo "******************************************<br>Le salaire de " . $emp->prenom . " " . $emp->nom . " a été augmenté de " . $pourcentage . "%.<br>";
        echo "<br>Ancien salaire : " . $ancienSalaire . " - Nouveau salaire : " . $nouveauSalaire . "<br>";
    }
}

?>