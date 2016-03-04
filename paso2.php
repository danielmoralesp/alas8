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
    <title>Alas8.com | Paso 2</title>
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
   <script language="javascript" type="text/javascript" src="assets/js/validacion_paso2.js"></script>
   
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
		<h2 class="title container text-center">Paso 2 <br><br> ¿Que Quieres?</h2>
        <div class="story-container container text-center">
			<?php
			if($reg = mysql_fetch_array($res)){
			?>
            <form name="form" class="form-horizontal" method="post" action="edit_paso2.php?id_quiz=<?php echo $reg["id_quiz"];?>" enctype="multipart/form-data">
				<div class="story-container-inner" >                    
					<div class="team row">
						<h3 class="title">¿Algo Serio o Casual?</h3>                    
							<div class="member col-md-6 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/serio.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="serio_casual" type="radio" class="ace" value="serio"></span>
											<br />
											<span class="name">Serio</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->						
							<div class="member col-md-6 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/casual.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="serio_casual" type="radio" class="ace" value="casual"></span>
											<br />
											<span class="name">Casual</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->  					
					</div><!--//team-->
					<div class="team row">
						<h3 class="title">¿Que Edad Prefieres?</h3>                    
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/20-35.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="edad_preferida" type="radio" class="ace" value="20-35"></span>
											<br />
											<span class="name">20-35</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->						
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/36-45.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="edad_preferida" type="radio" class="ace" value="36-45"></span>
											<br />
											<span class="name">36-45</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->  
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/46-mas.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="edad_preferida" type="radio" class="ace" value="46-mas"></span>
											<br />
											<span class="name">46 o más</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
					</div><!--//team-->
					<div class="team row">
						<h3 class="title">Que Haga Algo como...</h3>                    
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/estudiar.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="ocupacion_preferida" type="radio" class="ace" value="estudiar"></span>
											<br />
											<span class="name">Estudiar</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->						
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/trabajar.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="ocupacion_preferida" type="radio" class="ace" value="trabajar"></span>
											<br />
											<span class="name">Trabajar</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member-->  
							<div class="member col-md-4 col-sm-6 col-xs-12">
								<div class="member-inner">
									<figure class="profile">
										<img class="img-responsive" src="assets/images/quiz/vagos.jpg" alt=""/>
										<figcaption class="info">
											<span class="job-title"><input name="ocupacion_preferida" type="radio" class="ace" value="nada"></span>
											<br />
											<span class="name">Nada!</span>										
										</figcaption>
									</figure><!--//profile-->
								</div><!--//member-inner-->
							</div><!--//member--> 
					</div><!--//team-->
                <div class="press-kit text-center">
					<div id="div_serio_casual"></div>
					<div id="div_edad_preferida"></div>
					<div id="div_ocupacion_preferida"></div>
					<input class="btn btn-cta btn-cta-secondary" type="button" value="Continuar" title="enviar" onClick="validar()">
					<input type="hidden" name="quiero_conocer" value="<?php echo $reg["quiero_conocer"]; ?>"/>
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

