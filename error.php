<?php
session_start();
$error=$_SESSION['error'];
session_destroy();
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
		<div class="nav"><p class="BUAP">BUAP</p><label><a href="#"></a></label></div>
		<div>
			
			<h2>Error : <p><?php echo $error." Pongase en contacto con el administrador" ?></p></h2>

			<div class="div-boton">
				<a class="boton" href="javascript:history.back()">Regresar</a>
			</div>
				
			
	

		</div>
	</div>
	<div style="clear: both;"></div>
		<footer>
						© BUAP 2018 
			por: Eduardo Echeverría Martin del campo ,Omar Juarez Tellez
			Tutorados por la Prof. Hilda Mejia Matias
		</footer>
</body>
</html>
