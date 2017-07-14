<?php
/**
 * Clase que imprelemnta el obj PDO para abrir y cerrar la conexión a la bd
 * @param conn conserva el objeto a la conexión de la base de datos
 * @param error conserva el error que se pusiera generar durante la ejecución del código.
 */
class database{
	public static function startup(){
		try{
			//se crea el objeto para la conexion de datos
			$conn= new PDO("mysql:host=localhost;dbname=ti32;charset=utf8","root","");
			//Para que genere excepciones a la hora de reportar errores
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			return $conn;
		} catch( PDOException $e){
			
		}
	}
}


?>