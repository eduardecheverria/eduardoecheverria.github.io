$(obtener_registros());

function obtener_registros(alumnos)
{
	$.ajax({
		url : 'tiempo_real_profesor.php',
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

 function contar_profesor() {

  var checkboxes = document.getElementById("variable-oculta").value; //Array que contiene el num de los checkbox
  var cont = 0; //Variable que lleva la cuenta de los checkbox pulsados
  for (var x=0; x <= checkboxes; x++) {
   if (document.forms["form1"].elements[x].checked==true) {
    cont = cont + 1;
   }
  }
	 if	(cont>1){
        document.getElementById("form1").action="";
	  		alert ("Para modificar la información selecciona 1 a la vez.");
	 }
   else{
        document.getElementById("form1").action="modificar-profesor.php";
   }
 }
function eliminar_profesor(){
	document.getElementById("form1").action="eliminar-profesor.php";
}
