<?php

//ACTUALIZAR CONTRASEÑA DEL USUARIO

require_once("class/basedatos.php");

class user
{
	
	var $usuario;
	var $clave;

	function __construct()
	{
		
	}


	function actualizar()
	{
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();

		$stmt = $cnx->prepare("update usuario set clave=:pass where usuario=:user");

		$stmt->bindValue(":pass",$this->clave);
		$stmt->bindValue(":user",$this->usuario);
		
		$stmt->execute();
	}

	function actualizarDatos(){
		$bd =  new BaseDatos();
		
		$cnx =$bd->conectar();

		$stmt = $cnx->prepare("update usuario set nombre=:nom, apellido=:ape, email=:correo where usuario=:user");

		$stmt->bindValue(":nom",$this->nombre);
		$stmt->bindValue(":ape",$this->apellido);
		$stmt->bindValue(":correo",$this->correo);

		$stmt->bindValue(":user",$this->usuario);
		
		$stmt->execute();

		header("refresh:0;" . constant("URL") . "main");
	}
	
}

?>