<?php
    class Humain extends Personnage{
        private $level;

        public function __construct($nom,$classe,$attaque,$pv,$forceDuBien,$level){
            parent::__construct($nom,$classe,$attaque,$pv,$forceDuBien);
            $this->level = $level;
            
        }
        public function __toString(){

            $txt = "";
            $txt .= parent::__toString();
            $txt .= "Level : " . $this->level . "<br>";
            return $txt;  
        }
        public function gagneUnNiveau(){
            $this->level++;
        }
        public function modifStats($attaque,$pv){
            $this->pv = $pv;
            $this->attaque = $attaque;
            $this->afficherDegat();
            echo "<br> Mes PV sont de : " . $this->pv;
        }





    }


 ?>