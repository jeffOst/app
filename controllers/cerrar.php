<?php

//CERRAR SESION

class cerrar extends Controlador
{
	
	function __construct()
	{
		$this->cerrando();
	}

	function cerrando()
	{
		session_start();
		session_destroy(); //Esto es para cerrar la sesion
		echo "<br><br><br><center><h1>Cerrando Sesion...</h1></center>";
		error_reporting(0);	//Esto es para quitar mensajes de errores
		header("refresh:1;".constant("URL"));
	}

}

?>