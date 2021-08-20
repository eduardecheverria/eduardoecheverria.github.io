<!DOCTYPE html>
<html>
<head>
	<title>Modulos FCC</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial scale=1.0">
	<link rel=stylesheet href="estilos/modificar.css" type="text/css" media=screen> 
	<script type="text/javascript" src="contachkbox.js"></script>
</head>
<body>
	<div id="contenedor">
		<div class="nav"><p class="BUAP">BUAP</p><label><a href=""></a></label></div>
		<div>
			<form id="form1" class="sinestilo" method="POST" action="">
				<table class="mostrardatos">
				   <tr>
					<th>Matricula</th>
				    <th>Nombre</th>
				    <th>Apellido Paterno</th>
				    <th>Apellido Materno</th>
				    <th>Carrera</th>
				    <th>Correo</th>
				    <th>Seleccionar</th>
				  </tr>
				<?php
					include("conexion.php");
					 $consulta2="SELECT * FROM `usuario` WHERE `tipo`= 'estudiante'";
						$resultado2=mysqli_query($con,$consulta2);
						$_SESSION['contador']=0;
					 while($row2=mysqli_fetch_array($resultado2,MYSQLI_NUM)){ 
							echo '						
						  <tr>
						    <td>'.$row2[0].'</td>
						    <td>'.$row2[1].'</td>
						    <td>'.$row2[2].'</td>
						    <td>'.$row2[3].'</td>
						    <td>'.$row2[5].'</td>
						    <td>'.$row2[4].'</td>
						    <td><input type="checkbox"  name="matricula'.$_SESSION['contador'].'" value="'.$row2[0].'"></td>
						  </tr>';
						  $_SESSION['contador']++;}
						  echo'<input type="radio" style="visibility:hidden;" id="variable-oculta"  value="'.$_SESSION['contador'].'" name=""/>';
							

				  ?>
				  
				</table>
				
				<input type="submit" class="eliminar" name="modificar" value="Modificar" onclick="contar();">
			
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