<?php 
session_start();
$mensaje = "";
$enviado="hidden";
$error="hidden";

if(isset($_SESSION['mensaje'])){
	$activado = true;
	$mensaje = $_SESSION['mensaje'];

	if($mensaje=="400"){ // No se envio
		$enviado="hidden";
		$error="";
	}
	if($mensaje=="200"){ // Se envio
		$enviado="";
		$error="hidden";
	}

	$_SESSION["mensaje"] = null; // vuelve hacer null
}

//Numero random
$numero1 = rand(1, 100);
$numero2 = rand(1, 100);
$_SESSION["numero1"] = $numero1;
$_SESSION["numero2"] = $numero2;
?>


<!DOCTYPE html>
<html lang="es">

<head>
	<title>CITT San Bernardo 2019</title>
	<meta name="description" content="Ser los principales agentes de innovación y transferencia tecnológica en la educación superior técnico profesional...">
	<meta name="keywords" content="citt san bernardo, cittsb, citt, innovacion y transferencia, duoc citt, duoc, duoc uc, san bernardo, innovacion, transferencia, tecnologia, citt duoc">
	<meta charset="utf-8">
	<!-- Open Graph data -->
	<meta property="og:title" content="CITT San Bernardo Duoc UC 2019" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.cittsb.cl/" />
	<meta property="og:image" content="https://www.cittsb.cl/images/slider/HackathonCITT2018.jpg" />
	<meta property="og:image" content="https://www.cittsb.cl/images/slider/desafioControlZ.jpg" />
	<meta property="og:description" content="Ser los principales agentes de innovación y transferencia tecnológica en la educación superior técnico profesional..."
	/>

	<link rel="alternate" hreflang="es" href="https://www.cittsb.cl/" />
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="vendor/nouislider/jquery.nouislider.min.css">
	<link rel="stylesheet" href="vendor/royalslider/royalslider.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
	<link rel="stylesheet" href="css/style.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
	    crossorigin="anonymous"></script>
	<script src="vendor/modernizr.js"></script>
	<script src="https://storage.googleapis.com/vrview/2.0/build/vrview.min.js"></script>


	<!-- Map google-->
	<style>
		.google-maps {
			position: relative;
			padding-bottom: 75%;
			height: 0;
			overflow: hidden;
		}

		.google-maps iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100% !important;
			height: 100% !important;
		}
	</style>
</head>

<body>
	<div class="page-wrapper">
		<div class="top-wrapper top-wrapper__bg1" id="top">
			<!-- Header -->
			<header class="header header__fixed">
				<div class="header-main">
					<div class="container">

						<!-- Navigation -->
						<nav class="navbar navbar-default fhmm" role="navigation">

							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>

								</button>
								<!-- Logo -->
								<div class="logo scroll-local col-md-offset-2">
									<a href="#" class="navbar-brand">
										<img src="images/logoCitt.png" alt="citt" width="80px">
									</a>
								</div>
							</div>

							<div id="navbar" class="navbar-collapse collapse">
								<ul class="nav navbar-nav scroll-local">
									<li>
										<a href="#">Home</a>
									</li>
									<li>
										<a href="#section-about">Nosotros</a>
									</li>
									<li>
										<a href="#section-events">Eventos</a>
									</li>
									<li>
										<a href="#section-work">Capitanes CITT</a>
									</li>
									<li>
										<a href="#section-contacts">Contacto</a>
									</li>
									<li>
										<!-- <a href="#" class="btn btn-lg bg-warning">NOTICIAS</a> -->
											<!-- POP up -->
										<a href="#ModalPop" role="button" class="btn btn-large bg-primary btn-primary" data-toggle="modal">Encuesta</a>
  
									</li>
									<!-- <li>
										<a href="https://docs.google.com/forms/d/e/1FAIpQLSd0ZfO6miVjxfjXFEmtCA0k-rUpuqSj_MKI8vRpdFqk2Vuzaw/viewform?embedded=true"
										    class="btn btn-lg bg-danger" target="_blank">INSCRIPCIÓN DE PROYECTOS</a>
									</li> -->
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</header>
			<div class="container">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
						<li data-target="#myCarousel" data-slide-to="6"></li>
						<li data-target="#myCarousel" data-slide-to="7"></li>
						<li data-target="#myCarousel" data-slide-to="8"></li>
						<li data-target="#myCarousel" data-slide-to="9"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">	
						<div class="item active">
							<img src="images/slider/Bemvindo.jpg" alt="evento6" style="width:100%;">
							<div class="carousel-caption">
								<h5 class="text-light bg-citt">Bienvenidos CITT SB 2019</h5>
								<br>
							</div>
						</div>
						<div class="item">
							<img src="images/slider/EncuentroCitt2018.jpg" alt="evento7" style="width:100%;">
							<div class="carousel-caption">
								<h5 class="text-light bg-citt">Ganadores Encuentro Anual CITT 2018 </h5>
								<br>
							</div>
						</div>
						<div class="item">
							<img src="images/slider/2.jpg" alt="evento8" style="width:100%;">
							<div class="carousel-caption">
								<h5 class="text-light bg-citt">DRON DUOC SEDE SAN BERNARDO 2018</h5>
								<br>
							</div>
						</div>
						<div class="item">
							<img src="images/slider/1.jpg" alt="evento1" style="width:100%;">
							<div class="carousel-caption">
								<p class="text-danger">
									<h5 class="text-light bg-citt">Tu Ruta Ganadores Desafío CTRL+Z 2017</h5>
								</p>
								<!--<a href="noticias/desafio-ctrl.html" class="btn btn-danger btn-sm">ver</a> -->
								<br>
								<br>
							</div>
						</div>
						<div class="item">
							<img src="images/slider/desafioControlZ.jpg" alt="evento2" style="width:100%;">
							<div class="carousel-caption">
								<h5 class="text-light bg-citt">Finalistas Desafío CTRL+Z 2017</h5>
								<br>
								<br>
							</div>
						</div>
						<div class="item">
							<img src="images/slider/encuentroCItt.jpg" alt="evento3" style="width:100%;">
							<div class="carousel-caption">
								<h5 class="text-light bg-citt">Salida Encuentro CITT 2017</h5>
								<br>
								<br>
							</div>
						</div>
						<div class="item">
							<img src="images/slider/cumpleEsteban.jpg" alt="evento3" style="width:100%;">
							<div class="carousel-caption">
								<h5 class="text-light bg-citt">Cumpleaños de Esteban</h5>
								<br>
								<br>
								<br>
							</div>
						</div>
						<div class="item">
							<img src="images/slider/web.jpg" alt="evento4" style="width:100%;">
							<div class="carousel-caption">
								<h5 class="text-light bg-citt">Conocimientos a futuras generaciones</h5>
								<br>
								<br>
								<br>
							</div>
						</div>
						<div class="item">
							<img src="images/slider/4.jpg" alt="evento5" style="width:100%;">
							<div class="carousel-caption">
								<h5 class="text-light bg-citt">KOT : KING OF TEACHERS</h5>
								<p>Expo Proyectos CITT 2016</p>
							</div>
						</div>
						<div class="item">
							<img src="images/slider/3.jpg" alt="evento6" style="width:100%;">
							<div class="carousel-caption">
								<h5 class="text-light bg-citt"> Segundo Lugar
									<br> III Fería de Proyectos TI Duoc UC 2015</h5>
								<br>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<!--<i class="fas fa-chevron-left"></i>-->
						<span class="sr-only">Atrás</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<!--<i class="fas fa-chevron-right"></i>-->
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
			</div>
		</div>

	
		<!-- Modal / Ventana / Overlay en HTML -->
		<div id="ModalPop" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">¿Que taller te gustaría que se impartiera en el CITT?</h4>
					</div>
					<div class="modal-body">
						<center><h2>Inscríbete con nosotros</h2></center>						
						<a href="https://docs.google.com/forms/d/e/1FAIpQLSf5cyBGR0LZvHj7WZxDg1k2-WYLnekwGeGPJYkYKWt_7BurRw/viewform?usp=sf_link" target="_blink" class="btn btn-block btn-primary">Inscríbete aquí</a>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- CONTENIDOS -->
		<div class="content-wrapper">

			<!--SECCION NOSOTROS -->
			<section class="page-section" id="section-about">
				<div class="container">
					<div class="section-title-wrapper">
						<div class="section-title-inner">
							<h1 class="section-title section-title__lg">Nosotros somos CITT</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-6">
							<div class="pl-20">
								<div>
									<h3>Misión</h3>
								</div>
								<p>Generar un espacio de interacción entre la sociedad y la comunidad académica para obtener un ambiente de innovación
									e investigación alicada que, mediante el trabajo colaborativo y multidisciplinar, permita aportar a la formación
									de nuestros estudiantes en DuocUC.</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="pl-20">
								<div>
									<h3>Visión</h3>
								</div>
								<p>Ser los principales agentes de innovación y transferencia tecnológica en la educación superior técnico profesional
									y constituirnos en una plataforma de encuentro entre la industria y los principales actores de innovación en el
									área TI de Chile.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- SECCION AVANCES PROGRAMADOS ESTE SEMESTRE -->
			<section class="page-section page-section__darkest" id="section-events">
				<div class="container">

					<div class="section-title-wrapper">
						<div class="section-title-inner">
							<h1 class="section-title">EVENTOS</h1>
							<span class="section-desc">PRIMER SEMESTRE 2019</span>
						</div>
					</div>

					<!-- Line de tiempo  -->
					<div class="timeline row">
						<div class="col-md-2 col-sm-6">
							<a href="#" class="item-link">
								<h5>Bienvenida CITT</h5>
								<div class="desc-holder">
									<span class="desc">11 abril</span>
								</div>
							</a>
						</div>
						<div class="col-md-2 col-sm-6">
							<a href="https://goo.gl/forms/qfjsAD6er5cSEbPC3" class="item-link">
								<h5>3° HACKATHON CITT Sede Maipú</h5>
								<div class="desc-holder">
									<span class="desc">Próximamente...</span>
								</div>
							</a>
						</div>		
						<div class="col-md-2 col-sm-6">
							<a href="#" class="item-link">
								<h5>ENCUENTRO CITT</h5>
								<div class="desc-holder">
									<span class="desc">Próximamente...</span>
								</div>
							</a>
						</div>			
					</div>
				</div>
			</section>

			<!--SECCION IMAGEN EN 360 -->
			<!--<section class="page-section page-section__no-bottom-padding" id="img360">
				<div id='vrview' class="text-center"></div>
				<script>
					window.addEventListener('load', onVrViewLoad);

					function onVrViewLoad() {
						// Selector '#vrview' finds element with id 'vrview'.
						var vrView = new VRView.Player('#vrview', {
							image: 'https://i.imgur.com/Z8uyeMT.jpg',
							preview: 'https://i.imgur.com/Z8uyeMTh.jpg',
							width: '100%',
							height: 400,
							is_stereo: false
							//is_debug: true
						});
					}
				</script>
			</section> -->
			<section class="page-section page-section__no-bottom-padding" id="img360">
				<div class="container">
					
						<div class="section-title-wrapper text-center">
								<div class="section-title-inner">
									<h1 class="section-title">Encuentro CITT 2018</h1>
									<span class="section-desc">Sede San Joaquín</span>
									<iframe src="https://drive.google.com/file/d/1MDvO8wkImyWIEg5tEinrrdsLxdyeADn2/preview" width="100%" height="480"></iframe>
			
								</div>
							</div>
					</div>
			</section>
			<!--SECCION CAPITANES -->
			<section class="page-section page-section__darkest" id="section-work">
				<div class="container">
					<div class="section-title-wrapper">
						<div class="section-title-inner">
							<h3 class="section-title">CITT San Bernardo 2019</h3>
							<p> </p>
						</div>
					</div>
					<div class="row text-center">
						<!-- <div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/pablo_saldana.png" alt="" width="150px" height="150px" />
								<h3>Pablo Saldaña</h3>
								<p>
									Profesor & Coordinador CITT
									<span class="text-info">pabl.saldana@profesor.duoc.cl</span>
								</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/profe_claudia2.jpg" alt="" width="150px" height="150px"
								/>
								<h4>Claudia Bustamante</h4>
								<p>
									Profesora & Coordinadora CITT
									<span class="text-info">cl.bustamantev@profesor.duoc.cl</span>
								</p>
							</div>
						</div> 
						-->
						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/profe_orlan2.jpg" alt="cara_Orlan" width="150px" height="150px"
								/>
								<h3>Orlan Parra</h3>
								<p>Profesor & Coordinador CITT
									<br>
									<span class="text-info">orl.parra@profesor.duoc.cl</span>
								</p>
							</div>
						</div>	
						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/tia-vanessa.jpg" alt="cara_Orlan" width="150px" height="150px"
								/>
								<h3>Vanessa Saez</h3>
								<p>Profesor & Coordinadora CITT
									<br>
									<span class="text-info">va.saez@profesor.duoc.cl</span>
								</p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/profe-Michael2.jpg" alt="cara_m" width="150px" height="150px" />
								<h3>Michael Catalán</h3>
								<p>Profesor & Docente CITT 
									<br>
									<span class="text-info">m.catalan@profesor.duoc.cl</span>
								</p>
							</div>
						</div>
						
						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/Matias.jpg" alt="cara_Mati" width="150px" height="150px" />
								<h3>Matias Cáceres</h3>
								<p>Encargado de Laboratorio
									<br>
									<span class="text-info"></span>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="container text-center">
					<div class="section-title-wrapper">
						<div class="section-title-inner">
							<h3 class="section-title">Capitanes</h3>
							<p> <em>Lider en sus compañeros, refleja los valores institucionales, apoya la gestión de sus coordinadores CITT.</em></p>
						</div>
					</div>
					<div class="col-md-12">
						<p> <strong>"Listado de los nuevos capitanes CITT 2019"</strong> </p>
					</div>
					<!-- Falta asignar nuevos capitanes 2019-->
					
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/Karina.jpg" alt="cara_karina" width="150px" height="150px"
								/>
								<h3>Karina Jofré</h3>
								<p>INGENIERIA EN INFORMÁTICA
									<br>
									<span class="text-info">kar.jofre@alumnos.duoc.cl</span>
								</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/sebaOrrego.jpg" alt="cara_sebaOrrego" width="150px" height="150px"
								/>
								<h3>Sebastián Orrego</h3>
								<p>INGENIERIA EN INFORMÁTICA
									<br>
									<span class="text-info">s.orregoa@alumnos.duoc.cl</span>
								</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/benjamin.jpg" alt="cara_benjaminMora" width="150px" height="150px"
								/>
								<h3>Benjamín Mora</h3>
								<p>INGENIERIA EN INFORMÁTICA
									<br>
									<span class="text-info">b.morat@alumnos.duoc.cl</span>
								</p>
							</div>
						</div>		
					
						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/byron_sepulveda.png" alt="cara_bayron" width="150px" height="150px"
								/>
								<h3>Byron Sepúlveda</h3>
								<p>INGENIERIA EN INFORMÁTICA
									<br>
									<span class="text-info">by.sepulvedas@alumnos.duoc.cl</span>
								</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/Leonardo.jpg" alt="cara_leo" width="150px" height="150px"
								/>
								<h3>Leonardo Romero</h3>
								<p>ANALISTA PROGRAMADOR
									<br>
									<span class="text-info">leon.romero@alumnos.duoc.cl</span>
								</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="people">
								<img class="team-thumb img-circle" src="images/miniaturas/mike.jpg" alt="cara_leo" width="150px" height="150px"/>
								<h3>Elias Retamales</h3>
								<p>ANALISTA PROGRAMADOR
									<br>
									<span class="text-info">el.retamales@alumnos.duoc.cl</span>
								</p>
							</div>
						</div>
					</div>

				
				</div>

			</section>
			
			<!--SECCION CONTACTO -->
			<section class="page-section page-section__no-bottom-padding" id="section-contacts">
				<div class="container">
					<div class="section-title-wrapper">
						<div>
							<h1 class="">Contáctenos</h1>
							<h4 class="section-desc">Tienes alguna pregunta o una idea innovadora</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<form id="contact-form" action="formulario.php" method="post">
								

							<div class="alert alert-success <?php echo $enviado ?>" id="contact-alert-success">
							<strong>!Enviado!</strong> Gracias por su mensaje.
							</div>
							<div class="alert alert-danger <?php echo $error ?>" id="contact-alert-error">
								<strong>¡Error!</strong> Intente nuevamente.
							</div>
								
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input type="text" value="" data-msg-required="Por favor ingresa tu nombre" class="form-control" name="nombre" id="nombre" placeholder="Nombre Completo"
										    required>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope"></i>
										</div>
										<input type="email" value="" data-msg-required="Tu Correo" class="form-control" name="correo" id="correo" placeholder="Ingresa tu correo"
										    required>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment"></i>
										</div>
										<textarea data-msg-required="Por favor escribe tu mensaje" rows="8" class="form-control" name="mensaje" id="mensaje" placeholder="Tu mensaje"
										    required></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group text-center">
										<div class="input-group-addon">
											<i class="fa fa-calculator"> </i>
											 Resultado <strong><?php echo $numero1 . " + " . $numero2 . " =   " ?> </strong>
										</div>
										<input type="number" min="0"  max="300"  value="" data-msg-required="Code" class="form-control" name="resultado" id="resultado" placeholder="Resultado"
										    required>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-has-icon btn-block" id="send" name="opcion" value="Enviar Mensaje">
								</div>
							</form>
						</div>
						<div class="col-md-6">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415.40704535719846!2d-70.70531490710107!3d-33.59865220515375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d94f68e9ddb3%3A0x98e186c606399e72!2sDuoc+UC%3A+Sede+San+Bernardo!5e0!3m2!1ses-419!2scl!4v1524066805202"
							    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!--PIE DE PAGINA -->
		<footer class="footer page-section">
			<div class="container">
				<div class="footer-inner">

					<ul class="footer-social-links footer-social-links__rounded list-inline text-center">
						<li>
							<a href="#" title="LinkedIn">
								<i class="fab fa-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="https://www.facebook.com/cittsanbernardo" title="Facebook">
								<i class="fab fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Twitter">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Instagram">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Github">
								<i class="fab fa-github"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Youtube">
								<i class="fab fa-youtube"></i>
							</a>
						</li>
					</ul>
					
					<div class="footer-text text-center">
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<p>Duoc UC: Sede San Bernardo
									<br> Freire 897, San Bernardo, Región Metropolitana
									<br>
									<a href="http://www.cittsb.cl/">www.cittsb.cl</a>
								</p>

							</div>
							<div class="col-sm-6 col-md-6">

								<img src="images/fondos/cna-fondo-blanco.jpg" alt="" class="respondive-img left" width="200 px">
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	    crossorigin="anonymous"></script>
	<!--<script src="vendor/jquery/jquery-1.11.2.min.js"></script>-->
	<script src="vendor/jquery/jquery-migrate-1.2.1.min.js"></script>
	<script src="vendor/jquery.easing.1.3.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/bootstrap/bootstrap-scripts.js"></script>
	<script src="vendor/bootstrap/fhmm.js"></script>
	<script src="vendor/jquery.flickrfeed.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
	<script src="vendor/isotope/jquery.imagesloaded.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/nouislider/jquery.nouislider.all.min.js"></script>
	<script src="vendor/royalslider/jquery.royalslider.min.js"></script>
	<script src="vendor/jquery.parallax-1.1.3.js"></script>
	<script src="vendor/jcountdown/jquery.jcountdown.js"></script>
	<script src="vendor/wow.min.js"></script>
	<script src="vendor/jquery.countTo.js"></script>
	<script src="vendor/jquery.scrollTo.min.js"></script>
	<script src="vendor/jquery.localScroll.min.js"></script>
	<script src="vendor/jquery.viewport.mini.js"></script>
	<script src="js/jssor.slider.min.js"></script>
	<script src="vendor/jquery.gmap3.min.js"></script>
	<script src="vendor/jquery.validate.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script>
		$(document).ready(function () {
			// Add smooth scrolling to all links in navbar + footer link
			$(".navbar-nav a").on('click', function (event) {
				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();

					// Store hash
					var hash = this.hash;

					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 900, function () {

						// Add hash (#) to URL when done scrolling (default click behavior)
						window.location.hash = hash;
					});
				} // End if
			});

			$(window).scroll(function () {
				$(".slideanim").each(function () {
					var pos = $(this).offset().top;

					var winTop = $(window).scrollTop();
					if (pos < winTop + 600) {
						$(this).addClass("slide");
					}
				});
			});
		})
	</script>
	<script>
		jQuery(document).ready(function () {
			jQuery('.tp-banner').revolution({
				delay: 6000,
				startwidth: 1140,
				startheight: 583,
				hideThumbs: 10,
				hideTimerBar: "on",
				fullWidth: "off",
				forceFullWidth: "off",
				hideCaptionAtLimit: 480,
				soloArrowLeftHOffset: 20,
				soloArrowRightHOffset: 20,
				soloArrowLeftValign: "center",
				soloArrowRightValign: "center",
				soloArrowLeftVOffset: -100,
				soloArrowRightVOffset: -100,
				navigationType: "bullet",
				navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none
				navigationStyle: "round", // round, square, navbar, round-old, square-old, navbar-old 
				navigationVOffset: 116
			});
		});
	</script>
	<script>
		$("#yulio")
			.hover(function (e) {
				$(this).html("ANALISTA PROGRAMADOR").append($("<br>")).append($("<span>").addClass("text-info").html(
					"juli.herrera@alumnos.duoc.cl"))
			});

		$("#yulio").mouseleave(function (e) {
			$(this).html("INGENIERÍA EN INFORMÁTICA").append($("<br>")).append($("<span>").addClass("text-info").html(
				"juli.herrera@alumnos.duoc.cl"))
		})


		$('#ModalPop').modal('show');
	</script>
	
	<script src="js/contact.js"></script>

</body>
</html>