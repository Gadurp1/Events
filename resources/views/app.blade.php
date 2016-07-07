
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Flew &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{url('assets/flew/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{url('assets/flew/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{url('assets/flew/css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{url('assets/flew/css/flexslider.css')}}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{url('assets/flew/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/flew/css/owl.theme.default.min.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{url('assets/flew/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{url('assets/flew/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>


	<div id="fh5co-page">
	<header id="fh5co-header"  class="navbar navbar-fixed-top navbar-default" style="background:#fff" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="index.html">EventStash</a></h1>
				<nav role="navigation">
					<ul>
						<li><a href="{{url('festivals')}}">Festivals</a></li>
						<li><a href="{{url('Venues')}}">Venues</a></li>
            <li><a href="{{url('Events')}}">Events</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

          @yield('content')


          	<footer id="fh5co-footer" role="contentinfo">

          		<div class="container">
          			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
          				<h3>About Us</h3>
          				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          				<p><a href="#" class="btn btn-primary btn-outline with-arrow btn-sm">Join Us <i class="icon-arrow-right"></i></a></p>
          			</div>
          			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
          				<h3>Our Services</h3>
          				<ul class="float">
          					<li><a href="#">Web Design</a></li>
          					<li><a href="#">Branding &amp; Identity</a></li>
          					<li><a href="#">Free HTML5</a></li>
          					<li><a href="#">HandCrafted Templates</a></li>
          				</ul>
          				<ul class="float">
          					<li><a href="#">Free Bootstrap Template</a></li>
          					<li><a href="#">Free HTML5 Template</a></li>
          					<li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
          					<li><a href="#">HandCrafted Templates</a></li>
          				</ul>

          			</div>

          			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
          				<h3>Follow Us</h3>
          				<ul class="fh5co-social">
          					<li><a href="#"><i class="icon-twitter"></i></a></li>
          					<li><a href="#"><i class="icon-facebook"></i></a></li>
          					<li><a href="#"><i class="icon-google-plus"></i></a></li>
          					<li><a href="#"><i class="icon-instagram"></i></a></li>
          				</ul>
          			</div>


          			<div class="col-md-12 fh5co-copyright text-center">
          				<p>&copy; 2016 Free HTML5 template. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></p>
          			</div>

          		</div>
          	</footer>
          	</div>


          	<!-- jQuery -->
          	<script src="{{url('assets/flew/js/jquery.min.js')}}"></script>
          	<!-- jQuery Easing -->
          	<script src="{{url('assets/flew/js/jquery.easing.1.3.js')}}"></script>
          	<!-- Bootstrap -->
          	<script src="{{url('assets/flew/js/bootstrap.min.js')}}"></script>
          	<!-- Waypoints -->
          	<script src="{{url('assets/flew/js/jquery.waypoints.min.js')}}"></script>
          	<!-- Owl Carousel -->
          	<script src="{{url('assets/flew/js/owl.carousel.min.js')}}"></script>
          	<!-- Flexslider -->
          	<script src="{{url('assets/flew/js/jquery.flexslider-min.js')}}"></script>

          	<!-- MAIN JS -->
          	<script src="{{url('assets/flew/js/main.js')}}"></script>

          	</body>
          </html>
