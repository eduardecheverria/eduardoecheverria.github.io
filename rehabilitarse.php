<?php 
	include("conexion.php");
	session_start();
	$usuario=$_SESSION['usuario'];
	$datos="SELECT * FROM `usuario` WHERE usuario='$usuario'";
	$resultado=mysqli_query($con,$datos);
	$row = mysqli_fetch_array($resultado, MYSQLI_NUM);
	$datos1="SELECT * FROM `deportista` WHERE usuario_idusuario='$row[0]'";
	$resultado1=mysqli_query($con,$datos1);
	$row1 = mysqli_fetch_array($resultado1, MYSQLI_NUM);
	$datos2="SELECT idhistorialmedico FROM `historialmedico` WHERE deportista_idDeportista='$row1[0]'";
	$resultado2=mysqli_query($con,$datos2);
	$row2 = mysqli_fetch_array($resultado2, MYSQLI_NUM);
	$datos3="SELECT * FROM antecedentehereditario WHERE historialmedico_idhistorialmedico='$row2[0]'";
	$resultado3=mysqli_query($con,$datos3);
	$datos4="SELECT * FROM alergia WHERE historialmedico_idhistorialmedico='$row2[0]'";
	$resultado4=mysqli_query($con,$datos4);
	$datos5="SELECT * FROM antecedentequirurjico WHERE historialmedico_idhistorialmedico='$row2[0]'";
	$resultado5=mysqli_query($con,$datos5);
	if ($resultado5) {
			$row5= mysqli_fetch_array($resultado5, MYSQLI_NUM);
			$bandera3=1;
	}
	else{
		$bandera3=0;
	}
	if ($resultado4) {
			$row4 = mysqli_fetch_array($resultado4, MYSQLI_NUM);
			$bandera2=1;
	}
	else{
		$bandera2=0;
	}
	if ($resultado3) {
			$row3 = mysqli_fetch_array($resultado3, MYSQLI_NUM);
			$bandera=1;
	}
	else{
		$bandera=0;
	}
	


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/interfaz.css">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial scale=1.0">
</head>
<body>
	<header>
		<nav>
		<ul>
			<a href="cerrarsesion.php"><li>Cerrar sesión</li></a>
			<a href="#"><li>Datos personales</li></a>
			<a href="fichaentrenamiento.php"><li>Ficha de entrenamiento</li></a>
			<a href="historial.php"><li>Historial</li></a>
			<a href="rehabilitarse.php"><li>Rehabilitarse</li></a>
			<li class="buap">BUAP</li>
		</ul>			
		</nav>
	</header>
	<section>
		<div class="mostrardatos">
			<div class="contenedor">
				<label class="encabezado">Datos personales</label><br>
				<hr>
					<label class="especificacion">Nombre:</label><label name="nombre"><?php echo $row[1]; ?></label><br>
					<label class="especificacion">Apellido Paterno:</label><label name="apellidop"><?php echo $row[7]; ?></label><br>
					<label class="especificacion">Apellido Materno:</label><label name="apellidom"><?php echo $row[8]; ?></label><br>
					<label class="especificacion">Correo:</label><label name="correo"><?php echo $row[4]; ?></label><br>
					<label class="especificacion">Usuario:</label><label name="usuario"><?php echo $row[5]; ?></label><br>
					<label class="especificacion">Peso:</label><label name="peso"><?php echo $row1[1]; ?></label><br>
					<label class="especificacion">Estatura:</label><label name="estatura"><?php echo $row1[2]; ?></label><br>
					<label class="especificacion">Lado predominante:</label><label name="lado predominante"><?php echo $row1[4]; ?></label><br>
					<label class="especificacion">Sexo:</label><label name="sexo"><?php echo $row1[3]; ?></label><br>
					<label class="especificacion">Edad:</label><label name="edad"><?php echo $row[2]; ?></label><br>
					<label class="especificacion">Deporte:</label><label name="deporte"><?php echo $row1[6]; ?></label><br>
				<a href="editardatos.php"><button class="editar">Editar</button></a><br>
			</div>
		</div>
		<div class="mostrardatos">
			<div class="contenedor">
				<label class="encabezado">Antecedentes hereditarios</label><br>
				<hr>
				<?php
					if ($bandera=!0) {
						while($row3=mysqli_fetch_array($resultado3,MYSQLI_ASSOC))
						echo"<table>
							<tr>
								<th>Parentesco</th>
								<th>Enfermedad</th>
								<th>Descripción</th>
							</tr>
							<tr>
								<td>".$row3['parentesco']."</td>
								<td>".$row3['enfermedad']."</td>
								<td>".$row3['descripcion']."</td>
							</tr>

						</table>";
					}
					else{
						echo'<label class="nohay">No hay antecedentes</label>';
					}
				?>
				<a href="agregarhereditario.php"><button class="editar">Agregar</button></a><br>
			</div>
		</div>
		<div class="mostrardatos">
			<div class="contenedor">
				<label class="encabezado">Alergias</label><br>
				<hr>
				<?php
					if ($bandera2=!0) {
						while($row4=mysqli_fetch_array($resultado4,MYSQLI_ASSOC))
						echo"<table>
							<tr>
								<th>Alergia</th>
							</tr>
							<tr>
								<td>".$row4['alergia']."</td>
								
							</tr>

						</table>";
					}
					else{
						echo'<label class="nohay">No hay antecedentes</label>';
					}
				?>
				<a href="agregaralergia.php"><button class="editar">Agregar</button></a><br>
			</div>
		</div>
		<div class="mostrardatos">
			<div class="contenedor">
				<label class="encabezado">Antecedentes (lesiones,enfermedades)</label><br>
				<hr>
				<?php
					if ($bandera3=!0) {
						while($row5=mysqli_fetch_array($resultado5,MYSQLI_ASSOC))
						echo"<table>
							<tr>
								<th>Enfermedad</th>
								<th>Fecha</th>
								<th>Tratamiento</th>
								<th>Radiografia</th>
								<th>Descripción</th>
							</tr>
							<tr>
								<td>".$row5['enfermedad/razon']."</td>
								<td>".$row5['fecha']."</td>
								<td>".$row5['tratado']."</td>
								<td><img class='img' src='radiografia/".$row5['radiografia']."'></td>
								<td>".$row5['descripcion']."</td>								
							</tr>

						</table>";
					}
					else{
						echo'<label class="nohay">No hay antecedentes</label>';
					}
				?>
				<a href="agregarlesion.php"><button class="editar">Editar</button></a><br>
			</div>
		</div>	
	</section>

</body>
</html>