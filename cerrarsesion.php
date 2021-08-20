<?php
session_start();
include("conexion.php");
ini_set('date.timezone', 'America/Mexico_City');
$tiempo=date('Y-m-d,H:i:s', time());
$inicio=$_SESSION['tiempo'];
$insert="UPDATE `sesion` SET `fin`='$tiempo' WHERE `inicio`='$inicio'";
$ejecutar=mysqli_query($con,$insert);
session_destroy();
header("location:index.php");
?>