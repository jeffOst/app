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
	<title>REGISTRARSE</title>
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/login.css">
	<script type="text/javascript">

		function fun_change()
		{
			//Leer el valor actual
			var nombre = document.getElementById("nom").value.toUpperCase();
			var apellido = document.getElementById("ape").value.toUpperCase();
			//Asignar el nuevo valor
			document.getElementById("nom").value = nombre;
			document.getElementById("ape").value = apellido;
		}

		
		function fun_repetir(){
			
			var clave1= document.getElementById("clave1").value;
			var clave2 = document.getElementById("clave2").value;
			var botonEnviar = document.getElementById('agregar');

			if((clave1==clave2)||(clave2==clave1)){
				document.getElementById("mensaje").innerHTML = "";
				botonEnviar.disabled = false;
			}
			else
			{				
				document.getElementById("mensaje").innerHTML = "💡  Las contraseñas no coinciden";
				botonEnviar.disabled = true;
			}
		}


	    function soloLetras(e)
	    {
	       key = e.keyCode || e.which;
	       tecla = String.fromCharCode(key).toLowerCase();
	       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	       especiales = "8-37-39-46";

	       tecla_especial = false

	       for(var i in especiales){
	            if(key == especiales[i]){
	                tecla_especial = true;
	                break;
	            }
	        }

	        if(letras.indexOf(tecla)==-1 && !tecla_especial){
	            return false;
	        }
	    }

	</script>
</head>
<body>
	
	<br><br><br><br>
	
	<div class="containerReg">	

		<div class="titulo">
			<h1>Registro <span>de Usuario</span></h1>
		</div>

	<form method="POST" action="<?php echo constant('URL')?>Registrar/agregar" class="form_reg">
		
		<div class="alinear">
				
			<p><label>USUARIO:</label><br><br><input type="text" name="txtUser" placeholder="Usuario" required="" class="input" ></p>
			
			<p><label>EMAIL:</label><br><br><input type="email" name="txtEmail" placeholder="Email" required="" class="input" ></p>
		
		</div>

		<div class="alinear">
		
			<p><label>CONTRASEÑA:</label><br><br><input type="password" name="txtPass" placeholder="Contraseña" required="" class="input"  id="clave1"></p>
			
			<p><label>REPETIR CONTRASEÑA:</label><br><br><input type="password" id="clave2" placeholder="Repita Contraseña" required="" class="input" onfocusout="fun_repetir()"></p> 
		
		</div>

		<label id="mensaje"></label>

		<div class="alinear">

			<p><label>NOMBRE:</label><br><br><input type="text" name="txtNom" placeholder="Nombre" required="" class="input"  onkeypress="return soloLetras(event)" id="nom" onchange="fun_change()"></p>	

			<p><label>APELLIDO:</label><br><br><input type="text" name="txtApe" placeholder="Apellido" required="" class="input"  onkeypress="return soloLetras(event)" id="ape" onchange="fun_change()"></p>

		</div>	

		<input type="submit" name="" value="Registrarse" id="agregar" onclick="fun_repetir()">

	</form>

	<center><a href="<?php echo constant('URL')?>sesion" id="cancelar"><input type="submit" value="Cancelar" ></a></center>

	</div>


	<br><br>
	<?php 
	if(isset($this->mensaje))
	{	//Mensaje recibido desde el controlador
		echo $this->mensaje."<br><br>";	
	}?>
	

</body>
</html>