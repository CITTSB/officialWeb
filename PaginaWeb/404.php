
<!DOCTYPE html>
<html lang="es">
<head>

	<title>CITT San Bernardo 2019</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="vendor/nouislider/jquery.nouislider.min.css">
	<link rel="stylesheet" href="vendor/royalslider/royalslider.css">
	<link rel="stylesheet" href="vendor/royalslider/skins/universal-custom/rs-universal.css">
	<link rel="stylesheet" href="css/style.css">	
</head>
<body class="page-404">

	<div class="page-wrapper">
		
		<div class="container">

			<div class="page-404-main">
				<div class="row">
					<div class="col-md-7">
						<span class="page-404-num">404</span>
						<span class="page-404-notice">Página no existe.</span>
						</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-8">
					<header class="page-404-header">
						<a href="index.html"><img src="images/logo.png" alt=""></a>
					</header>
					<div class="page-404-desc">
                   
                    <?php 
                        $dato = php_uname();
                        $REMOTE_ADDR = "";
                        $ip = GetHostByName($REMOTE_ADDR);
                        $nombre = gethostname(); 	
                        ?>
						<p> Estimado gracias por visitar www.cittsb.cl</p>
                        <a href="index.php" class="btn btn-primary btn-has-icon"><i class="fa fa-home"></i>Volver Inicio</a>
                        <br>
                        <p> <?php echo "Datos: <br> $dato <br> IP : $ip <br> Name: $nombre"?> </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-7 col-md-offset-5">
					<footer class="page-404-footer">
						<span class="page-404-footer-label hidden">follow us</span>
						<ul class="page-404-social list-inline">
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-github"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</footer>
				</div>
			</div>
		</div>

	</div>
	
	
	<!-- Javascript Files
	================================================== -->
	<script src="vendor/jquery/jquery-1.11.2.min.js"></script>
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

	<!-- Google Map -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="vendor/jquery.gmap3.min.js"></script>

	<script src="js/custom.js"></script>

	
</body>
</html>