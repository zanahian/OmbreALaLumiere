<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Compagnie de l'ombre à la lumière.</title>

    <!-- Bootstrap core CSS -->
    <link href="/edsa-/edsa-OmbreALaLumiere/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/edsa-OmbreALaLumiere/css/cover.css" rel="stylesheet">
    	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="/edsa-OmbreALaLumiere/css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="/edsa-OmbreALaLumiere/css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="/edsa-OmbreALaLumiere/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="/edsa-OmbreALaLumiere/css/animate.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="/edsa-OmbreALaLumiere/css/cardio.css">
  </head>

  <body>

  <div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="/edsa-OmbreALaLumiere/img/logo_cie.jpg" data-active-url="/edsa-OmbreALaLumiere/img/logo_cie.jpg" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#home">Accueil</a></li>
					<li><a href="#actualites">Actualités</a></li>
					<li><a href="#photos">Photos</a></li>
					<li><a href="#contact">Contact</a></li>
					<!--<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Sign Up</a></li>-->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="home">
		<?php include('./views/home.php'); ?>
		<?php include('./views/presentation.php'); ?>
	</header>
	<section id="actualites" class="section section-padded">
		<?php include('./views/actualites.php'); ?>
	</section>
	<section id="photos" class="section gray-bg">
		<?php include('./views/photos.php'); ?>
	</section>
	<section id="contact" class="section">
		<?php include('./views/contact.php'); ?>
	</section>
	<!--<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign Up</h3>
				<form action="" class="popup-form">
					<input type="text" class="form-control form-white" placeholder="Full Name">
					<input type="text" class="form-control form-white" placeholder="Email Address">
					<div class="dropdown">
						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pricing Plan
						</button>
						<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
							<li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
							<li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
							<li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
							<li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
						</ul>
					</div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>-->
	<footer>
		<div class="container">
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2016 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a> exclusively for <a href="http://tympanus.net/codrops/">Codrops</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="https://www.facebook.com/CieDeLOmbreALaLumiere/?fref=ts"><i class="fa fa-facebook"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="/edsa-OmbreALaLumiere/js/jquery-1.11.1.min.js"></script>
	<script src="/edsa-OmbreALaLumiere/js/owl.carousel.min.js"></script>
	<script src="/edsa-OmbreALaLumiere/js/bootstrap.min.js"></script>
	<script src="/edsa-OmbreALaLumiere/js/wow.min.js"></script>
	<script src="/edsa-OmbreALaLumiere/js/typewriter.js"></script>
	<script src="/edsa-OmbreALaLumiere/js/jquery.onepagenav.js"></script>
	<script src="/edsa-OmbreALaLumiere/js/main.js"></script>

  </body>
</html>
