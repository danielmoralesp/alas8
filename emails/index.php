<?php
	$msg = null;
	if(isset($_POST["phpmailer"])){
		$nombre = htmlspecialchars($_POST["nombre"]);
		$email = htmlspecialchars($_POST["email"]);
		$subject = $_POST["subject"];
		$mensaje = $_POST["mensaje"];
		$adjunto = $_FILES["adjunto"];

		require "php-mailer/class.phpmailer.php";

		$mail = new PHPMailer;
		$mail -> Host = "localhost"; //Para proveedores externos, inidicar el mismo aqui. 
		$mail -> From = "danielmorales@floresymas.com";
		$mail -> FromName = "FloresyMas";
		$mail -> Subject = $subject;
		$mail -> addAddress($email, $nombre);
		$mail -> MsgHTML($mensaje);

		if($adjunto["size"] > 0){
			$mail -> addAttachment($adjunto["tmp_name"], $adjunto["name"]);
		}
		if($mail -> Send()){
			$msg = "El Email ha sido enviado con exito a $email";
		}else{
			$msg = "Ha ocurrido un error al enviar el email a $email";
		}

	}

?>

<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Enviar email con PHP Mailer (Desde Server)</h1>
		<strong><?php echo $msg; ?></strong>
		<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>">
			<table>
				<tr>
					<td>Nombre del Destinatario:</td>
					<td><input type="text" name="nombre"></td>
				</tr>
				<tr>
					<td>Email del Destinatario:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Asunto</td>
					<td><input type="text" name="subject"></td>
				</tr>
				<tr>
					<td>Adjuntar Archivo</td>
					<td><input type="file" name="adjunto"></td>
				</tr>
				<tr>
					<td>Mensaje</td>
					<td><textarea name="mensaje" id="" cols="30" rows="10"></textarea></td>
				</tr>
			</table>
			<input type="hidden" name="phpmailer">
			<input type="submit" value="enviar formulario">
		</form>
	</body>


</html>