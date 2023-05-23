<?php
class Stagiaire {
    private $nom;
    private $notes = array();

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function ajouterNote(float $note) {
        echo $this->notes[] = $note;
    }

    public function calculerMoyenne(): float {
        $total = 0;
        $count = count($this->notes);

        if ($count > 0) {
            foreach ($this->notes as $note) {
                $total += $note;
            }

            return $total / $count;
        }

        return 0;
    }

    public function getNoteMin(): float {
        return min($this->notes);
    }
}

?>