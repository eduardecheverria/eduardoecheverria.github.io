<?php
include('conexion.php');
session_start();
date_default_timezone_set('America/Mexico_City');
//recibiendo datos del formulario
$actividad=$_POST['actividad'];
$articulo_idarticulo=$_SESSION['articulo'];
$matricula=$_SESSION['matricula'];
$fecha=getdate();
$fecha_actual=date("d.m.y"); 
$hora=date('h:i A');
//verificando existencia de nombre de matricula

//creamos la variable error donde se guardara el tipo de error
$_SESSION['error']="";


//registrando campos en la base de datos

		$peticion="INSERT INTO `actividad`( `matricula_modulador`, `articulo_idarticulo`, `fecha`, `hora`, `actividad`) VALUES ($matricula,$articulo_idarticulo,'$fecha_actual','$hora','$actividad')";
		$resultado= mysqli_query($con,$peticion);

		if (!$resultado) {

			//guardando el error desconocido
			$_SESSION['error']="No se pudo registrar intente otra vez";
			header('Location: error.php');	
		}
		else{
			header('Location: interfazmodulador5.php');		
		}







?>