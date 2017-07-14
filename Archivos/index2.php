<?php

include("model/alumno.class.php");
$data=array('1602288',"Adrian Morales",'1998-03-17','h','tic');
		

$obj=new alumno();
$obj->insertar($data);


?>