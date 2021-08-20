<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
include("conexion.php");
session_start();
$_SESSION['contador']=0;

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM `usuario` WHERE `tipo`= 'estudiante' or `tipo`= 'modulador'";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['alumnos']))
{
	$q=$con->real_escape_string($_POST['alumnos']);
	$query="SELECT * FROM usuario WHERE ( matricula LIKE '%".$q."%' OR
		nombre LIKE '%".$q."%' OR
		carrera LIKE '%".$q."%' OR
		apellidop LIKE '%".$q."%' OR
		apellidom LIKE '%".$q."%' OR
		email LIKE '%".$q."%') and tipo='estudiante' ";
}

$buscarAlumnos=$con->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.= 
	'<table class="mostrardatos">
				   <tr>
					<th>Matricula</th>
				    <th>Nombre</th>
				    <th>Apellido Paterno</th>
				    <th>Apellido Materno</th>
				    <th>Carrera</th>
				    <th>Correo</th>
				    <th>Seleccionar</th>
				  </tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaAlumnos['matricula'].'</td>
			<td>'.$filaAlumnos['nombre'].'</td>
			<td>'.$filaAlumnos['apellidop'].'</td>
			<td>'.$filaAlumnos['apellidom'].'</td>
			<td>'.$filaAlumnos['carrera'].'</td>
			<td>'.$filaAlumnos['email'].'</td>
			 <td><input type="checkbox"  name="matricula'.$_SESSION['contador'].'" value="'.$filaAlumnos['matricula'].'"></td>
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
