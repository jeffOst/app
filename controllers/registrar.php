<?php

//REGISTRAR USUARIO

class Registrar extends Controlador
{
	
	function __construct()
	{
		
	}

	function mostrarVista()
	{
		//Variable con el nombre de la VISTA
		$nombre = "registrar/index";
		//Nombre del archivo 
		$fileName = "views/" . $nombre . ".php";
		require_once($fileName);
	}

	function agregar()
	{
		
		$modelo = $this->cargarModelo("login");

		$modelo->usuario = $_POST["txtUser"];
		$modelo->clave = $_POST["txtPass"];
		$modelo->nombre = $_POST["txtNom"];
		$modelo->apellido = $_POST["txtApe"];
		$modelo->email = $_POST["txtEmail"];

		session_start();

		$fila=$modelo->verificar();
		
		if ($fila>0) 
		{
			$this->mensaje="<br><center><b><font color='#F39B53' size='4px'>El Usuario Ingresado ya existe, Intentelo Denuevo</b></font></center>";
		}
		else
		{
			$_SESSION['usuario']=$_POST["txtUser"];

			$modelo->agregar();
			
			$this->mensaje="<br><center><b><font color='#F39B53' size='4px'>Usuario Creado con exito, Iniciando Sesion...</b></font></center>";
			
			header("refresh:1;" . constant("URL") . "main");
		}

	}

}

?>