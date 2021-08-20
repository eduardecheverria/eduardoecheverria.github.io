function validar(){
				var datosCorrectos=true;
				var error="";
				var Contra=document.getElementById("contrasena").value;
				var longContra=Contra.length;
				var Matricula=document.getElementById("matricula").value;
				var longMatricula=Matricula.length;
				if(document.getElementById("contrasena").value=="" || document.getElementById("repitecontrasena").value =="" || document.getElementById("contrasena").value != document.getElementById("repitecontrasena").value ){
					datosCorrectos=false;
					error="\n Las contraseñas no coinciden";
				}
				if(longContra < 8){
					datosCorrectos=false;
					error="\n La contraseña debe contener 8 caracteres minimo";
				}
				if(isNaN(Matricula)==true){
  					datosCorrectos=false;
					error="\n La matricula solo debe contener numeros";
				}
				if(longMatricula!=9){
							datosCorrectos=false;
							error="\n La matricula debe contener 9 digitos";
					}
				

				
				if(!datosCorrectos){
					alert('Hay Errores En El formulario'+error);
				}
				
				return datosCorrectos;
				
			}
function validarcontra(){

	var datosCorrectos=true;
	var error="";
	var Contra=document.getElementById("contrasena").value;
	var longContra=Contra.length;

	if(document.getElementById("contrasena").value=="" || document.getElementById("repitecontrasena").value =="" || document.getElementById("contrasena").value != document.getElementById("repitecontrasena").value ){
					datosCorrectos=false;
					error="\n Las contraseñas no coinciden";
	}
	if(!datosCorrectos){
					alert('Hay Errores En El formulario'+error);
	}
				
				return datosCorrectos;
				
	
}