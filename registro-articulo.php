<?php
include('conexion.php');
session_start();

//recibiendo datos del formulario
$nombre=$_POST['nombre'];

//verificando existencia de nombre de matricula
$verificando="SELECT count(*) FROM `articulo` WHERE nombre='$nombre'";
$resultado1= mysqli_query($con,$verificando);
$row = mysqli_fetch_array($resultado1, MYSQLI_NUM);
//creamos la variable error donde se guardara el tipo de error
$_SESSION['error']="";


if($row[0]==0){ 

//registrando campos en la base de datos

		$peticion="INSERT INTO `articulo`( `nombre`) VALUES ('$nombre')";
		$resultado= mysqli_query($con,$peticion);
		if (!$resultado) {

			//guardando el error desconocido
			$_SESSION['error']="No se pudo registrar intente otra vez";
			header('Location: error.php');	
		}
		else{
			header('Location: interfazmodulador5.php');		
		}
}
else{
//Guardando error de usuario existente
	$_SESSION['error']="Nombre ya registrado , intente otra vez";
	header('Location: error.php');
}






?>