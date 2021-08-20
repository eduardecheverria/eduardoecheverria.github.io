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
		<div class="">
			<div class="dividir">
					<table class="mostrardatos">
					  <tr>
					    <th >Datos personales</th>
					  </tr>
					   <tr>
					    <th>Matricula</th>
					    <th>Nombre</th>
					    <th>Apellido Paterno</th>
					    <th>Apellido Materno</th>
					    <th>Cambiar Contraseña</th>
					    <th>Correo</th>
					  </tr>
					  <tr>
					    <td><?php echo $row[0];?></td>
					    <td><?php echo $row[1];?></td>
					    <td><?php echo $row[2];?></td>
					    <td><?php echo $row[3];?></td>
					    <td><form id="cambiar" action="cambiar_contrasena.php"><input type="submit" name="Cambiar" value="Cambiar"></form></td>
					    <td><?php echo $row[4];?></td>
					  </tr>
					</table>
					<form class="sinestilo" method="POST" action="eliminar-solicitud.php">
					<table class="mostrardatos">
						  <tr>
							<th>Nombre de software</th>
						    <th>Notas</th>
						    <th>Link local</th>
						    <th>Link externo</th>
						    <th>Estatus</th>
						    <th>Eliminar</th>

						  </tr>
						<?php
							 $consulta2="SELECT * FROM `solicitud` WHERE matricula=$matricula";
								$resultado2=mysqli_query($con,$consulta2);
								$total=mysqli_num_rows($resultado2);
								$_SESSION['contador']=0;
							if ($total>0) {
								while($row2=mysqli_fetch_array($resultado2,MYSQLI_NUM)){ 
									echo '						
								  <tr>
								    <td>'.$row2[5].'</td>
								    <td>'.$row2[4].'</td>
								    ';
								    if ($row2[2]=="") {
								    	echo'<td><a class="linktabla" href="#">Sin enlace</a></td>';
								    }
								    else{
								    	echo'<td><a class="linktabla" href="http://localhost:8080/tics/software">C:/xampp/htdocs/tics/software/'.$row2[2].'</a></td>
								    	 ';
								    }
								    echo'
									    <td><a class="linktabla" href="'.$row2[3].'">'.$row2[3].'</a></td>';
									    if ($row2[6]=="En espera") {
									    	echo'<td style="color:red;">'.$row2[6].'</td>';
									    }
									    if ($row2[6]=="En progreso") {
									    	echo'<td style="color:orange;">'.$row2[6].'</td>';
									    }
									    if ($row2[6]=="Completada") {
									    	echo'<td style="color:Green;">'.$row2[6].'</td>';
									    }
									    echo'<td><input type="checkbox" name="matricula'.$_SESSION['contador'].'" value="'.$row2[0].'"></td>
									  </tr> ';
								  $_SESSION['contador']++;}
							}
							else{
							 echo"<td>Sin solicitudes</td>";
							}
								   
						  ?>
						 
						
						</table>
						<input class="input-tabla" type="submit" name="Eliminar solicitud" value="Eliminar solicitud">
					</form>
					
			</div>
			<div class="dividir1">
				<form action="cargararchivo.php" method="POST" enctype="multipart/form-data">
					<h2>Solicitar software</h2>
					<input type="file" name="archivo" placeholder="Software solicitado">
					<input type="text" name="nombre" placeholder="Nombre del software" required>
					<input type="text" name="url" placeholder="Url de descarga">
					<input type="text" name="descripcion" placeholder="Notas">
					<input type="submit" class="enviar" value="Enviar solicitud">
				</form>
				
			</div>

		</div>
		</div>
		<div style="clear: both; margin-bottom:10px;"></div>
			<footer>
			© BUAP 2018 
			por: Eduardo Echeverría Martin del campo ,Omar Juarez Tellez
			Tutorados por la Prof. Hilda Mejia Matias
		</footer>
</body>
</html>