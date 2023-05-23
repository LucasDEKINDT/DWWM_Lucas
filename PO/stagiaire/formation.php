<?php

class Formation {
    private $intitule;
    private $nbrJours;
    private static $stagiaires = array();

    public function __construct(string $intitule, int $nbrJours, array $stagiaires) {
        $this->intitule = $intitule;
        $this->nbrJours = $nbrJours;
        self::$stagiaires = $this;
    }

    public function getIntitule(): string {
        return $this->intitule;
    }

    public function setIntitule(string $intitule) {
        $this->intitule = $intitule;
    }

    public function getNbrJours(): int {
        return $this->nbrJours;
    }

    public function setNbrJours(int $nbrJours) {
        $this->nbrJours = $nbrJours;
    }

    public static function getStagiaires(): array {
        return self::$stagiaires;
    }

    public static function setStagiaires(array $stagiaires) {
        self::$stagiaires = $stagiaires;
    }

    public function calculerMoyenneFormation(): float {
        $moyenneFormation = 0;
        $stagiaires = self::$stagiaires;
        $count = count($stagiaires);

        if ($count > 0) {
            foreach ($stagiaires as $stagiaire) {
                $moyenneFormation += $stagiaire->calculerMoyenne();
            }

            $moyenneFormation /= $count;
        }

        return $moyenneFormation;
    }

    public function getIndexMax(): int {
        $meilleureMoyenne = 0;
        $indexMax = -1;
        $stagiaires = self::$stagiaires;
        $count = count($stagiaires);

        if ($count > 0) {
            for ($i = 0; $i < $count; $i++) {
                $moyenne = $stagiaires[$i]->calculerMoyenne();
                if ($moyenne > $meilleureMoyenne) {
                    $meilleureMoyenne = $moyenne;
                    $indexMax = $i;
                }
            }
        }

        return $indexMax;
    }

    public function afficherNomMax() {
        $indexMax = $this->getIndexMax();
        if ($indexMax >= 0) {
            $stagiaire = self::$stagiaires[$indexMax];
            echo "Le nom du premier stagiaire ayant la meilleure moyenne est : " . $stagiaire->getNom();
        }
    }

    public function afficherMinMax() {
        $indexMax = $this->getIndexMax();
        if ($indexMax >= 0) {
            $stagiaire = self::$stagiaires[$indexMax];
            echo "La note minimale du premier stagiaire ayant la meilleure moyenne est : " . $stagiaire->getNoteMin();
        }
    }

    public function trouverMoyenneParNom(string $nom) {
        foreach (self::$stagiaires as $stagiaire) {
            if ($stagiaire->getNom() === $nom) {
                echo "La moyenne du stagiaire $nom est : " . $stagiaire->calculerMoyenne();
                return;
            }
        }

        echo "Aucun stagiaire trouvé avec le nom : $nom";
    }
}


?>