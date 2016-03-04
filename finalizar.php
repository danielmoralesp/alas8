<?php

	require_once("conexion.php");
	$sql="select * from quiz
	where id_quiz='".$_GET["id_quiz"]."'	"; 

	$res = mysql_query($sql,$con);
	
	
?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Finazliar</title>
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
   <script language="javascript" type="text/javascript" src="assets/js/validacion_finalizar.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style type="text/css">
			div.upload {
			width: 157px;
			height: 57px;
			background: url(https://lh6.googleusercontent.com/-dqTIJRTqEAQ/UJaofTQm3hI/AAAAAAAABHo/w7ruR1SOIsA/s157/upload.png);
			overflow: hidden;
		}

		div.upload input {
			display: block !important;
			width: 157px !important;
			height: 47px !important;
			opacity: 0 !important;
			overflow: hidden !important;
		}
	</style>
	
</head> 

<body class="contact-page">
    <div class="wrapper">
        <!--Start Header-->
		<?php require_once("header.php"); ?>
		<!--End of Header-->
        
        <div class="headline-bg about-headline-bg">
        </div><!--//headline-bg-->

        
        <!-- ******Contact Section****** --> 
        <section class="contact-section section section-on-bg">
            <div class="container">
                <h2 class="title text-center">Finalizar</h2>
                <p class="intro text-center">Ingresa tus datos. En breve le asignaremos su pareja!</p>
                <?php
				if($reg = mysql_fetch_array($res)){
				?>
			<form name="form"  class="contact-form"  method="post" action="edit_finalizar.php?id_quiz=<?php echo $reg["id_quiz"];?>" enctype="multipart/form-data">
                    <div class="row text-center">
                        <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
                            <div class="row">                                                           
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="sr-only" for="cname">Nombre</label>
                                    <input type="text" class="form-control" id="cname" name="nombre" placeholder="Su Nombre" minlength="2" >									
                                </div>                    
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="sr-only" for="cemail">Email </label>
                                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Su Email" >
									
                                </div>								
								<div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="sr-only" for="cemail">Email </label>
                                    <input type="email" class="form-control" id="cemail" name="edad" placeholder="Su Edad" >
									
                                </div>								
								<div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="sr-only" for="cname">Telefono Celular</label>
                                    <input type="text" class="form-control" id="cname" name="celular" placeholder="Teléfono Celular" minlength="2" >
									
                                </div> 								
                                <!--<div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="sr-only" for="cemail">Usuario Skype </label>
                                    <input type="email" class="form-control" id="cemail" name="skype" placeholder="Usuario Skype" >
									
                                </div>								
								<div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="sr-only" for="cemail">Usuario Skype </label>
                                    <input type="email" class="form-control" id="cemail" name="facebook" placeholder="Usuario Facebook" >
									
                                </div>																
								<div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="sr-only" for="cname">Ocupación</label>
                                    <input type="text" class="form-control" id="cname" name="ocupacion" placeholder="Ocupación" minlength="2" >
									
                                </div>
								<div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="sr-only" for="cemail">Barrio Residencia</label>
                                    <input type="email" class="form-control" id="cemail" name="barrio" placeholder="Barrio Residencia" >									
                                </div>-->								
								<br />
								<br />
								<br />
								<p class="text-center">Sube 2 Fotografias</p>
								
								<div class="upload col-md-6 col-sm-6 col-xs-12 form-group">
									<input  class="upload" type="file" value="" title="foto1" name="foto1">									
								</div>								
								<div class="upload col-md-6 col-sm-6 col-xs-12 form-group">
									<input class="upload" type="file" value="" title="foto2" name="foto2"><br />									
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 form-group">
									<div id="div_nombre"></div>
									<div id="div_email"></div>
									<div id="div_edad"></div>
									<div id="div_celular"></div>
									<div id="div_skype"></div>
									<div id="div_facebook"></div>
									<div id="div_ocupacion"></div>
									<div id="div_barrio"></div>
									<div id="div_foto1"></div>
									<div id="div_foto2"></div>
									<br />
                                    <input class="btn btn-cta btn-cta-secondary" type="button" value="Finalizar" title="enviar" onClick="validar()">
									<input type="hidden" name="quiero_conocer" value="<?php echo $reg["quiero_conocer"]; ?>"/>
									<input type="hidden" name="serio_casual" value="<?php echo $reg["serio_casual"]; ?>"/>
									<input type="hidden" name="edad_preferida" value="<?php echo $reg["edad_preferida"]; ?>"/>
									<input type="hidden" name="ocupacion_preferida" value="<?php echo $reg["ocupacion_preferida"]; ?>"/>
									<input type="hidden" name="caracteristicas1" value="<?php echo $reg["caracteristicas1"]; ?>"/>
									<input type="hidden" name="caracteristicas2" value="<?php echo $reg["caracteristicas2"]; ?>"/>
									<input type="hidden" name="caracteristicas3" value="<?php echo $reg["caracteristicas3"]; ?>"/>
									<input type="hidden" name="lugares_frecuenta" value="<?php echo $reg["lugares_frecuenta"]; ?>"/>
									<input type="hidden" name="cita_donde" value="<?php echo $reg["cita_donde"]; ?>"/>
									<input type="hidden" name="cita_ideal" value="<?php echo $reg["cita_ideal"]; ?>"/>
									<input type="hidden" name="id_quiz" value="<?php echo $_GET["id_quiz"];?>"/>
                                </div>  								
                            </div><!--//row-->
                        </div>
                    </div><!--//row-->
                    <div id="form-messages"></div>
                </form><!--//contact-form-->
				<?php
					}
				?>
            </div><!--//container-->
        </section><!--//contact-section-->
		
	<!--Start Footer-->
	<?php require_once("footer.php"); ?>
	<!--End of Footer-->
        
        
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script> 
    
    <!-- contact page specific js starts -->
    <script type="text/javascript" src="assets/plugins/jquery.validate.min.js"></script>       
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
    <script type="text/javascript" src="assets/plugins/gmaps/gmaps.js"></script> 
    <script type="text/javascript" src="assets/js/contact.js"></script>  
    <script type="text/javascript" src="assets/js/map.js"></script>
    <!-- contact page specific js ends-->  
      
    <script type="text/javascript" src="assets/js/main.js"></script>
    
            
</body>
</html> 

