<?php


	
	require_once("conexion.php");
	$sql="select * from quiz
	where id_quiz = ".$_GET["id_quiz"]."";
	$res = mysql_query($sql,$con);
		if($reg = mysql_fetch_array($res)){
		
		$sql2 = "UPDATE quiz
		set 
		quiero_conocer = '".$_POST["quiero_conocer"]."',
		serio_casual = '".$_POST["serio_casual"]."',
		edad_preferida = '".$_POST["edad_preferida"]."',
		ocupacion_preferida = '".$_POST["ocupacion_preferida"]."'			
		
		where
		id_quiz = ".$_POST["id_quiz"]."";
		
		}
		
		$res2 = mysql_query($sql2,$con);
		

			  
			  //header("Location: ver_imagen.php?
		$id_quiz= mysql_insert_id($con);
		echo "<script type='text/javascript'>
				window.location = 'paso3.php?id_quiz=".$_POST["id_quiz"]."';
			</script>";
		
		?>
		
		
		
		<?php
		
		


?>