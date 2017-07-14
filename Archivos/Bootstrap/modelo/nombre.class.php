<?php
class figura{
	public $nombre;
	public $color;
	
	function __construct(){
		$this->nombre="";
		$this->color="";
	}
}
class cuadrado extends figura{
	public $lado;
	
	function __construct(){
		$this->lado=0;
	}
	function area(){		
		return $this->lado*$this->lado;
	}
	function inicializar($n,$c,$lado){
		$this->nombre=$n;
		$this->color=$c;
		$this->lado=$lado;
	}
}
class rombo extends figura{
	public $d_mayor;
	public $d_menor;
	
	function __construct(){
		$this->d_mayor=0;
		$this->d_menor=0;
	}
	function area(){		
		return ($this->d_mayor*$this->d_menor)/2;
	}
	function inicializar($n,$c,$d_mayor,$d_menor){
		$this->nombre=$n;
		$this->color=$c;
		$this->d_mayor=$d_mayor;
		$this->d_menor=$d_menor;
	}
}
$figura= new cuadrado();
$figura->inicializar("cuadradito","#CCA326",270);
echo $figura->area();
echo "<br>";
$figura= new rombo();
$figura->inicializar("cuadradito","#CCA326",270,350);
echo $figura->area();
?>