<?php
	include('conexion.php');
	session_start();
	$matricula=$_SESSION['modificar_matricula'];
	$matricula_profe=$_POST["matricula"];
	$nombre=$_POST["nombre"];
	$nota=$_POST["nota"];
	$url_local=$_POST["url_local"];
	$url_descargar=$_POST["url_descargar"];
	$status=$_POST["status"];

	if($nombre){
		$nombre=$_POST["nombre"];
		$consulta="UPDATE `solicitud` SET `nombre` = '$nombre' WHERE `solicitud`.`idsolicitud` = $matricula";
		$row=mysqli_query($con,$consulta);
	}
	if($matricula_profe){
		$matricula_profe=$_POST["matricula"];
		$consulta1="UPDATE `solicitud` SET `matricula` = '$matricula_profe' WHERE `solicitud`.`idsolicitud` = $matricula";
		$row1=mysqli_query($con,$consulta1);
	}
	if($nota){
		$nota=$_POST["nota"];
		$consulta2="UPDATE `solicitud` SET `notas` = '$nota' WHERE `solicitud`.`idsolicitud` = $matricula";
		$row2=mysqli_query($con,$consulta2);
	}
	if($url_local){
		$url_local=$_POST["url_local"];
		$consulta3="UPDATE `solicitud` SET `url_local` = '$url_local' WHERE `solicitud`.`idsolicitud` = $matricula";
		$row3=mysqli_query($con,$consulta3);
	}
		$status=$_POST["status"];
		$consulta4="UPDATE `solicitud` SET `status` = '$status' WHERE `solicitud`.`idsolicitud` = $matricula";
		$row4=mysqli_query($con,$consulta4);
	
	if($url_descargar){
		$url_descargar=$_POST["url_descargar"];
		$consulta5="UPDATE `solicitud` SET `url_descargar` = '$url_descargar' WHERE `solicitud`.`idsolicitud` = $matricula";
		$row5=mysqli_query($con,$consulta5);
	}
		 
					
							
	header("Location:interfazmodulador3.php");

?>