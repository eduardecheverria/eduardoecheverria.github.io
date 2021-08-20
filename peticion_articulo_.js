$(obtener_registros());

function obtener_registros(alumnos)
{
	$.ajax({
		url : 'tiempo_real_articulo.php',
		type : 'POST',
		dataType : 'html',
		data : { alumnos: alumnos },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#caja_busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});


 function agregar_articulo() {

        document.getElementById("form1").action="agregar-articulo.php";
   }
 }
function eliminar_articulo(){
	document.getElementById("form1").action="eliminar-articulo.php";
}
