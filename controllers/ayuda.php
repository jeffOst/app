<?php

class Ayuda extends Controlador
{
	
	function __construct()
	{
		
	}

	function mostrarVista()
	{
		//Variable con el nombre de la VISTA
		$nombre = "Ayuda/index";
		//Nombre del archivo 
		$fileName = "views/" . $nombre . ".php";
		require_once($fileName);
	}

}

?>