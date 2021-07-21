<?php

//VISTA USUARIO Y ACTUALIZAR CONTRASEÑA

class Usuario extends Controlador
{
	
	function __construct()
	{
		
	}
	
	function mostrarVista()
	{
		//Variable con el nombre de la VISTA
		$nombre = "Usuario/index";
		//Nombre del archivo 
		$fileName = "views/" . $nombre . ".php";
		require_once($fileName);
	}

	function actualizar()
	{
		//Recibir los datos enviados por el formulario
		//con el metodo POST y luego procede a ACTUALIZAR en la BD

		//Cargar el modelo
		$modelo = $this->cargarModelo("user");

		//Recibir valores y asignar a propiedades
		$modelo->usuario = $_POST["txtUser"];
		$modelo->clave = $_POST["txtPass"];
		
		//Ejecutar el metodo Actualizar del modelo
		$modelo->actualizar();

		//Enviar un mensaje a la vista
		$this->mensaje = "Contraseña Actualizada";
	}

	

}

?>