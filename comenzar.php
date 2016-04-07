<?php
	//el require llama a la libreria o fichero donde tengo las funciones de conexion y de trabajo
	require_once("conexion.php");
	//*********

	$paso1 = '
	
	
	<html>
	
	<head>
	
	</head>
	
	<body>
		<h3>Entraron al Paso 1 </h3>
	
					<table id="compairTbl" class="table table-bordered">
							  <thead>
								<tr>
								  <th>Items</th>
								  <th>Hola  </th>
								  
								</tr>
							  </thead>
							  <tbody>

								<tr>
								  <td>Han Entrado al paso 1, Pilas!</td>
								  <td></td>

								</tr>
								
								

							</tbody>
					</table>
	
	</body>
	
	
	
	</html>
	
	
	'
	?>
	
	<?
	
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

