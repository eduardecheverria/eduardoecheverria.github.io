
<?php

	$host="localhost";
	$user="root";
	$pw="";
	$db="tics";
	$con= mysqli_connect($host,$user,$pw,$db) or die("No se pudo conectar a la base de datos");
	if(!$con){
		echo"Error al conectar a la base de datos";
			}
	
?>