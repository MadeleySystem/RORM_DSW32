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
	public function insertar($data){
		try{
		
		$sql="insert into alumno(matricula, nombre, fecha_nac, sexo, carrera) values (?,?,?,?,?)";
		
		$stmt=$this->con->prepare($sql);
		$stml->execute(array(
			$data['Matricula'],
			$data['Nombre'],
			$data['Fecha_na'],
			$data['sexo'],
			$data['carrera']
			));
	}catch(PDOException $e){
		$this->error=$e->getMessage();
	}
	}
	public function eliminar($id){
		try{
			$sql="delete from alumno were id=?";
			$stmt=$this->con->prepare
	}
	public function buscar($id){
		try
	{
		$sql="select *fom alumno";
		$stmt=$this->con-> prepare($sql);
		$stmt->execute(array(
		
	public function actualizar($data){
	try{
		$sql="update alumno set matricula=?, nombre=?, fecha nac_na=?, sexo=?, carrera=? where matricula=?";
		$stmt=$this->con ->prepare($sql);
		$stmt->execute(array(
			$data['Matricula'],
			$data['Nombre'],
			$data['Fecha_na'],
			$data['sexo'],
			$data['carrera'],
			$data['matricula']
			));	

	
?>