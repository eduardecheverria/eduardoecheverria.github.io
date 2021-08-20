<?php
	include('conexion.php');
	session_start();
	$contador=$_SESSION['contador'];
	if(isset($_POST['eliminar'])){

		for($i=0;$i<=$contador;$i++){
			if (isset($_POST['matricula'.$i.''])) {
				$temp=$_POST['matricula'.$i.''];
				$consulta="DELETE FROM `usuario` WHERE matricula='$temp'";
				$resultado=mysqli_query($con,$consulta);
			}
			
		}
	  
	}


	header("Location:interfazmodulador4.php");
?>