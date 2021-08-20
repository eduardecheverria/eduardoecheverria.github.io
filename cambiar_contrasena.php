<?php
	include("conexion.php");
	session_start();

	$matricula=$_SESSION['matricula'];
	$consulta="SELECT * FROM usuario WHERE matricula='$matricula'";
	$llamado=mysqli_query($con,$consulta);
	$row=mysqli_fetch_array($llamado);
	$consulta_tipo_usuario="SELECT `tipo` FROM usuario WHERE matricula=".$matricula."";
	$row_tipo=mysqli_query($con,$consulta_tipo_usuario);
	$convirtiendo=mysqli_fetch_array($row_tipo,MYSQLI_NUM);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modulos FCC</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial scale=1.0">
	<link rel=stylesheet href="estilos/modificar.css" type="text/css" media=screen> 
	<script type="text/javascript" src="validar.js"></script>
</head>
<body>
	<div id="contenedor">
		<div class="nav"><p class="BUAP">BUAP</p><label><a href=""></a></label></div>
		<div>
			<form action="cambiar_contrasena_query.php" method="POST" onsubmit="return validarcontra()">
			<h2>Modificar</h2>
			
			<input class="inputchico" type="password" id="contrasena" name="contrasena" placeholder=" Nueva Contraseña" >
			<input type="password" id="repitecontrasena" name="repitecontrasena" placeholder="Confirmar Contraseña">
			<input type="submit" value="Enviar">

			<label><a href="<?php echo 'interfaz'.$convirtiendo[0].'.php';?>">Cancelar</a></label>
			
		</form>
		</div>
	</div>
	<div style="clear: both; margin-bottom: 50px;"></div>
			<footer>
			© BUAP 2018 
			por: Eduardo Echeverría Martin del campo ,Omar Juarez Tellez
			Tutorados por la Prof. Hilda Mejia Matias
		</footer>
</body>
</html>