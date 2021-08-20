$(obtener_registros("1"));

function obtener_registros(alumnos)
{
	$.ajax({
		url : 'tiempo_real_actividad_articulo.php',
		type : 'POST',
		dataType : 'html',
		data : { alumnos: alumnos },
		})

	.done(function(resultado){
		$("#tabla_resultado1").html(resultado);
	})
}

$(document).on('click', "idarticulo1" , function()
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

