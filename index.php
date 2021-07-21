<?php

	
	require_once("config/config.php");

	require_once("class/basedatos.php");

/*
	$bd = new BaseDatos();
	echo "Instanciada la BD<br>";
	echo $bd->usuario . "<br>";
	$bd->conectar();
	echo "Conexion realizada a la BD<br>";
*/
	
	require_once("class/controlador.php");
	require_once("class/ruteador.php");

	$ruteador=new Ruteador();

?>