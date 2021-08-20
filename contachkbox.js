 function contar() {

  var checkboxes = document.getElementById("variable-oculta").value; //Array que contiene el num de los checkbox
  var cont = 0; //Variable que lleva la cuenta de los checkbox pulsados
  for (var x=0; x <= checkboxes; x++) {
   if (document.forms["form1"].elements[x].checked==true) {
    cont = cont + 1;
   }
  }
	 if	(cont>1){
	  		alert ("Para modificar la información personal de un alumno selecciona 1 a la vez.");
	 }
 }
