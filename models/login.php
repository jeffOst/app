<?php

require_once("class/basedatos.php");

class login
{
	//Propiedades (atributos)
	var $usuario;
	var $clave;
	var $nombre;
	var $apellido;
	var $email;
		
	//Metodos
	function __construct()
	{
		
	}

	function mostrarDatosUser()
	{

		$bd = new BaseDatos();
		$cnx = $bd->conectar();
		$stmt = $cnx->prepare("select * from usuario where usuario=:dato");
		$stmt->bindValue(":dato",$_SESSION['usuario']);
		$stmt->execute();
		$fila = $stmt->fetch();

		//Devolver los datos del Usuario en la sesion actual
		return $fila;
		
	}


	/************************************************************************/
	//SESION:

	function buscar()
	{
		//BUSCA SI EL USUARIO Y CLAVE EXISTE EN LA BD PARA INICIAR SESION

		$bd = new BaseDatos();

		$cnx = $bd->conectar();

		$buscar= $cnx->prepare("select * from usuario where usuario=:dato1 and clave=:dato2");

		$buscar->bindValue(":dato1",$this->usuario);
		$buscar->bindValue(":dato2",$this->clave);
		
		$buscar->execute();
			
		$fila=$buscar->Fetch();
	
		return $fila;
		
	}


	/************************************************************************/
	//REGISTRAR:

	function verificar()	//VERIFICA SI EL USUARIO YA EXISTE EN LA BD
	{	
		
		$bd = new BaseDatos();

		$cnx = $bd->conectar();
	
		$buscar= $cnx->prepare("select * from usuario where usuario=:dato1");

		$buscar->bindValue(":dato1",$this->usuario);
				
		$buscar->execute();
			
		$fila=$buscar->Fetch();

		return $fila;

	}

	function agregar()	//ES PARA REGISTRAR UN NUEVO USUARIO
	{
		
		$bd =  new BaseDatos();

		$cnx =$bd->conectar();

		$stmt= $cnx->prepare("insert into usuario(usuario,clave,nombre,apellido,email) values(:dato1,:dato2,:dato3,:dato4,:dato5)");
		
		$stmt->bindValue(":dato1",$this->usuario);
		$stmt->bindValue(":dato2",$this->clave);
		$stmt->bindValue(":dato3",$this->nombre);
		$stmt->bindValue(":dato4",$this->apellido);
		$stmt->bindValue(":dato5",$this->email);
			
		$stmt->execute();
			
	}		

}

?>