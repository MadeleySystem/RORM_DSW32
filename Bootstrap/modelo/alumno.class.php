<?php
include "database.class.php";

class alumno extends database{
	public $matricula;
	public $nombre;
	public $fecha_nac;
	public $sexo;
	public $carrera;
	public $con;
	public $error;
	
	function __construct(){
		try{
			$this->con=database::startup();
			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
	}
	}
	public function insertar(){
		$data=array('1602288',"Adrian Morales",'1998-03-17','h','tic');
		$sql="insert into alumno(matricula, nombre, fecha_nac, sexo, carrera) values (?,?,?,?,?)";
		
		$stmt=$this->conn->prepare($sql);
		$stmt->execute($data);
		
	}
	public function eliminar(){
	}
	public function buscar(){
	}
	public function actualizar(){
	}
}
$obj=new alumno();
$obj->insertar();

	
?>