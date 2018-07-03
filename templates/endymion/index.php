<?php 

defined( '_JEXEC' ) or die( 'Restricted access' );

$app  = JFactory::getApplication();
$sitename = $app->get('sitename');

?>



<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="head" />
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
		<!-- CSS Files -->
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
		<!-- CSS Just for demo purpose, don't include it in your project -->
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/demo.css" rel="stylesheet" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/hamburger-menu.css" rel="stylesheet" />
	</head>
	<body class="index-page sidebar-collapse">
		<!-- Navbar -->
		<div class="outer-menu">
		  <input class="checkbox-toggle" type="checkbox" />
		  <div class="hamburger">
			<div></div>
		  </div>
		  <div class="menu">
			<div>
			  <div>
				  <jdoc:include type="modules" name="menu" />
			  </div>
			</div>
		  </div>
		</div>
		<!-- End Navbar -->
		<div class="wrapper">
			<div class="page-header clear-filter" filter-color="white">
				<div class="page-header-image" data-parallax="true" style="background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/architect-254579_1920.jpg');">
				</div>
				<div class="container">
					<div class="content-center brand">
						<img class="n-logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" alt="">
						<jdoc:include type="modules" name="hero" />
					</div>
				</div>
			</div>
			
			<div id="Nosotros" class="section section-about-us">
				<div class="container">
					<div class="row">
						<div class="col-md-8 ml-auto mr-auto text-center">
							<jdoc:include type="modules" name="about" />
						</div>
					</div>
					<div class="separator separator-primary"></div>
					<div class="section-story-overview">
						<div class="row">
							<div class="col-md-6">
								<div class="image-container image-left" style="background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/architecture-blur-build-159358.jpg')">
									<!-- First image on the left side -->
									<jdoc:include type="modules" name="slogan" />
								</div>
							</div> 
							<div class="col-md-5">
								<!-- First image on the right side, above the article -->
								<div class="image-container image-right" style="background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/architecture-blur-building-392031.jpg')"></div>
								<jdoc:include type="modules" name="mission" />
								<br>
								<jdoc:include type="modules" name="vision" />
								<br>
								<jdoc:include type="modules" name="values" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section" id="Servicios">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<jdoc:include type="modules" name="services" />
							<br>
							<br>
							<jdoc:include type="modules" name="projects" />
						</div>
						<div class="col-lg-6 col-md-12">
							<br>
							<br>
							<br>
							<br>
							<img class="img-raised" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/meeting-2284501_1920.jpg" alt="Nuestros Servicios" >
						</div>
					</div>
				</div>
			</div>
			<footer class="footer" data-background-color="black">
				<div class="container">
					<nav>
						<jdoc:include type="modules" name="menu" />
					</nav>
					<div class="copyright">
						&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>
					</div>
				</div>
			</footer>
			<!--  End Modal -->
		</div>
	</body>
	<!--   Core JS Files   -->
	<?php JHtml::_('jquery.framework', false); ?>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/core/popper.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/core/bootstrap.min.js" type="text/javascript"></script>
	<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/bootstrap-switch.js"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/nouislider.min.js" type="text/javascript"></script>
	<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
	<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/now-ui-kit.js" type="text/javascript"></script>
	<script type="text/javascript">
		
		$(document).ready(function() {
			// the body of this function is in assets/js/now-ui-kit.js
			nowuiKit.initSliders();
		});

		function scrollToDownload() {

			if ($('.section-download').length != 0) {
				$("html, body").animate({
					scrollTop: $('.section-download').offset().top
				}, 1000);
			}
		}
	</script>
</html>