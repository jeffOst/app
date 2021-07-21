<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/main.css">
	
	<script type="text/javascript">
		function fun_repetir(){
			
			var clave1= document.getElementById("clave1").value;
			var clave2 = document.getElementById("clave2").value;
			var botonEnviar = document.getElementById('btnGuardar');

			if ( (clave1=="")&&(clave2=="") ) {
				document.getElementById("mensaje").innerHTML = "";
				botonEnviar.disabled = true;
			}else if(clave1==clave2){
				document.getElementById("mensaje").innerHTML = "";
				botonEnviar.disabled = false;
			}
			else
			{				
				document.getElementById("mensaje").innerHTML = "💡  Las contraseñas no coinciden";
				botonEnviar.disabled = true;
			}
		}
	</script>
</head>

<?php

	session_start();

	error_reporting(0);	
	//Esto es para ocultar errores.
	//Se pone cuando se termina todo el proyecto.

	$varsesion = $_SESSION['usuario'];

	if ($varsesion==null || $varsesion=='') {
		echo "<br><br><br><h1>Usted no tiene Autorizacion</h1>";
		echo "<br><center><h2>Tiene que Iniciar Sesion!</center></h2>";
		die();	//es para que no cargue los demas elementos de la pagina
	}

?>

<body>

	<div id="cabecera">
		
		<ul>
			<li><a href="<?php echo constant('URL')?>main">Inicio</a></li>
			<li><a href="<?php echo constant('URL')?>Servicios">Servicios</a></li>
			<li><a href="<?php echo constant('URL')?>Ayuda">Centro de Ayuda</a></li>
			<li><a href="<?php echo constant('URL')?>Usuario">Mi Usuario</a></li>
			<li class="liDerecha"><a href="<?php echo constant('URL')?>cerrar">Cerrar Sesion</a></li>
		</ul>
		
	</div>