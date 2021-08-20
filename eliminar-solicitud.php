<?php
include("conexion.php");
	session_start();
	$contador=$_SESSION['contador'];
	for($i=0;$i<=$contador;$i++){
		if (isset($_POST['matricula'.$i.''])) {
				$temp=$_POST['matricula'.$i.''];
				$consulta="DELETE FROM `solicitud` WHERE idsolicitud='$temp'";
				$resultado=mysqli_query($con,$consulta);
			}
		
	}
   header("Location:interfazprofesor.php");
?>