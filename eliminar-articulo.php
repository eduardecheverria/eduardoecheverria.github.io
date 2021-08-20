<?php
include("conexion.php");
	session_start();
	$contador=$_SESSION['contador_articulo'];
	for($i=0;$i<=$contador;$i++){
		if (isset($_POST['matricula'.$i.''])) {
				$temp=$_POST['matricula'.$i.''];
				$consulta="DELETE FROM `articulo` WHERE idarticulo='$temp'";
				$resultado=mysqli_query($con,$consulta);
				$consulta2="DELETE FROM `actividad` WHERE articulo_idarticulo='$temp'";
				$resultado2=mysqli_query($con,$consulta2);
				
			}
		
	}
   header("Location:interfazmodulador5.php");
?>