<?php	
	require_once("views/header.php");
?>

<center>

	<br><br>
	<form action="<?php echo constant('URL')?>usuario/actualizar" method="post" id="formm">
		<table>

			<caption>Actualizar Contraseña</caption>
			
			<tr>
				<td><label>Usuario</label></td>
				<td><input type="text" name="txtUser" value="<?php echo $_SESSION['usuario']; ?>" readonly class="inputUser"></td>
			</tr>

			<tr>
				<td><label>Nueva Clave</label></td>
				<td><input type="password" name="" required id="clave1"></td>
			</tr>	

			<tr>
				<td><label>Repita Clave</label></td>
				<td><input type="password" name="txtPass" required id="clave2" onfocusout="fun_repetir()"></td>	
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="" value="Guardar" id="btnGuardar" disabled='true' onclick="fun_repetir()"></td>
			</tr>	

		</table>

	</form>
	
	<label id="mensaje"></label>

</center> 
	
	<br><br>

	<?php

	if(isset($this->mensaje))
	{	//Mensaje recibido desde el controlador
		echo "<center>".$this->mensaje."</center>";	
	}

	require_once("views/footer.php")

?>