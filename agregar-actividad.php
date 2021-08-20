<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modulos FCC</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial scale=1.0">
	<link rel=stylesheet href="estilos/estilosregistro.css" type="text/css" media=screen> 
</head>
<body>
	<div id="contenedor">
		<div class="nav"><p class="BUAP">BUAP</p><label><a href=""></a></label></div>
		<div>
			<form action="registro-actividad.php" method="post">
			<h2>Registro de articulo</h2>
			<textarea id="actividad" name="actividad"></textarea>
			
			<input type="submit" value="Enviar">

			<label><a href="interfazmodulador5.php">Cancelar</a></label>
			
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