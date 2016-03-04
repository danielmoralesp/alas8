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
		if(form.lugares_frecuenta.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_lugares_frecuenta").innerHTML="<font color='red'>¿Que Lugares Frecuenta?</font>";
			form.lugares_frecuenta.value = "";
			form.lugares_frecuenta.focus();
			return false;
		}else{
			document.getElementById("div_lugares_frecuenta").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.cita_donde.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_cita_donde").innerHTML="<font color='red'>¿Donde Quieres la Cita?</font>";
			form.cita_donde.value = "";
			form.cita_donde.focus();
			return false;
		}else{
			document.getElementById("div_cita_donde").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.cita_ideal.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_cita_ideal").innerHTML="<font color='red'>Describa su Cita Ideal</font>";
			form.cita_ideal.value = "";
			form.cita_ideal.focus();
			return false;
		}else{
			document.getElementById("div_cita_ideal").innerHTML="";
		}
		
		
		document.form.submit();

}

















