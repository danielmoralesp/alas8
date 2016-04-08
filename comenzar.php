<?php
	//el require llama a la libreria o fichero donde tengo las funciones de conexion y de trabajo
	require_once("conexion.php");
	//*********

	$paso1 = '
	
	
	<html>
		<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
		<title>Notify Prueba</title>
		';
		require_once("emails/Notify/Templates/HTML/Notify1/style.html");
		$paso1.='


		</head>
		<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


		<!-- Notification 1  -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#303030" style="background-color: rgb(48, 48, 48);">
			<tr>
				<td align="center" style="background-image: url("http://floresymas.co/emails/templates/Notify1/images/not1_bg_image.jpg"); -webkit-background-size: cover; background-size: cover; background-color: rgb(48, 48, 48); background-position: center center; background-repeat: no-repeat;"id="not1">
				
					
					<!-- Mobile Wrapper -->
					<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" object="drag-module-small">
						<tr>
							<td width="100%" align="center">
								
								<div class="sortable_inner ui-sortable">
								
								<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" object="drag-module-small">
									<tr>
										<td width="352" valign="middle">
										
											<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
												<tr>
													<td width="100%" height="50"></td>
												</tr>
											</table>
																			
										</td>
									</tr>
								</table>
								<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" object="drag-module-small">
									<tr>
										<td width="352" valign="middle" align="center">
										
											<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
												<tr>
													<td width="100%" height="50"></td>
												</tr>
											</table>
																			
										</td>
									</tr>
								</table>
								
								</div>
								
							</td>
						</tr>
					</table>
					
					<table width="392" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
						<tr>
							<td align="center" width="20" valign="middle"></td>
							<td align="center" width="352" valign="middle">
					
								<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
									<tr>
										<td align="center" width="352" valign="middle" bgcolor="#1dc8e9"style="background-color: rgb(29, 200, 233);">
										
											<div class="sortable_inner ui-sortable">
								
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#1dc8e9"object="drag-module-small" style="background-color: rgb(29, 200, 233);">
												<tr>
													<td width="352" valign="middle" align="center">
													
														<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td width="100%" height="50"></td>
															</tr>
														</table>							
													</td>
												</tr>
											</table>
											<!-- Start Top -->
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#1dc8e9"object="drag-module-small" style="background-color: rgb(29, 200, 233);">
												<tr>
													<td width="352" valign="middle" align="center">
														
														<!-- Header Text --> 
														<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td align="center" valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 40px; color: rgb(255, 255, 255); line-height: 44px; font-weight: 100;"class="fullCenter" >
																	<!--[if !mso]><!--><span style="font-family: "proxima_novathin", Helvetica; font-weight: normal;"><!--<![endif]-->Did you forget something?<!--[if !mso]><!--></span><!--<![endif]-->
																</td>
															</tr>
															<tr>
																<td width="100%" height="15"></td>
															</tr>
														</table>
															
													</td>
												</tr>
											</table><!-- End Top -->
											
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#1dc8e9"object="drag-module-small" style="background-color: rgb(29, 200, 233);">
												<tr>
													<td width="352" valign="middle" align="center">
													
														<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td width="100%" height="15"></td>
															</tr>
															<tr>
																<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 31px; color: rgb(255, 255, 255); line-height: 38px; font-weight: bold; text-transform: uppercase;"class="fullCenter" >
																	<!--[if !mso]><!--><span style="font-family: "proxima_novablack", Helvetica; font-weight: normal;"><!--<![endif]-->Here it is!<!--[if !mso]><!--></span><!--<![endif]-->
																</td>
															</tr>
														</table>
																						
													</td>
												</tr>
											</table><!-- End Top -->
											
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#1dc8e9"object="drag-module-small" style="background-color: rgb(29, 200, 233);">
												<tr>
													<td width="352" valign="middle" align="center">
													
														<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td width="100%" height="50"></td>
															</tr>
														</table>							
													</td>
												</tr>
											</table>
											
											</div>
											
										</td>
									</tr>
								</table>
								
							</td>
							<td align="center" width="20" valign="middle"></td>
						</tr>
					</table>
					
					<table width="392" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
						<tr>
							<td align="center" width="20" valign="middle"></td>
							<td align="center" width="352" valign="middle">
					
								<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
									<tr>
										<td align="center" width="352" valign="middle" bgcolor="#ffffff"<div="" class="sortable_inner ui-sortable" style="background-color: rgb(255, 255, 255);">
											
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
												<tr>
													<td width="352" valign="middle" align="center">
													
														<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td width="100%" height="50"></td>
															</tr>
														</table>							
													</td>
												</tr>
											</table>
											
											<!-- Start Second -->
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
												<tr>
													<td width="352" valign="middle" align="center">
														
														<!-- Header Text --> 
														<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td align="center" valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 39px; color: rgb(33, 33, 33); line-height: 44px; font-weight: 100;"class="fullCenter" >
																	<!--[if !mso]><!--><span style="font-family: "proxima_novathin", Helvetica; font-weight: normal;"><!--<![endif]-->Hi, Darryl!<!--[if !mso]><!--></span><!--<![endif]-->
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
												<tr>
													<td width="352" valign="middle" align="center">
													
														<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td width="100%" height="30"></td>
															</tr>
														</table>							
													</td>
												</tr>
											</table>
											
											<!-- Start Second -->
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
												<tr>
													<td width="352" valign="middle" align="center">
														
														<!-- Header Text --> 
														<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(81, 81, 81); line-height: 24px;"class="fullCenter" >
																	<!--[if !mso]><!--><span style="font-family: "proxima_nova_rgregular", Helvetica; font-weight: normal;"><!--<![endif]-->Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.<!--[if !mso]><!--></span><!--<![endif]-->
																</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
												<tr>
													<td width="352" valign="middle" align="center">
													
														<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td width="100%" height="50"></td>
															</tr>
														</table>							
													</td>
												</tr>
											</table>
											
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
												<tr>
													<td width="352" valign="middle" align="center">
													
														<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															
															<tr>
																<td valign="middle" width="100%" class="icon18" align="center">
																	
																	<!-- Input 1 -->
																	<table width="265" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
																		<tr>
																			<td width="44" height="44" bgcolor="#1dc8e9"style="text-align: center; background-color: rgb(29, 200, 233);"><span ><img src="http://floresymas.co/emails/templates/Notify1/images/icon_18px_1.png" width="18" alt="" border="0" ></span></td>
																			<td width="20" height="44" bgcolor="#f5f7f7"style="background-color: rgb(245, 247, 247);"></td>
																			<td width="181" height="44" bgcolor="#f5f7f7"style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(29, 200, 233); line-height: 24px; background-color: rgb(245, 247, 247);" ><!--[if !mso]><!--><span style="font-family: proxima_nova_rgregular, Helvetica; font-weight: normal; color: rgb(29, 200, 233);"><!--<![endif]-->DerrylLogan1975<!--[if !mso]><!--></span><!--<![endif]--></td>
																			<td width="20" height="44" bgcolor="#f5f7f7"style="background-color: rgb(245, 247, 247);"></td>
																		</tr>
																	</table><!-- End Space -->
																	
																</td>
															</tr>
															<tr>
																<td width="100%" height="1" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
												<tr>
													<td width="352" valign="middle" align="center">
													
														<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td valign="middle" width="100%" class="icon18" align="center">
																	
																	<!-- Input 2 -->
																	<table width="265" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
																		<tr>
																			<td width="44" height="44" bgcolor="#1dc8e9"style="text-align: center; background-color: rgb(29, 200, 233);"><span ><img src="http://floresymas.co/emails/templates/Notify1/images/icon_18px_2.png" width="18" alt="" border="0" ></span></td>
																			<td width="20" height="44" bgcolor="#f5f7f7"style="background-color: rgb(245, 247, 247);"></td>
																			<td width="181" height="44" bgcolor="#f5f7f7"style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(29, 200, 233); line-height: 24px; background-color: rgb(245, 247, 247);" ><!--[if !mso]><!--><span style="font-family: proxima_nova_rgregular, Helvetica; font-weight: normal; color: rgb(29, 200, 233);"><!--<![endif]-->derryl1234asdf<!--[if !mso]><!--></span><!--<![endif]--></td>
																			<td width="20" height="44" bgcolor="#f5f7f7"style="background-color: rgb(245, 247, 247);"></td>
																		</tr>
																	</table><!-- End Space -->
																	
																</td>
															</tr>
															<tr>
																<td width="100%" height="1" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
											
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
												<tr>
													<td width="352" valign="middle" align="center">
													
														<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td width="352" height="30"></td>
															</tr>
															<!----------------- Button Center ----------------->
															<tr>
																<td>
																	<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" class="fullCenter"> 
																		<tr> 
																			<td width="265" align="center" height="45"bgcolor="#1dc8e9" style="padding-left: 22px; padding-right: 22px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(29, 200, 233);">
																				<!--[if !mso]><!--><span style="font-family: "proxima_novablack", Helvetica; font-weight: normal;"><!--<![endif]-->
																					<a href="#" style="color: rgb(255, 255, 255); font-size: 18px; text-decoration: none; line-height: 34px; width: 100%;">Go for it!</a>
																				<!--[if !mso]><!--></span><!--<![endif]-->
																			</td> 
																		</tr> 
																	</table> 
																</td>
															</tr>
															<!----------------- End Button Center ----------------->
														</table>
																						
													</td>
												</tr>
											</table>
											
											<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" bgcolor="#ffffff"object="drag-module-small" style="background-color: rgb(255, 255, 255);">
												<tr>
													<td width="352" valign="middle" align="center">
													
														<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
															<tr>
																<td width="100%" height="50"></td>
															</tr>
														</table>							
													</td>
												</tr>
											</table><!-- End Second -->
											
										
								
										</td>
									</tr>
								</table>
								
							</td>
							<td align="center" width="20" valign="middle"></td>
						</tr>
					</table>
					
					<!-- Mobile Wrapper -->
					<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
						<tr>
							<td width="352" align="center">
							
								<div class="sortable_inner ui-sortable">
								
								<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" object="drag-module-small">
									<tr>
										<td width="352" valign="middle" align="center">
										
											<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
												<tr>
													<td width="100%" height="40"></td>
												</tr>
											</table>							
										</td>
									</tr>
								</table>
								
								<!-- CopyRight -->
								<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="full" object="drag-module-small">
									<tr>
										<td align="center" valign="middle" width="352" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: rgb(149, 149, 149); line-height: 24px;"class="fullCenter" >
										
											
											<!--[if !mso]><!--><span style="font-family: "proxima_nova_rgregular", Helvetica; font-weight: normal;"><!--<![endif]-->
											
											Copyright RocketWay Lorem ipsum dolor sit amet, consectetur adipisicing elit, <!--[if !mso]><!--></span><!--<![endif]-->
											
											<!--[if !mso]><!--><span style="font-family: "proxima_nova_rgregular", Helvetica;"><!--<![endif]-->
											
											<!--subscribe--><a href="#" style="text-decoration: none; color: rgb(149, 149, 149);">Unsubscribe</a><!--unsub-->
											<!--[if !mso]><!--></span><!--<![endif]-->
											
											
											
										</td>
									</tr>
								</table><!-- End CopyRight -->
								
								<table width="352" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile" object="drag-module-small">
									<tr>
										<td align="center" width="352" valign="middle">
										
											<table width="265" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
												<tr>
													<td width="100%" height="60"></td>
												</tr>
												<tr>
													<td width="100%" height="1" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
												</tr>
											</table>							
										</td>
									</tr>
								</table>
								</div>
					
							</td>
						</tr>
					</table>
					
				</div>
				</td>
			</tr>
		</table><!-- End Notification 1 -->

		<!-- Notification 2  -->
		<div style="display: none;" id="element_014856350841000676"></div><!-- End Notification 2 -->

		<!-- Notification 3 -->
		<div style="display: none" id="element_08709477428346872"></div><!-- End Notification 3 -->

		<!-- Notification 4  -->
		<div style="display: none" id="element_0068720095558092"></div><!-- End Notification 4 -->

		<!-- Notification 5 -->
		<div style="display: none" id="element_07530045635066926"></div><!-- End Notification 5 -->

		<!-- Notification 6 -->
		<div style="display: none" id="element_05104431335348636"></div><!-- End Notification 6 -->
		</div>
		</body></html>	<style>body{ background: none !important; } </style>
	
	
	'
	?>
	
	<?
	
	/*
	// Varios destinatarios
					$para  = 'prueba@gmail.com' . ', '; // atención a la coma
					$para .= 'danielmorales1202@gmail.com';

					// subject
					$titulo = 'Entraron al Paso 1';

					// message
					$mensaje = $paso1;

					// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
					$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
					$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

					// Cabeceras adicionales
					//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
					$cabeceras .= 'From: Alas8.com <inquietudes@alas8.com>' . "\r\n";
					//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
					//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

					// Mail it
					mail($para, $titulo, $mensaje, $cabeceras);
	*/


	
		$nombre = 'Daniel Morales';
		$email = 'danielmorales1202@gmail.com';
		$subject = 'Entraron al Paso 1';
		$mensaje = $paso1;

		require "emails/class.phpmailer.php";

		$mail = new PHPMailer;
		$mail -> Host = "localhost"; //Para proveedores externos, inidicar el mismo aqui. 
		$mail -> From = "danielmorales@floresymas.com";
		$mail -> FromName = "FloresyMas";
		$mail -> Subject = $subject;
		$mail -> addAddress($email, $nombre);
		$mail -> MsgHTML($mensaje);

		if($mail -> Send()){
			$msg = "El Email ha sido enviado con exito a $email";
		}else{
			$msg = "Ha ocurrido un error al enviar el email a $email";
		}


?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Alas8.com | Comenzar</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="assets/images/logo/favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
   <link id="theme-style" rel="stylesheet" href="assets/css/styles-6.css">
   
   <!-- Validation -->
   <script language="javascript" type="text/javascript" src="assets/js/validacion_paso1.js"></script>
   
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="about-page">    
    <!--Start Header-->
	<?php require_once("header.php"); ?>
	<!--End of Header-->
    
    <div class="headline-bg about-headline-bg">
    </div><!--//headline-bg-->         
    
    <!-- ******Video Section****** --> 
    <section class="story-section section section-on-bg">
        <h2 class="title container text-center">Paso 1 <br><br> ¿A Quién Buscas?</h2>
        <div class="story-container container text-center"> 
            <form name="form" class="form-horizontal" method="post" action="procesar_paso1" enctype="multipart/form-data">
				<div class="story-container-inner" >                    
					<div class="team row">
						<h3 class="title">¿Quieres conocer Hombres o Mujeres?</h3>                    
							<div class="member col-md-6 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/hombres.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="quiero_conocer" type="radio" class="ace" value="hombres"></span>
											<br />
											<span class="name">Hombres</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->						
							<div class="member col-md-6 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/mujeres.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="quiero_conocer" type="radio" class="ace" value="mujeres"></span>
											<br />
											<span class="name">Mujeres</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->  					
					</div><!--//team-->
                <div class="press-kit text-center">
					<div id="div_quiero_conocer"></div>
					<input class="btn btn-cta btn-cta-secondary" type="button" value="Continuar" title="enviar" onClick="validar()">
                </div><!--//press-kit-->
            </div><!--//story-container--> 
			</form>
        </div><!--//container-->
    </section><!--//story-video-->
    
    <!--Start Footer-->
	<?php require_once("footer.php"); ?>
	<!--End of Footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-inview/jquery.inview.min.js"></script>
    <script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/countup/countUp.min.js"></script>    
    <script type="text/javascript" src="assets/js/main.js"></script>
    
            
</body>
</html> 

