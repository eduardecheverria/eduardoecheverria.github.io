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
	<link rel=stylesheet href="estilos/interfaz.css" type="text/css" media=screen>  
</head>
<body>
	<div id="contenedor">
		<div class="nav"><label class="BUAP">BUAP</label>
			<ul>
				<li><a href="cerrarsesion.php"><input value="Cerrar sesión" type="submit"></a></li>
				<li><a href="interfazmodulador.php"><input value="Datos personales" type="submit"></a></li>
				<li><a href="interfazmodulador2.php"><input value="Alumnos" type="submit"></a></li>
				<li><a href="interfazmodulador3.php"><input value="Solicitudes" type="submit"></a></li>
				<li><a href="interfazmodulador4.php"><input value="Profesores" type="submit"></a></li>
				<li><a href="interfazmodulador5.php"><input value="Inventario" type="submit"></a></li>
				<li><a href="registro1.php"><input value="Registrar" type="submit"></a></li>
			</ul>
		</div>
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
			  </tr>
			  <tr>
			    <td><?php echo $row[0];?></td>
			    <td><?php echo $row[3];?></td>
			    <td><?php echo $row[1];?></td>
			    <td><?php echo $row[2];?></td>
			    <td><?php echo $row[6];?></td>
			    <td><?php echo $row[4];?></td>
			  </tr>
			</table>
			
			
		</form>

		</div>
		</div>
		<div style="clear: both"></div>
			<footer>
			© BUAP 2018 
			por: Eduardo Echeverría Martin del campo ,Omar Juarez Tellez
			Tutorados por la Prof. Hilda Mejia Matias
		</footer>
</body>
</html>