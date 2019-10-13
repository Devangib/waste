<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Courses|online</title>
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

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
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

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html"><img src="images/logo.png" alt="S-SparQ"  height="60px" width="140px" /><em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="features.php">FEATURES</a></li>
						<li><a href="course_info.php">COURSE INFO</a></li>
						<!--<li class="has-dropdown">
							<a href="#">CONTENT</a>
							<ul class="dropdown">
								<li><a href="#">BASIC OVERVIEW</a></li>
								<li><a href="#">MODULES</a></li>
								<li><a href="#">PROJECTS</a></li>
							</ul>
						</li>-->
					
						<li><a href="contact.php">CONTACT</a></li>
						<!--<li class="btn-cta"><a href="#"><span>Training Workshops </span></a>-->
						<li class="has-dropdown">
							<a href="#">TRAINING WORKSHOPS</a>
							<ul class="dropdown">
								<li><a href="http://www.kwattsolutions.com/s-sparq.com/solar_workshop.php?edit_id=7">SOLBIZZ</a></li>
								<li><a href="http://www.kwattsolutions.com/s-sparq.com/solar_install.php">SOLAR INSTALL</a></li>
							</ul>
						</li>
						<li><a href="index.php">logout</a></li>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Welcome to S-SparQ Online traning course</span>
							<h1>Basic Course</h1>	
							<p style =" font-size:14px">It gives us immense pleasure to inform you about our 9th edition of - "SolarInstall – Hands-on Solar System design and PV Installation training" with a unique offsite retreat training at a truly Solarized village in the land of forests. ​
Total duration of the training will be 7 days. The breakup of 7 days training program is as follows: ​​5 Days theory sessions at Mumbai and 2 Days residential practical training for Hands-On Installation of 4kWp PV plant (On-Grid and Off-Grid) 
Residential practical sessions will refreshingly unwind you by camping in tents, enjoying the tribal village crafts, folk dance and scenic beauty around. The participants will also be given training on marketing & entrepreneurship skill so that they will become the campaigners of solar energy.
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight" >
							<div class="form-wrap">
								<div class="tab" style="padding-right:20px position:relative">
								<img src="images/module_7.jpg" height="400px" width="450px"style= >
									
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Basic course modules</h2>
					<p>Enlightining minds through customized online solar training programs<br> The given are 7 modules:</p>
				</div>
			</div>
			<div class="row">
			<?php 
					include 'database/check.php';
							 if(! $conn ) {
							die('Could not connect: ' . mysqli_error());
									}
					$query = "SELECT DISTINCT module,heading,short_desp,img_path FROM course_info GROUP BY module ";
					$retval = mysqli_query( $conn, $query );
					if(! $retval ) {
                  die('Could not get data: ' . mysqli_error($conn));
               }
				
			while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
				echo"<div class='col-lg-4 col-md-4 col-sm-6'>";
				
					echo "<a href='video_course.php?item=$row[module]' class='fh5co-project-item'>
						<figure>
							<div class='overlay'><i class='ti-plus'></i></div>
							<img src='$row[img_path]' alt='Image' class='img-responsive' >
						</figure>
						<div class='fh5co-text'>
							<h2>$row[heading]</h2>
							<p>$row[short_desp]
                             </p
										>
						</div>
			   </a>
			   </div>";
                
			   
			  
			}
                echo"<div class='col-lg-4 col-md-4 col-sm-6'>
					<a href='final_mcq.php' class='fh5co-project-item '>
						<figure>
							<div class='overlay'><i class='ti-plus'></i></div>
							<img src='images/img_3.jpg' alt='Image' class='img-responsive'>
						</figure>
						<div class='fh5co-text'>
							<h2>MODULE 8</h2>
							<p>Exam for Final certification
                             </p
										>
						</div>
					</a>
				</div>";
			    $conn -> close();
				?>
			</div>
		</div>

	</div>
	
o<div id="gtco-features" class="border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2> Features</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<!----logo here---->
						<img src="images/certi.png" alt="certificate logo" height="100px">
						<h3 style="padding-top:15px">Certificate</h3>
						<p>National Certification from Skills development Department </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<!----logo here---->
						<img src="images/exp.png" alt="certificate logo" height="100px">
						<h3 style="padding-top:15px">Expericence</h3>
						<p>Experience in pv Solar Technology</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<!----logo here---->
						<img src="images/online.jpg" alt="certificate logo" height="100px">
						<h3 style="padding-top:15px">Online Assesment</h3>
						<p>Test your Skills online</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<!----logo here---->
						<img src="images/intern.png" alt="certificate logo" height="100px">
						<h3 style="padding-top:15px">Internship</h3>
						<p>Merit based internship oppurtunities </p>
					</div>
				</div>

				

			</div>
		</div>
	</div>
	


	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
					<img src = "images/kwatt-logo.png" alt="logo" height="50px" width="160px" />
						<h3 style="padding-top:15px">About <span class="footer-logo">KWatt solutions<span>.<span></span></h3>
						<p>kSPL is a technology driven company focusing on energy optimization and technology customization to provide economic renewable energy solutions by developing and nurturing a network of entrepreneurs</p>
					</div>
				
				</div>


				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> 022-67208033</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@kwattsolutions.com</a></li>
							<li><a href="#"><></i>
 
 kWatt Solutions Private Limited&nbsp;
 A-215, Eastern Business District&nbsp;
 LBS Marg Bhandup West&nbsp;
 Mumbai -400078.&nbsp;</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; KWatt solutions Pvt Lmt. All Rights Reserved.</small> 
		
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
