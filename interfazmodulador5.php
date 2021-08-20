<?php
include("conexion.php");
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Modulos FCC</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial scale=1.0">
	<link rel=stylesheet href="estilos/interfaz.css" type="text/css" media=screen>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="peticion_articulo_g.js"></script>

	
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
				<div class="divisor" id="articulos">
					<div class="divisor1">
								<div class="caja_busqueda">
							
									<input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar" >
								</div>
								<div id="datos">
									<form id="form1" class="tabla_articulo" method="post" action="">
										<span id="tabla_resultado"></span>
										<input type="submit" class="eliminar" name="eliminar" value="Eliminar" onclick="eliminar_articulo();">
										<input type="submit" class="eliminar" name="nuevo" value="Nuevo Articulo" onclick="agregar_articulo();">
									</form>
								</div>
					</div>
					<div class="divisor2">
						
								<div id="datos">
									<form id="form2" class="sinestilo" method="post" action="agregar-actividad.php">
										<span id="tabla_resultado1"></span>	
										<span style="width:0%; visibility: hidden;" id="variable_sesion">
											
										</span>									
										<input type="submit" class="eliminar" name="agregar" id="agregar" value="Agregar">
										
									</form>
								</div>
						
					</div>
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
