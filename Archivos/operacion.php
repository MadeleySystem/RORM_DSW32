<?php 
// todo lo que se encuentre en php los maneja apache
//declaracion de variables y todas las variables inician con $, El isset es para comprobar si una operacion existe o no existe.
//todas las variables llevan un ; al final , $n1=$_REQUEST["n1"]; este es un arreglo, si yo lo pongo $n1="0"; te lo puede poner como un array cadena o ...
$n1=(isset($_REQUEST["n1"]?$_REQUEST["n1"]:0);
$n1=(isset($_REQUEST["n2"]?$_REQUEST["n2"]:0);
echo $n1+$n2;
(operacion)?si:no

?>