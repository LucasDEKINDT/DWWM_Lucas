<?php

class Triangle{

    protected $base;

    protected $hauteur;

    public function __construct($base,$hauteur){
        $this->base= $base;
        $this->hauteur= $hauteur;
    }

	
	public function getBase() {
		return $this->base;
	}
	
	
	public function setBase($base){
		$this->base = $base;
		
	}
    public function affitriangle(){
        echo "la base est : ". $this->base;
        echo "<br>";
        echo "la hauteur est : ".$this->hauteur;
        echo "<br>";
    }

    public function perimetretriangle(){
        $perimetretriangle=0;
        $c²=0;
        $c²=pow($this->base,2)+pow($this->hauteur,2);
        $c= sqrt($c²);
        $perimetretriangle= $c + $this->base+$this->hauteur;
        
        echo"le perimetre du triangle est : " . $perimetretriangle;    
    }
    public function airetriangle(){
        $airetriangle=0;
        $airetriangle=($this->base*$this->hauteur)/2;
        echo "l'aire du triangle est : ". $airetriangle;
    }
}