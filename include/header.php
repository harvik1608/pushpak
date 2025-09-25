<?php 
	include 'admin/common.php';
	$site = fetchData("settings.json");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?php echo $site[0]["site_name"]; ?></title>

		<link rel="shortcut icon" href="<?php echo $site[0]['website_url']; ?>assets/website/images/favicon.ico" type="image/png">

	    <!--====== Bootstrap css ======-->
	    <link rel="stylesheet" href="<?php echo $site[0]['website_url']; ?>assets/website/css/bootstrap.min.css">

	    <!--====== Flaticon css ======-->
	    <link rel="stylesheet" href="<?php echo $site[0]['website_url']; ?>assets/website/css/flaticon.css">

	    <!--====== Font Awesome css ======-->
	    <link rel="stylesheet" href="<?php echo $site[0]['website_url']; ?>assets/website/css/font-awesome.min.css">

	    <!--====== Magnific Popup css ======-->
	    <link rel="stylesheet" href="<?php echo $site[0]['website_url']; ?>assets/website/css/magnific-popup.css">

	    <!--====== Owl Carousel css ======-->
	    <link rel="stylesheet" href="<?php echo $site[0]['website_url']; ?>assets/website/css/owl.carousel.min.css">

	    <!--====== Animate css ======-->
	    <link rel="stylesheet" href="<?php echo $site[0]['website_url']; ?>assets/website/css/animate.min.css">

	    <!--====== Slick css ======-->
	    <link rel="stylesheet" href="<?php echo $site[0]['website_url']; ?>assets/website/css/slick.css">

	    <!--====== Default css ======-->
	    <link rel="stylesheet" href="<?php echo $site[0]['website_url']; ?>assets/website/css/default.css">

	    <!--====== Style css ======-->
	    <link rel="stylesheet" href="<?php echo $site[0]['website_url']; ?>assets/website/css/style.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo $site[0]['website_url']; ?>assets/css/toast.css">
	    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
	    <style>
	    	body {
				font-family: "Nunito", serif !important;
				font-optical-sizing: auto;
				font-weight: 400;
				font-style: normal;
			}
	    	.section-title .title {
	    		font-size: 42px;
	    	}
	    </style>
	</head>
	<body>
		<div id="preloader">
	        <div class="loader">
	          	<div class="b line1"></div>
	          	<div class="b line2"></div>
	          	<div class="b line3"></div>
	          	<div class="b line4"></div>
	        </div>
	    </div>
	    <header class="header-area">
	        <div class="header-top">
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-12">
	                        <div class="header-top-item d-flex justify-content-between">
	                            <div class="header-top-ltd">
	                                <p>Welcome to <?php echo $site[0]["site_name"]; ?></p>
	                            </div>
	                            <div class="header-top-info d-none d-lg-block">
	                                <ul>
	                                    <li><i class="flaticon-call-answer"></i><span><?php echo $site[0]["site_phone"]; ?></span></li>
	                                    <li><i class="flaticon-envelope"></i><span><?php echo $site[0]["site_email"]; ?></span></li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="navigation navigation-2">
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-12">
	                        <nav class="navbar navbar-expand-lg">
	                            <a class="navbar-brand" href="<?php echo $site[0]["website_url"]; ?>">
	                                <img src="assets/website/images/logo.png" alt="Logo">
	                            </a>
	                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarFive" aria-controls="navbarFive" aria-expanded="false" aria-label="Toggle navigation">
	                                <span class="toggler-icon"></span>
	                                <span class="toggler-icon"></span>
	                                <span class="toggler-icon"></span>
	                            </button>
	                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarFive">
	                                <ul class="navbar-nav ml-auto">
	                                    <li class="nav-item">
	                                        <a class="page-scroll" href="index.php">Home</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="page-scroll" href="about-us.php">About Us</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="page-scroll" href="products.php">Products</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="page-scroll" href="services.php">Services</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="page-scroll" href="gallery.php">Gallery</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="page-scroll" href="contact-us.php">Contact Us</a>
	                                    </li>
	                                </ul>
	                            </div>

	                            <div class="navbar-btn d-none d-sm-inline-block">
	                                <a class="main-btn main-btn-2" href="<?php echo $site[0]["website_url"]; ?>#contact-area">Get A Quote</a>

	                            </div>
	                       	</nav>
	                   	</div>
	               	</div>
	           	</div>
	       	</div>
	   	</header>