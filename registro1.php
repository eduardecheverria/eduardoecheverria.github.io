<?php
session_start();
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
		<div class="nav"><p class="BUAP">BUAP</p><label><a href=""></a></label></div>
		<div>
			<form action="registro.php" method="post" onsubmit="return validar()">
			<h2>Registro</h2>
			<input class="inputgrande" type="text" id="nombre" name="nombre" placeholder="Nombre"  required>
			<input type="text" id="apellidop" name="apellidop" placeholder="Apellido Paterno" required>
			<input type="text" id="apellidom" name="apellidom" placeholder="Apellido Materno" required>
			<select  id="ocupacion" placeholder="Ocupación" name="ocupacion" required >
				 <option value="">Ocupación</option>
				 <option value="estudiante">Estudiante</option>
				 <option value="profesor">Profesor</option>
			</select>
			<select  id="carrera" placeholder="carrera" name="carrera" required >
				 <option value="">Carrera</option>
				 <option value="ITI">ITI</option>
				 <option value="Ingenieria">Ingenieria</option>
			     <option value="Licenciatura">Licenciatura</option>
			</select>
			<input class="inputgrande" type="text" id="matricula" name="matricula" placeholder="Matricula" required>
			<input class="inputgrande" type="email" id="email" name="correo" placeholder="Ej. tunombre@deporte.com" required>
			<input class="inputchico" type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
			<input type="password" id="repitecontrasena" name="repitecontrasena" placeholder="Confirmar Contraseña" required>
			<input type="submit" value="Enviar">

			<label><a href="interfazmodulador2.php">Cancelar</a></label>
			
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