<?php
include('conexion.php');
session_start();

//recibiendo datos del formulario
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$apellidom=$_POST['apellidom'];
$apellidop=$_POST['apellidop'];
$contrasena=$_POST['contrasena'];
$carrera=$_POST['carrera'];
$email=$_POST['correo'];
$ocupacion=$_POST['ocupacion'];

//verificando existencia de nombre de matricula
$verificando="SELECT count(*) FROM `usuario` WHERE matricula='$matricula'";
$resultado1= mysqli_query($con,$verificando);
$row = mysqli_fetch_array($resultado1, MYSQLI_NUM);
//creamos la variable error donde se guardara el tipo de error
$_SESSION['error']="";


if($row[0]==0){ 

//registrando campos en la base de datos

		$peticion="INSERT INTO `usuario`( `apellidop`, `apellidom`, `nombre`, `email`, `contra`, `carrera`, `tipo`,`matricula`) VALUES ('$apellidop','$apellidom','$nombre','$email','$contrasena','$carrera','$ocupacion','$matricula')";
		$resultado= mysqli_query($con,$peticion);
		$consulta4="UPDATE `usuario` SET `carrera` = '$carrera' WHERE `usuario`.`matricula` = $matricula";
		$row4=mysqli_query($con,$consulta4);

		if (!$resultado) {

			//guardando el error desconocido
			$_SESSION['error']="No se pudo registrar intente otra vez";
			header('Location: error.php');	
		}
		else{
			header('Location: interfazmodulador2.php');		
		}
}
else{
//Guardando error de usuario existente
	$_SESSION['error']="Matricula ya registrada , intente otra vez";
	header('Location: error.php');
}






?>