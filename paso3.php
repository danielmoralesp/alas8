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
    <title>Alas8.com | Paso 3</title>
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
   <script language="javascript" type="text/javascript" src="assets/js/validacion_paso3.js"></script>
   
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
        <h2 class="title container text-center">Paso 3 <br><br> Preferencias Especificas</h2>
        <div class="story-container container text-center"> 
            <?php
			if($reg = mysql_fetch_array($res)){
			?>
			<form name="form" class="form-horizontal" method="post" action="edit_paso3.php?id_quiz=<?php echo $reg["id_quiz"];?>" enctype="multipart/form-data">
				<div class="story-container-inner" >                    
					<div class="team row">
						<h3 class="title">Debe ser...</h3>                    
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/rumbero.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="caracteristicas1" type="radio" class="ace" value="rumbero(a)"></span>
											<br />
											<span class="name">Rumbero (a)</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->						
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/carinoso.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="caracteristicas1" type="radio" class="ace" value="carinoso(a)"></span>
											<br />
											<span class="name">Cariñoso (a)</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/romantico.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="caracteristicas1" type="radio" class="ace" value="romantico(a)"></span>
											<br />
											<span class="name">Romantico (a)</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
					</div>
					<div class="team row">
						<h3 class="title">Me Gustaria que fuera...</h3>      
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/frio.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="caracteristicas2" type="radio" class="ace" value="frio(a)"></span>
											<br />
											<span class="name">Frio (a)</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/hippie.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="caracteristicas2" type="radio" class="ace" value="hippie"></span>
											<br />
											<span class="name">Hippie</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/universitario.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="caracteristicas2" type="radio" class="ace" value="universitario(a)"></span>
											<br />
											<span class="name">Universitario (a)</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
					</div>
					<div class="team row">
						<h3 class="title">Me enamoro si es...</h3>      
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/ejecutivo.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="caracteristicas3" type="radio" class="ace" value="ejecutivo(a)"></span>
											<br />
											<span class="name">Ejecutivo (a)</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/casero.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="caracteristicas3" type="radio" class="ace" value="casero(a)"></span>
											<br />
											<span class="name">Casero (a)</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->  
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/extrovertido.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="caracteristicas3" type="radio" class="ace" value="extrovertido(a)"></span>
											<br />
											<span class="name">Extrovertido (a)</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 							
					</div><!--//team-->
                <div class="press-kit text-center">
					<div id="div_caracteristicas1"></div>
					<div id="div_caracteristicas2"></div>
					<div id="div_caracteristicas3"></div>
					<input class="btn btn-cta btn-cta-secondary" type="button" value="Continuar" title="enviar" onClick="validar()">
					<input type="hidden" name="quiero_conocer" value="<?php echo $reg["quiero_conocer"]; ?>"/>
					<input type="hidden" name="serio_casual" value="<?php echo $reg["serio_casual"]; ?>"/>
					<input type="hidden" name="edad_preferida" value="<?php echo $reg["edad_preferida"]; ?>"/>
					<input type="hidden" name="ocupacion_preferida" value="<?php echo $reg["ocupacion_preferida"]; ?>"/>
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

