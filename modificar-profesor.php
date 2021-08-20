<?php
	include("conexion.php");
	session_start();
	$contador=$_SESSION['contador'];
	for($i=0;$i<=$contador;$i++){
		if (isset($_POST['matricula'.$i.''])) {
			$temp=$_POST['matricula'.$i.''];
			$_SESSION['modificar_matricula']=$temp;
			
		}			
	}
	$matricula=$_SESSION['modificar_matricula'];
	$consulta="SELECT * FROM usuario WHERE matricula='$matricula'";
	$llamado=mysqli_query($con,$consulta);
	$row=mysqli_fetch_array($llamado);
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
			<form action="modificar-profesor_sql.php" method="POST" onsubmit="return validar()">
			<h2>Modificar</h2>
			<input class="inputgrande" type="text" id="nombre" name="nombre" placeholder="Nombre: <?php echo $row[3]; ?>">
			<input type="text" name="apellidop" id="apellidop" placeholder="Apellido P. :<?php echo $row[1];?>" >
			<input class="inputgrande" type="text" id="apellidop" name="apellidom" placeholder="Apellido M. :<?php echo $row[2]; ?>"  >
			<input class="inputgrande" type="email" id="email" name="correo" placeholder="Correo:<?php echo $row[4]; ?>"  >
			<input class="inputchico" type="password" id="contrasena" name="contrasena" placeholder=" Nueva Contraseña" >
			<input type="password" id="repitecontrasena" name="repitecontrasena" placeholder="Confirmar Contraseña">
			<input type="submit" value="Enviar">

			<label><a href="interfazmodulador4.php">Cancelar</a></label>
			
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