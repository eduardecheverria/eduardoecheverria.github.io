<?php
include("conexion.php");
session_start();
$matricula=$_SESSION['matricula'];
$consulta="SELECT * FROM `usuario` WHERE matricula='$matricula'";
$resultado=mysqli_query($con,$consulta);
$row = mysqli_fetch_array($resultado, MYSQLI_NUM);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modulos FCC</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial scale=1.0">
	<link rel=stylesheet href="estilos/estilosinterfaz.css" type="text/css" media=screen>  
</head>
<body>
	<div id="contenedor">
		<div class="nav"><label class="BUAP">BUAP</label><ul><li><a href="cerrarsesion.php"><input value="Cerrar sesión" type="submit"></a></li></ul></div>
		<div>
			<table class="mostrardatos">
			  <tr>
			    <th>Datos personales</th>
			  </tr>
			   <tr>
			    <th>Matricula</th>
			    <th>Nombre</th>
			    <th>Apellido Paterno</th>
			    <th>Apellido Materno</th>
			    <th>Carrera</th>
			    <th>Correo</th>
			    <th>Cambiar Contraseña</th>
			  </tr>
			  <tr>
			    <td><?php echo $row[0];?></td>
			    <td><?php echo $row[1];?></td>
			    <td><?php echo $row[2];?></td>
			    <td><?php echo $row[3];?></td>
			    <td><?php echo $row[6];?></td>
			    <td><?php echo $row[4];?></td>
			    <td><form id="cambiar" action="cambiar_contrasena.php"><input type="submit" name="Cambiar" value="Cambiar"></form></td>
			  </tr>
			</table>
			
			
	

		</div>
		</div>
		<footer>
			© BUAP 2018 
			por: Eduardo Echeverría Martin del campo ,Omar Juarez Tellez
			Tutorados por la Prof. Hilda Mejia Matias
		</footer>
</body>
</html>