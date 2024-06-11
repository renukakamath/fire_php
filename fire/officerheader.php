<?php include 'connection.php' ;
$logid=$_SESSION['logid'];
extract($_GET);
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="officer_viewrequest.php">view request</a>
<a href="officer_addposition.php">add potision</a>
<a href="officer_viewoffandposi.php"> view officers and position</a>
<a href="officer_sentemergency.php">sent emergency</a>
<a href="fire_login.php">logout</a> -->
	<!DOCTYPE HTML>
<!--
	Greatness by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://FreeHTML5.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>fire rescue in building</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

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

	<link href='https:fonts.googleapis.com/css?family=Raleway:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-2">
					<div id="gtco-logo"><a href="index.html">fire.</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="officer_home.php">Home</a></li>
						<li><a href="officer_viewrequest.php">view request</a></li>
						<li><a href="officer_addposition.php">add position</a></li>
						<li><a href="officer_viewoffandposi.php">view officer and position</a></li>
						<li><a href="officer_sentemergency.php">sent emergency</a></li>
						<li><a href="fire_login.php">logout</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
<style type="text/css">
	input[type="text"],[type="password"],[type="email"],[type="select"],['type="date"]
	{
		background-color: white;
	}
</style>
