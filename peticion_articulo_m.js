
$(document).ready(function(){
      $('body #form1').on('click', 'input', function(){
        var registro=$(this).attr('id');
        registrop=parseInt(registro);
        $(obtener_registros1(registrop));
      })
    });
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

function obtener_registros1(alumnos1)
{
	$.ajax({
		url : 'tiempo_real_actividad_articulo.php',
		type : 'POST',
		dataType : 'html',
		data : { alumnos1: alumnos1 },
		})

	.done(function(resultado1){
		$("#tabla_resultado1").html(resultado1);
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
function eliminar_articulo() {

        document.getElementById("form1").action="agregar-articulo.php";
    }
function agregar_articulo(){
	document.getElementById("form1").action="eliminar-artculo.php";
}

/////////////////////////////////////////////////////////////////////////////////////





