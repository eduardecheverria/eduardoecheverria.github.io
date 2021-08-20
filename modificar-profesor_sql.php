<?php
	include('conexion.php');
	session_start();
	$matricula=$_SESSION['modificar_matricula'];
	$nombre=$_POST["nombre"];
	$apellidop=$_POST["apellidop"];
	$apellidom=$_POST["apellidom"];
	$correo=$_POST["correo"];
	$carrera=$_POST["carrera"];
	$contrasena=$_POST["contrasena"];
	if($nombre!=""){
		$nombre=$_POST["nombre"];
		$consulta="UPDATE `usuario` SET `nombre` = '$nombre' WHERE `usuario`.`matricula` = $matricula";
		$row=mysqli_query($con,$consulta);
	}
	if($apellidop){
		$apellidop=$_POST["apellidop"];
		$consulta1="UPDATE `usuario` SET `apellidop` = '$apellidop' WHERE `usuario`.`matricula` = $matricula";
		$row1=mysqli_query($con,$consulta1);
	}
	if($apellidom){
		$apellidom=$_POST["apellidom"];
		$consulta2="UPDATE `usuario` SET `apellidom` = '$apellidom' WHERE `usuario`.`matricula` = $matricula";
		$row2=mysqli_query($con,$consulta2);
	}
	if($correo=!""){
		$correo=$_POST["correo"];
		$consulta3="UPDATE `usuario` SET `correo` = '$correo' WHERE `usuario`.`matricula` = $matricula";
		$row3=mysqli_query($con,$consulta3);
	}

	
	if($contrasena=!""){
		$contrasena=$_POST["contrasena"];
		$consulta5="UPDATE `usuario` SET `contrasena` = '$contrasena' WHERE `usuario`.`matricula` = $matricula";
		$row5=mysqli_query($con,$consulta5);
	}
		 $consulta2="SELECT * FROM `usuario` WHERE `tipo`= 'estudiante'";
						$resultado2=mysqli_query($con,$consulta2);
					
							
	header("Location:interfazmodulador4.php");

?>