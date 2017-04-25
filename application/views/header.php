<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KingKong &mdash; Friendly Online PetShop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />
    <link rel="icon" href="<?php echo base_url('assets/');?>images/paw.png" type="image/gif">

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

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/style.css">

	<!-- Modernizr JS -->
        <script src="<?php echo base_url('assets/');?>js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
                    <a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/');?>images/King_Kong.png" width="100" alt=""/></a>
				</div>
				<div class="col-md-4 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="#">Cats</a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('home/pet/')."kucing";?>">Live Cats</a></li>
                                <li><a href="<?php echo base_url('home/food/')."5";?>">Food</a></li>
                                <li><a href="<?php echo base_url('home/food/')."8";?>">Litter</a></li>
                                <li><a href="<?php echo base_url('home/food/')."7";?>">Accessories</a></li>
							</ul>
						</li>
                        <li class="has-dropdown">
							<a href="#">Dogs</a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('home/pet/')."anjing";?>">Live Dogs</a></li>
                                <li><a href="<?php echo base_url('home/food/')."4";?>">Food</a></li>
                                <li><a href="<?php echo base_url('home/food/')."9";?>">Treat and Rawhide</a></li>
                                <li><a href="<?php echo base_url('home/food/')."6";?>">Accessories</a></li>
							</ul>
						</li>
                        
						<li><a href="<?php echo base_url('home/about')?>">About</a></li>
						<li><a href="<?php echo base_url('home/contact')?>">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-5 col-xs-4 text-right hidden-xs menu-2">
					<ul>
                        <li class="shopping-cart"><a href="<?php if($this->session->userdata('login') == true){ echo base_url('account');}else{ echo base_url('login');}?>" class="cart"><span><i class="icon-user"></i></span></a></li>
                        
						<li class="search">
							<div class="input-group">
						      <input type="text" placeholder="Search..">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
						    </div>
						</li>
                        
                        <li class="shopping-cart"><a href="<?php echo base_url('home/cart')?>" class="cart"><span><small><?php if($this->session->userdata('login') == TRUE) {echo $cart_total;}else{echo "0";}?></small><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	