<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
include("conexion.php");
session_start();
$_SESSION['contador_articulo']=0;

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM `articulo`";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['alumnos']))
{
	$q=$con->real_escape_string($_POST['alumnos']);
	$query="SELECT * FROM articulo WHERE nombre LIKE '%".$q."%' or idarticulo LIKE '%".$q."%'";
	
}

$buscarAlumnos=$con->query($query);
if ($buscarAlumnos->num_rows > 0)
{
	$tabla.= 
	'<table class="mostrardatos">
				   <tr>
					<th>id de articulo</th>
				    <th>Nombre del articulo</th>
				    <th>Historial</th>
				    <th>Seleccionar</th>
				  </tr>';

	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td id="art'.$filaAlumnos['idarticulo'].'">'.$filaAlumnos['idarticulo'].'</td>
			<td>'.$filaAlumnos['nombre'].'</td>
			<td><input type="button" id="'.$filaAlumnos['idarticulo'].'" value="Ver"></td>
			 <td><input type="checkbox"  name="matricula'.$_SESSION['contador_articulo'].'" value="'.$filaAlumnos['idarticulo'].'"></td>
						  </tr>
				';
						  $_SESSION['contador_articulo']++;
				
	}

	$tabla.='</table>
						<input type="text" style="width:0%; visibility:hidden;" value="'.$_SESSION['contador_articulo'].'" id="variable-oculta">';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
