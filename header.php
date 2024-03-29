<?php
include('functions/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Zen estates - <?php echo $page_title ?></title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<!-- <img src="images/logo.png" alt="" class="logo"> -->
						<div class="logo-text">
							<h1 class="site-title">Zen-Estates</h1>
							<small class="site-description">There's a home for everything</small>
						</div>
					</a> <!-- #branding -->

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="info.php">Info</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
                            <li class="menu-item"><a href="rent.php">Rent</a></li>
							<li class="menu-item"><a href="sell.php">Buy</a></li>
							<li class="menu-item"><a href="cars.php">Vehicles</a></li>
                            <li class="menu-item"><a href="contact.php">Contact</a></li>
                            <li class="menu-item"><a class="button" target="_blank" href="admin/index.php">Login</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</div> <!-- .site-header -->