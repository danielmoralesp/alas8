// javascript
			function saludo(){
				alert("hola de nuevo");
			}
			
			function capa(texto){
				document.getElementById("muestra").innerHTML=texto;
				//alert(document.getElementById("campo").value);
			}

			
			
// Desarrollado por www.cesarcancino.com
//*****************************************************************************
//Valida correo
function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }
//*************************************************************************************************************************************
//valida números
function valida_numero(numero)
{
if (!/^([0-9])*$/.test(numero)){
		return false;
}else{
		return true;
	}
}
//*******************************************************************************************************
//función para validar cadenas de solo letras
function valida_cadena(texto)
	{
		var RegExPattern = "[1-9]";
		 if (texto.match(RegExPattern))
		 {
		 	return false;
		 }else
		 {
		 	return true;
		 }
	}
	
//*******************************************************************************************************

function limpiar (){
	document.form.reset();
	document.form.nom.focus();
}



function validar(){
	var form = document.form;
		
		//*****************************************************************************************
		if(form.caracteristicas1.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_caracteristicas1").innerHTML="<font color='red'>Debe ser... ?</font>";
			form.caracteristicas1.value = "";
			form.caracteristicas1.focus();
			return false;
		}else{
			document.getElementById("div_caracteristicas1").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.caracteristicas2.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_caracteristicas2").innerHTML="<font color='red'>Me Gustaria que fuera... ?</font>";
			form.caracteristicas2.value = "";
			form.caracteristicas2.focus();
			return false;
		}else{
			document.getElementById("div_caracteristicas2").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.caracteristicas3.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_caracteristicas3").innerHTML="<font color='red'>Me enamoro si es... ?</font>";
			form.caracteristicas3.value = "";
			form.caracteristicas3.focus();
			return false;
		}else{
			document.getElementById("div_caracteristicas3").innerHTML="";
		}
		
		
		
		
		
			
		
		
		document.form.submit();

}

















