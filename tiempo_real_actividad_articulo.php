<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
include("conexion.php");
session_start();
$_SESSION['contador']=0;

//////////////// VALORES INICIALES ///////////////////////

	$idarticulo=$_POST['alumnos1'];
	$_SESSION['articulo']=$idarticulo;

$tabla="";

			$query="SELECT * FROM `actividad` WHERE articulo_idarticulo=".$idarticulo." ORDER BY fecha ASC";
			///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
			if($buscarAlumnos=$con->query($query)){

				if ($buscarAlumnos->num_rows > 0)
				{
					$tabla.= 
					'<table class="mostrardatos">
								   <tr>
									<th id="popo">id de actividad</th>
								    <th>Modulador</th>
								    <th>Fecha</th>
								    <th>Hora</th>
								    <th>Actividad</th>
								  </tr>';

					while($filaAlumnos= $buscarAlumnos->fetch_assoc())
					{
						$tabla.=
						'<tr>
							<td>'.$filaAlumnos['idactividad'].'</td>
							<td>'.$filaAlumnos['matricula_modulador'].'</td>
							<td>'.$filaAlumnos['fecha'].'</td>
							<td>'.$filaAlumnos['hora'].'</td>
							<td>'.$filaAlumnos['actividad'].'</td>'
							;
								
					}

					$tabla.='</table>';
				} else
					{
						$tabla="Sin Historial.";
					}


				echo $tabla;
			}
			
			


?>
