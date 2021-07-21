<?php

//INICIAR SESION

class Sesion extends Controlador
{
	
	function __construct()
	{
		
	}

	function mostrarVista()
	{
		//Variable con el nombre de la VISTA
		$nombre = "sesion/index";
		//Nombre del archivo 
		$fileName = "views/" . $nombre . ".php";
		require_once($fileName);
	}

	function iniciar()
	{
		
		$modelo = $this->cargarModelo("login");
		
		$modelo->usuario=$_POST["txtUser"];
		$modelo->clave=$_POST["txtPass"];

			
		$fila=$modelo->buscar();
		//Esto me devolvera los resultados de una fila.
		//var_dump($fila);

		if ($fila>0) 
		{
			//INICIA SESION
			session_start();
			$_SESSION['usuario']=$_POST["txtUser"];
			
			$this->mensaje1="";

			header("refresh:1;" . constant("URL") . "main");
		}
		else
		{
			//ERROR AL INICIAR SESION

			$this->mensaje2="<center><b><font color='#F39B53' size='4px'>El Nombre de Usuario y/o Contraseña es  incorrecto</b></font></center>";
		}
				
	}

}

?>