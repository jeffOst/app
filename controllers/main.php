<?php

class Main extends Controlador
{
	
	function __construct()
	{
		error_reporting(0);		
	}

	function mostrarVista()
	{
		//Ejecutar Metodo para mostrar Datos del Usuario
		$this->mostrarDatos();

		//Variable con el nombre de la VISTA
		$nombre = "main/index";
		//Nombre del archivo 
		$fileName = "views/" . $nombre . ".php";
		require_once($fileName);

	}

	function mostrarDatos()
	{
		//Muestra los datos del Usuario Actual
		session_start();
		$modelo = $this->cargarModelo("login");
		//MOSTRAR EL USUARIO
		$this->fila = $modelo->mostrarDatosUser();
	}


	function updateDatos()
	{
		$modelo = $this->cargarModelo("user");

		//Recibir valores y asignar a propiedades
		$modelo->usuario = $_POST["txtUsuario"];
		$modelo->nombre = $_POST["txtNombre"];
		$modelo->apellido = $_POST["txtApellido"];
		$modelo->correo = $_POST["txtCorreo"];
	
		//Ejecutar el metodo Actualizar del modelo
		$modelo->actualizarDatos();

	}

}

?>