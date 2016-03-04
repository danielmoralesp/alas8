<?php




	require_once("conexion.php");
		$sql = "insert into quiz	
		values
		(null,'".$_POST["quiero_conocer"]."','".$_POST["serio_casual"]."','".$_POST["edad_preferida"]."','".$_POST["ocupacion_preferida"]."','".$_POST["caracteristicas1"]."','".$_POST["caracteristicas2"]."','".$_POST["caracteristicas3"]."','".$_POST["lugares_frecuenta"]."','".$_POST["cita_donde"]."','".$_POST["cita_ideal"]."','".$_POST["nombre"]."','".$_POST["email"]."','".$_POST["edad"]."','".$_POST["celular"]."','".$_POST["skype"]."','".$_POST["facebook"]."','".$_POST["ocupacion"]."','".$_POST["barrio"]."','".$_POST["foto1"]."','".$_POST["foto2"]."','".$_POST["foto3"]."')		
		";
		
		$res = mysql_query($sql,$con);
		
		
		
		

		
		
		
		
		//header("Location: ver_imagen.php?
		$id_quiz= mysql_insert_id($con);
		echo "<script type='text/javascript'>
			window.location='paso2.php?id_quiz=$id_quiz';
		</script>";
		

		
		//******************************
		

		

		
		
		
		
		//*********************

	

	
	
	
	


?>