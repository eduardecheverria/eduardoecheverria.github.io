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
	$consulta="SELECT * FROM solicitud WHERE idsolicitud='$temp'";
	$llamado=mysqli_query($con,$consulta);
	$row=mysqli_fetch_array($llamado);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modulos FCC</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial scale=1.0">
	<link rel=stylesheet href="estilos/modificar.css" type="text/css" media=screen> 
</head>
<body>
	<div id="contenedor">
		<div class="nav"><p class="BUAP">BUAP</p><label><a href=""></a></label></div>
		<div>
			<form action="mod-solicitud_sql.php" method="POST">
			<h2>Modificar</h2>
			<input class="inputgrande" type="text" id="matricula" name="matricula" placeholder="Matricula de prof. :<?php echo $row[1]; ?>" >
			<input class="inputgrande" type="text" id="url_local" name="url_local" placeholder="url local: <?php echo $row[2]; ?>">
			<input class="inputgrande" type="text" id="url_descargar" name="url_descargar" placeholder="url descarga: <?php echo $row[3]; ?>" >
			<input class="inputgrande" type="text" id="notas" name="notas" placeholder="Notas :<?php echo $row[4]; ?>" >
			<input class="inputgrande" type="text" id="nombre" name="nombre" placeholder="Nombre de soft:<?php echo $row[5]; ?>" >
			<select  id="status" placeholder="Estatus" name="status" >
				 <option value="">Carrera</option>
				 <option <?php if($row[6]=="En espera"){echo "selected";} ?> value="En espera">En espera</option>
				 <option <?php if($row[6]=="En progreso"){echo "selected";} ?> value="En progreso">En progreso</option>
			     <option <?php if($row[6]=="Completada"){echo "selected";} ?> value="Completada">Completada</option>
			</select>
			<input type="submit" value="Enviar">

			<label><a href="interfazmodulador3.php">Cancelar</a></label>
			
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