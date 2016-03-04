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
		if(form.serio_casual.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_serio_casual").innerHTML="<font color='red'>¿Quieres algo serio o casual?</font>";
			form.serio_casual.value = "";
			form.serio_casual.focus();
			return false;
		}else{
			document.getElementById("div_serio_casual").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.edad_preferida.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_edad_preferida").innerHTML="<font color='red'>¿Que Edad Prefieres?</font>";
			form.edad_preferida.value = "";
			form.edad_preferida.focus();
			return false;
		}else{
			document.getElementById("div_edad_preferida").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.ocupacion_preferida.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_ocupacion_preferida").innerHTML="<font color='red'>¿Con que ocupacion prefieres?</font>";
			form.ocupacion_preferida.value = "";
			form.ocupacion_preferida.focus();
			return false;
		}else{
			document.getElementById("div_ocupacion_preferida").innerHTML="";
		}
		
		
		
			
		
		
		document.form.submit();

}

















