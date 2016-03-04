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
    <title>Alas8.com | Paso 4</title>
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
   <script language="javascript" type="text/javascript" src="assets/js/validacion_paso4.js"></script>
   
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
        <h2 class="title container text-center">Paso 4 <br><br> ¿Como es Tu Cita Ideal?</h2>
        <div class="story-container container text-center">
			 <?php
			if($reg = mysql_fetch_array($res)){
			?>
            <form name="form" class="form-horizontal" method="post" action="edit_paso4.php?id_quiz=<?php echo $reg["id_quiz"];?>" enctype="multipart/form-data">
				<div class="story-container-inner" >                    
					<div class="team row">
						<h3 class="title">¿Que Lugar Frecuentas Más?</h3>                    
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/lleras.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="lugares_frecuenta" type="radio" class="ace" value="Lleras"></span>
											<br />
											<span class="name">Lleras</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->						
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/la33.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="lugares_frecuenta" type="radio" class="ace" value="La 33"></span>
											<br />
											<span class="name">La 33</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/envigado.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="lugares_frecuenta" type="radio" class="ace" value="Envigado"></span>
											<br />
											<span class="name">Envigado</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/lanutibara.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="lugares_frecuenta" type="radio" class="ace" value="Av. Nutibara"></span>
											<br />
											<span class="name">Av. Nutibara</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/sabaneta.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="lugares_frecuenta" type="radio" class="ace" value="Sabaneta"></span>
											<br />
											<span class="name">Sabaneta</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/barriocolombia.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="lugares_frecuenta" type="radio" class="ace" value="Barrio Colombia"></span>
											<br />
											<span class="name">Barrio Colombia</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
					</div><!--//team-->
					<div class="team row">
						<h3 class="title">¿Donde sueñas la Primera Cita?</h3>                    
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/cine.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="cita_donde" type="radio" class="ace" value="Cine"></span>
											<br />
											<span class="name">Cine</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->						
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/bar.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="cita_donde" type="radio" class="ace" value="Bar"></span>
											<br />
											<span class="name">Bar</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->  
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/discoteca.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="cita_donde" type="radio" class="ace" value="Discoteca"></span>
											<br />
											<span class="name">Discoteca</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/restaurante.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="cita_donde" type="radio" class="ace" value="Restaurante"></span>
											<br />
											<span class="name">Restaurante</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/centrocomercial.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="cita_donde" type="radio" class="ace" value="Centro Comercial"></span>
											<br />
											<span class="name">Centro Comercial</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/parque.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="cita_donde" type="radio" class="ace" value="Parque"></span>
											<br />
											<span class="name">Parque</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
					</div><!--//team-->
					<div class="team row">
					<h3 class="title">Describa ¿como seria su cita ideal?</h3> 
					<section class="contact-section section section-on-bg">						 
					<div class="row text-center">						    
                        <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
                            <div class="row"> 
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <label class="sr-only" for="cmessage">Cita Ideal</label>
                                    <textarea class="form-control" id="cmessage" name="cita_ideal" placeholder="Describa su cita ideal" rows="12" required></textarea>
                                </div>                      
                            </div><!--//row-->
                        </div>
                    </div><!--//row-->
					</section><!--//contact-section-->
					</div>
                <div class="press-kit text-center">
					<div id="div_lugares_frecuenta"></div>
					<div id="div_cita_donde"></div>
					<div id="div_cita_ideal"></div>
					<input class="btn btn-cta btn-cta-secondary" type="button" value="Continuar" title="enviar" onClick="validar()">
					<input type="hidden" name="quiero_conocer" value="<?php echo $reg["quiero_conocer"]; ?>"/>
					<input type="hidden" name="serio_casual" value="<?php echo $reg["serio_casual"]; ?>"/>
					<input type="hidden" name="edad_preferida" value="<?php echo $reg["edad_preferida"]; ?>"/>
					<input type="hidden" name="ocupacion_preferida" value="<?php echo $reg["ocupacion_preferida"]; ?>"/>
					<input type="hidden" name="caracteristicas1" value="<?php echo $reg["caracteristicas1"]; ?>"/>
					<input type="hidden" name="caracteristicas2" value="<?php echo $reg["caracteristicas2"]; ?>"/>
					<input type="hidden" name="caracteristicas3" value="<?php echo $reg["caracteristicas3"]; ?>"/>
					<input type="hidden" name="id_quiz" value="<?php echo $_GET["id_quiz"];?>"/>
                </div><!--//press-kit-->				
				</div><!--//story-container-->
			</form>
			<?php
				}
			?>
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

