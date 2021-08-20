<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
include("conexion.php");
session_start();
$_SESSION['contador']=0;

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM `solicitud`";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['alumnos']))
{
	$q=$con->real_escape_string($_POST['alumnos']);
	$query="SELECT * FROM solicitud WHERE matricula LIKE '%".$q."%' OR
		nombre LIKE '%".$q."%' OR
		url_local LIKE '%".$q."%' OR
		url_descargar LIKE '%".$q."%' OR
		notas LIKE '%".$q."%' OR
		status LIKE '%".$q."%'";
}

$buscarAlumnos=$con->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.= 
	'<table class="mostrardatos">
				   <tr>
					<th>Matricula</th>
				    <th>Url local</th>
				    <th>Url para Descargar</th>
				    <th>Nombre del software</th>
				    <th>Status</th>
				    <th>Notas</th>
				    <th>Seleccionar</th>
				  </tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaAlumnos['matricula'].'</td>
			<td>'.$filaAlumnos['url_local'].'</td>
			<td><a href="'.$filaAlumnos['url_descargar'].'">'.$filaAlumnos['url_descargar'].'</a></td>
			<td>'.$filaAlumnos['nombre'].'</td>
			<td>'.$filaAlumnos['status'].'</td>
			<td>'.$filaAlumnos['notas'].'</td>
			 <td><input type="checkbox"  name="matricula'.$_SESSION['contador'].'" value="'.$filaAlumnos['idsolicitud'].'"></td>
						  </tr>
				';
						  $_SESSION['contador']++;
				
	}

	$tabla.='</table>
						<input type="text" style="width:0%; visibility:hidden;" value="'.$_SESSION['contador'].'" id="variable-oculta">';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
