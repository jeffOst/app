<?php

class Ruteador
{
	
	function __construct()
	{
		$this->iniciar();
	}

	function iniciar(){
		
		if (isset($_GET["url"])) {
			
			$url=$_GET["url"];
		}else{
			
			$url="sesion";
		}

		$url=rtrim($url,"/");

		$url=explode("/", $url);

		$filename="controllers/".$url[0].".php";

		if (file_exists($filename)) {

			require_once($filename);
			$controlador = new $url[0];

			if (isset($url[1])) {
				$controlador->{$url[1]}();
			}
			
			$controlador->mostrarVista();

		}else{
			echo "<br><br><center><h1>Lo sentimos, ha ocurrido un error</h1></center>";
		}
	}

}

?>