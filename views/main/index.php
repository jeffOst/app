<?php
	require_once("views/header.php");
	//var_dump($this->fila);
	if (isset($this->fila)) {
			$fila = $this->fila;
		}

	echo "<center><h1>Bienvenido ".$_SESSION['usuario']."</h1></center>";
?>


	<!--MOSTRAR VENTANA MODAL-->
	<div class="ventana" id="vent">
					
		<form action="<?php echo constant('URL')?>main/updateDatos" method="post">
				
			<label>Usuario: </label>
			<input type="text" name="txtUsuario" value="<?php echo $_SESSION['usuario']; ?>" readonly class="inputUser">	
				
			<label>Nombre:</label>
			<input type="text"  name="txtNombre" value="<?php echo $fila["nombre"]?>" required>
				
			<label>Apellidos: </label>
			<input type="text" name="txtApellido" value="<?php echo $fila["apellido"];?>" required>
				
			<label>Correo:</label>
			<input type="email" name="txtCorreo" value="<?php echo $fila["email"];?>" required>
			<br><br>
			<input type="submit" name="" value="Guardar">

		</form>
	
		<a href="javascript:cerrar()">CERRAR</a>

	</div>


	<!--MOSTRAR IMAGEN DE USUARIO-->
	<center>
		<img src="<?php echo constant('URL') ?>public/img/avatar.png" id="avatar"><br><br><hr>
	</center><br>


	<!--MOSTRAR INFORMACION DE USUARIO-->
	<center><h3>Informacion</h3></center><br>

	<div id="textoMain">
		<div>
			<label>Nombre: <?php echo $fila["nombre"];?></label><br>
			<label>Apellido: <?php echo $fila["apellido"];?></label>
		</div>
		<div>
			<label>Email: <?php echo $fila["email"];?></label><br>
			<label>Usuario: <?php echo $fila["usuario"];?></label>
		</div>
	</div>

	
	<!--MOSTRAR ICONO DE EDITAR USUARIO-->
	<center>
		<section id="mostrar">
			<a href="javascript:abrir()">✍Editar</a>
		</section>
	</center>


	<!--JAVASCRIPT-->
	<script type="text/javascript">
		function abrir()
		{
			document.getElementById('vent').style.display="block";
		}

		function cerrar()
		{
			document.getElementById("vent").style.display="none";
		}
	</script>

	
	<?php 

	require_once("views/footer.php");

?>