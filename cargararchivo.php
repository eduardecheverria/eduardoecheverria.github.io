<?php
	session_start();
	if($_FILES['archivo']["error"] > 0){
		echo "Error: " .$_FILES['archivo']["error"]."</br>";
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
		$matricula=$_SESSION['matricula'];
		$url=$_POST['url'];
		$url_local="";
		$status="En espera";
		include("conexion.php");
		$insertar="INSERT INTO `solicitud`(`url_local`, `url_descargar`, `notas`, `nombre`, `matricula`,`status`) VALUES ('$url_local','$url','$descripcion','$nombre','$matricula','$status')";
		$resultado=mysqli_query($con,$insertar);
		header("Location:interfazprofesor.php");
	}
	else{
		move_uploaded_file($_FILES['archivo']['tmp_name'], 'software/'.$_FILES['archivo']['name']);
		$url_local=$_FILES['archivo']['name'];
		$url=$_POST['url'];
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
		$matricula=$_SESSION['matricula'];
		$status="En espera";
		include("conexion.php");
		$insertar="INSERT INTO `solicitud`(`url_local`, `url_descargar`, `notas`, `nombre`, `matricula`,`status`) VALUES ('$url_local','$url','$descripcion','$nombre','$matricula','$status')";
		$resultado=mysqli_query($con,$insertar);
		header("Location:interfazprofesor.php");
	}
?>