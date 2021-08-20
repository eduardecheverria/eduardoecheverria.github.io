<?php
include('conexion.php');
session_start();

//recibiendo usuario y contraseña
$matricula=$_POST['matricula'];
$contrasena=$_POST['contrasena'];
$verificando="SELECT count(*) FROM `usuario` WHERE matricula='$matricula' AND contra='$contrasena'";
$tipo="SELECT `tipo` FROM `usuario` WHERE matricula='$matricula'";
$resultado1= mysqli_query($con,$verificando);
$row = mysqli_fetch_array($resultado1, MYSQLI_NUM);
//creamos la variable error donde se guardara el tipo de error
$_SESSION['error']="";


if($row[0]==0){ 
	$_SESSION['error']="usuario o contraseña equivocados";
	header('Location: error.php');
}
else{
	$_SESSION['matricula']=$matricula;
	$resultado2= mysqli_query($con,$tipo);
	$row2 = mysqli_fetch_array($resultado2, MYSQLI_NUM);
	$interfaz=$row2[0];
	ini_set('date.timezone', 'America/Mexico_City');
	$tiempo=date('Y-m-d,H:i:s', time());
	$_SESSION['tiempo']=$tiempo;
	
	
	if($interfaz=="modulador"){
		header('Location: interfazmodulador.php');
	}
	if($interfaz=="estudiante"){
		header('Location: interfazestudiante.php');
	}
	if($interfaz=="profesor"){
		header('Location: interfazprofesor.php');
	}
	
		
}
?>