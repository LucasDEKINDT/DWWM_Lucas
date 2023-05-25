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
        return "<br>Nom : " . $this->nom . "<br>Prénom : " . $this->prenom . "<br>Numéro de Sécurité Sociale : " . $this->numSecu . "<br>Salaire : " . $this->salaire . "<br>Job : " . $this->job;
    }

    public function effectueSonJob() {
        echo $this->prenom . " " . $this->nom . " effectue son travail de " . $this->job . ".<br>";
    }
}

?>