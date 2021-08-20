<?php
	include("conexion.php");
	session_start();
	$matricula=$_SESSION['matricula'];
	$nueva_contrasena=$_POST['contrasena'];

	$consulta="UPDATE `usuario` SET `contra`= '".$nueva_contrasena."' WHERE `matricula`=".$matricula."";
	$row=mysqli_query($con,$consulta);

	$consulta_tipo_usuario="SELECT `tipo` FROM usuario WHERE matricula=".$matricula."";
	$row_tipo=mysqli_query($con,$consulta_tipo_usuario);
	$convirtiendo=mysqli_fetch_array($row_tipo,MYSQLI_NUM);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modulos FCC</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial scale=1.0">
	<link rel=stylesheet href="estilos/estilosregistro.css" type="text/css" media=screen> 
	<script type="text/javascript" src="validar.js"></script>
</head>
<body>
	<div id="contenedor">
		<div class="nav"><p class="BUAP">BUAP</p><label><a href="#"></a></label></div>
		<div>
			
			<h2>Contraseña cambiada</h2>

			<div class="div-boton">
				<a class="boton" href="<?php echo 'interfaz'.$convirtiendo[0].'.php';?>">Continuar</a>
			</div>
				
			
	

		</div>
	</div>
	<div style="clear: both;"></div>
		<footer>
						© BUAP 2018 
			por: Eduardo Echeverría Martin del campo ,Omar Juarez Tellez
			Tutorados por la Prof. Hilda Mejia Matias
		</footer>
</body>
</html>