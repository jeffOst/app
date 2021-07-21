<?php 				 
error_reporting(0);	//ESTO ES PARA QUE
session_start();	//SI YA SE INICIO SESION
if(!($_POST))		//EVITAR REGRESAR AL LOGIN
{					
	if (isset($_SESSION['usuario'])) 
	{
		header("Location: ".constant('URL')."main");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>INICIO DE SESION</title>
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/login.css">
</head>
<body>

	<br><br><br><br>	
	
	<div class="container">
		
		<div class="titulo">
			<h1>Iniciar <span>Sesion</span></h1>
		</div>

		<form method="POST" action="<?php echo constant('URL')?>sesion/iniciar" class="form_login">
					
			<p><label>USUARIO: </label><br><br><input type="text" name="txtUser" placeholder="Usuario" required="" class="input" ></p>
			
			<p><label>CONTRASEÑA:  </label><br><br><input type="password" name="txtPass" placeholder="Contraseña" required="" class="input"></p>
			
			<input type="submit" name="" value="Ingresar" class="btn_submit"><br>	
		
		</form>

		<center>No tienes una cuenta? <br><br><a href="<?php echo constant('URL')?>Registrar" id="registrar">Registrate Ahora</a></center>
		
	</div>		


	<br><br>
	
	<?php 
	//Mensaje recibido desde el controlador sesion
	
	if(isset($this->mensaje1))
	{	//INICIA SESION
		?>
		<center>
			<img src="<?php echo constant('URL') ?>public/img/cargando.gif" width="3%">		<!--MOSTRAR IMAGEN DE CARGANDO-->
		</center><br><br>
		<?php
	}
	else if(isset($this->mensaje2))
	{	
		//ERROR AL INICIAR SESION
		echo $this->mensaje2."<br><br>";	
	}

	?>
	
</body>
</html>