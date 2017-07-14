<?php
class figura{
	public $nombre;
	public $color;
	 
function __construct(){
	$this -> nombre="";
	$this -> color="";
}
}
class triangulo extends figura{
	public $base;
	public $altura;
function __construct(){
	$this->base=0;
	$this->altura=0;
}
function area(){
	return $this->base*$this->altura/2;
}

function inicializar ($n,$c,$base,$altura){
	$this-> nombre=$n;
	$this-> color=$c;
	$this-> base=$base;
	$this-> altura=$altura;
}
}
$figura = new triangulo();
$figura-> inicializar("triangulito","#1CE5DC",270,10);
echo $figura-> area();


?>