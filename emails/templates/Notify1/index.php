<?php
	$remitente="FloresyMas.co <ventas@floresymas.co>";
	$asunto="Prueba Email FloresyMas";
	$cuerpo=  file_get_contents('index.html'); 	
	
	
	$header="From:".$remitente."\nReplay-To:".$remitente."\n";
	$header=$header."X-Mailer:PHP/".phpversion()."\n";
	$header=$header."Mine-Version: 1.0\n";
	$header=$header."Content-Type: text/html";			
	mail("danielmorales1202@gmail.com",$asunto,$cuerpo,$header);		
	




?>