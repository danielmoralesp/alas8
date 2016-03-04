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
		if(form.nombre.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_nombre").innerHTML="<font color='red'>¿Cual es tu Nombre?</font>";
			form.nombre.value = "";
			form.nombre.focus();
			return false;
		}else{
			document.getElementById("div_nombre").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.email.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_email").innerHTML="<font color='red'>¿Cual es tu Email?</font>";
			form.email.value = "";
			form.email.focus();
			return false;
		}else{
			document.getElementById("div_email").innerHTML="";
		}
		
		//*****************************************************************************************
		if(valida_correo(form.email.value) == false){
			//alert("Ingrese un correo valido");
			document.getElementById("div_email").innerHTML="<font color='red'>Ingrese un correo valido</font>";
			form.email.value = "";
			form.email.focus();
			return false;
		}else{
			document.getElementById("div_email").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.edad.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_edad").innerHTML="<font color='red'>¿Cual es tu Edad?</font>";
			form.edad.value = "";
			form.edad.focus();
			return false;
		}else{
			document.getElementById("div_edad").innerHTML="";
		}
		
		//*****************************************************************************************
		if(valida_numero(form.edad.value) == false){
			//alert("Ingrese un numero valido");
			document.getElementById("div_edad").innerHTML="<font color='red'>Ingrese un numero valido</font>";
			form.edad.value = "";
			form.edad.focus();
			return false;
		}else{
			document.getElementById("div_edad").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.celular.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_celular").innerHTML="<font color='red'>¿Cual es tu celular?</font>";
			form.celular.value = "";
			form.celular.focus();
			return false;
		}else{
			document.getElementById("div_celular").innerHTML="";
		}
		
		//*****************************************************************************************
		/*
		if(form.skype.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_skype").innerHTML="<font color='red'>¿Cual es tu skype?</font>";
			form.skype.value = "";
			form.skype.focus();
			return false;
		}else{
			document.getElementById("div_skype").innerHTML="";
		}
		
		
		//*****************************************************************************************
		if(form.facebook.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_facebook").innerHTML="<font color='red'>¿Cual es tu facebook?</font>";
			form.facebook.value = "";
			form.facebook.focus();
			return false;
		}else{
			document.getElementById("div_facebook").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.ocupacion.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_ocupacion").innerHTML="<font color='red'>¿Cual es tu ocupacion?</font>";
			form.ocupacion.value = "";
			form.ocupacion.focus();
			return false;
		}else{
			document.getElementById("div_ocupacion").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.barrio.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_barrio").innerHTML="<font color='red'>¿Cual es tu barrio?</font>";
			form.barrio.value = "";
			form.barrio.focus();
			return false;
		}else{
			document.getElementById("div_barrio").innerHTML="";
		}
		
		*/
		
		//*****************************************************************************************
		if(form.foto1.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_foto1").innerHTML="<font color='red'>Sube la Primera Foto</font>";
			form.foto1.value = "";
			form.foto1.focus();
			return false;
		}else{
			document.getElementById("div_foto1").innerHTML="";
		}
		
		//*****************************************************************************************
		if(form.foto2.value == 0){
			//alert("Ingrese el nombre");
			document.getElementById("div_foto2").innerHTML="<font color='red'>Sube la Segunda Fotos</font>";
			form.foto2.value = "";
			form.foto2.focus();
			return false;
		}else{
			document.getElementById("div_foto2").innerHTML="";
		}		

		
		

		
		
		
		document.form.submit();

}

















