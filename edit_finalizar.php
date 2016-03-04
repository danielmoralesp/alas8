<?php



	require_once("conexion.php");	
	$sql="select * from quiz
	where id_quiz = ".$_GET["id_quiz"]."";
	$res = mysql_query($sql,$con);
	
	$foto1 = $_FILES["foto1"]["name"];
	$temp = $_FILES["foto1"]["tmp_name"];
	$tamano = $_FILES["foto1"]["size"];
	$tipo = $_FILES["foto1"]["type"];
	
	$foto2 = $_FILES["foto2"]["name"];
	$temp2 = $_FILES["foto2"]["tmp_name"];
	$tamano2 = $_FILES["foto2"]["size"];
	$tipo2 = $_FILES["foto2"]["type"];
	
	/*Ahora validamos que el tamaño es el que necesitamos*/
	
	$kilobytes = $tamano/1024; // con esto tenemos la cantidad en kilobytes "kb"
	//$megabytes = $kilobytes/1024;
	if($kilobytes > 600){
		?>		
		el archivo subido supera los 600kb <br>		
		<input type="button" value="volver" title="Volver a Cargar" onclick="history.back()"/>
		<?php
	}
	
	$kilobytes2 = $tamano2/1024; // con esto tenemos la cantidad en kilobytes "kb"
	//$megabytes = $kilobytes/1024;
	if($kilobytes2 > 600){
		?>		
		el archivo subido supera los 600kb <br>		
		<input type="button" value="volver" title="Volver a Cargar" onclick="history.back()"/>
		<?php
	}
	
	//ahora validamos la extension o el tipo de archivo

	if($tipo == "image/png" or $tipo == "image/jpeg" or $tipo =="image/gif"){
		//**********************
		//ahora podemos subir el archivo al servidor
		switch($tipo){
			case 'image/png';
				$ext = ".png";
			break;
			case 'image/jpeg';
				$ext = ".jpg";
			break;
			case 'image/JPG';
				$ext = ".jpg";
			break;
			case 'image/gif';
				$ext = ".gif";
			break;
		}
		//$nombre_foto = $_POST["nom"].$ext;
		$nombre_foto = $_POST["email"];
		$nombre_foto = str_replace(" ","_",$nombre_foto);
		$nombre_foto = $nombre_foto.$ext;
		copy($temp,"assets/images/users/foto1/$nombre_foto");	
		
		//******************************
		
		
		if($tipo2 == "image/png" or $tipo2 == "image/jpeg" or $tipo2 =="image/gif"){
		//**********************
		//ahora podemos subir el archivo al servidor
		switch($tipo2){
			case 'image/png';
				$ext2 = ".png";
			break;
			case 'image/jpeg';
				$ext2 = ".jpg";
			break;
			case 'image/JPG';
				$ext2 = ".jpg";
			break;
			case 'image/gif';
				$ext2 = ".gif";
			break;
		}
		
		$nombre_foto2 = $_POST["email"];
		$nombre_foto2 = str_replace(" ","_",$nombre_foto2);
		$nombre_foto2 = $nombre_foto2.$ext2;
		copy($temp2,"assets/images/users/foto2/$nombre_foto2");
	
	
	
	
	
	
		if($reg = mysql_fetch_array($res)){
		
		//ahora guardamos en archivo en una tabla de la bd
		
		$sql2 = "UPDATE quiz
		set 
		quiero_conocer = '".$_POST["quiero_conocer"]."',
		serio_casual = '".$_POST["serio_casual"]."',
		edad_preferida = '".$_POST["edad_preferida"]."',
		ocupacion_preferida = '".$_POST["ocupacion_preferida"]."',
		caracteristicas1 = '".$_POST["caracteristicas1"]."',
		caracteristicas2 = '".$_POST["caracteristicas2"]."',			
		caracteristicas3 = '".$_POST["caracteristicas3"]."',
		lugares_frecuenta = '".$_POST["lugares_frecuenta"]."',
		cita_donde = '".$_POST["cita_donde"]."',
		cita_ideal = '".$_POST["cita_ideal"]."',
		nombre = '".$_POST["nombre"]."',
		email = '".$_POST["email"]."',
		edad = '".$_POST["edad"]."',
		celular = '".$_POST["celular"]."',
		skype = '".$_POST["skype"]."',
		facebook = '".$_POST["facebook"]."',
		ocupacion = '".$_POST["ocupacion"]."',
		barrio= '".$_POST["barrio"]."',
		foto1 = '$nombre_foto',
		foto2 = '$nombre_foto2'
		
		where
		id_quiz = ".$_POST["id_quiz"]."";
		
		}
		
		$res2 = mysql_query($sql2,$con);
		

			  
			  //header("Location: ver_imagen.php?
		$id_quiz= mysql_insert_id($con);
		echo "<script type='text/javascript'>
				alert('Sus Datos Fueron Enviados Correctamente. Pronto le Haremos su Entrevista, Este Atento (a)');
				window.location = 'como-funciona.php?id_quiz=".$_POST["id_quiz"]."';
			</script>";
		
		?>
		
		
		
		<?php
		}
		//*********************
	}else{
		?>
		
		el archivo subido solo puede ser jpg, png o gif<br>		
		<input type="button" value="volver" title="volver" onclick="history.back()"/>
		
		<?php
	}
	
	
			


?>