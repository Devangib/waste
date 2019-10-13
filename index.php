<?php
//php include 'database/server.php'
session_start();
require_once 'database_connection.php';



?>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		.container {
		    position: relative;
		    width: 50%;
		}


		.middle {
		  transition: .5s ease;
		  opacity: 0;
		  position: absolute;
		  top: 10%;
		  left: 10%;
		 
		  text-align: left;
		}

		.row:hover .img-responsive {
		  opacity: 0;
		 
		}

		.row:hover .middle {
		  opacity: 1;
		}

		.text {
		  color: black;
		  font-size: 16px;

		}

	</style>

	<script type="text/javascript">

		//SignUp validation
		function validate_signup(){
			
	    	//Valid email or not
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            //var address = document.getElementById[email].value;
            if (reg.test($("#username1").val()) == false) 
            {
            	document.getElementById("username_error").style.color = "red";
            	document.getElementById("username_error").innerHTML = "Enter your full email address, including the @.";
                return false;
            }
            else{
            	document.getElementById("username_error").innerHTML = "";
            }

            if($('#password1').val().trim().length<8)
            {
            	document.getElementById("password1_error").style.color = "red";
            	document.getElementById("password1_error").innerHTML = "Password can't be less than 8 characters";
               	return false;        
            }  
            else{
            	document.getElementById("password1_error").innerHTML = "";
            }

            if($('#password2').val().trim().length<8)
            {
            	document.getElementById("password2_error").style.color = "red";
             	document.getElementById("password2_error").innerHTML = "Password can't be less than 8 characters";
                return false;        
            }   
            else{
            	document.getElementById("password2_error").innerHTML = "";
            }

            if($('#password1').val().trim()!=$('#password2').val().trim())
	        {
	 		   //alert("Passwords are not matching..");
	 		   	document.getElementById("password2_error").style.color = "red";
            	document.getElementById("password2_error").innerHTML = "Passwords are not matching..";
	     	   	$('#password2').focus();
	     	   	return false;    	  
	     	}
	     	else{
            	document.getElementById("password2_error").innerHTML = "";
            }
		}


	$(document).ready(function(){
	    $("#signup_id").submit(function(){

	    	//Are passwords matching?
	        if($('#password1').val().trim()!=$('#password2').val().trim())
	        {
	 		   
	     	   $('#password2').focus();
	     	   return false;    	  
	     	}

	     	if($('#password1').val().trim().length<8)
            {
            	document.getElementById("password1_error").style.color = "red";
            	document.getElementById("password1_error").innerHTML = "Password can't be less than 8 characters";
            	$('#password1').focus();
               	return false;        
            }  

			if($('#password2').val().trim().length<8)
            {
            	document.getElementById("password2_error").style.color = "red";
             	document.getElementById("password2_error").innerHTML = "Password can't be less than 8 characters";
             	$('#password2').focus();
                return false;        
            }   

	     	


	    });
	});


		//Login Validation
		function validate_login(){

			/*var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            //var address = document.getElementById[email].value;
            if(reg.test($("#username").val()) == false) 
            {
            	document.getElementById("login_username_error").style.color = "red";
            	document.getElementById("login_username_error").innerHTML = "Enter your full email address, including the @.";
            	$('#username').focus();
                return false;
            }
            else{
            	document.getElementById("login_username_error").innerHTML = "";
            }*/
				    	
            if($('#password').val().trim().length<8)
            {
            	document.getElementById("login_password_error").style.color = "red";
            	document.getElementById("login_password_error").innerHTML = "Password can't be less than 8 characters";
            	$('#password').focus();
               	return false;        
            }  
            else{
            	document.getElementById("login_password_error").innerHTML = "";
            }
		}


	$(document).ready(function(){
	    $("#login_id").submit(function(){
	     	
            if($('#password').val().trim().length<8)
            {
            	document.getElementById("login_password_error").style.color = "red";
            	document.getElementById("login_password_error").innerHTML = "Password can't be less than 8 characters";
            	$('#password').focus();
               	return false;        
            }  
            else{
            	document.getElementById("login_password_error").innerHTML = "";
            }


	    });
	});


	</script>
     



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
						
						<li><a href="contact.PHP">CONTACT</a></li>
						<!--<li class="btn-cta"><a href="#"><span>Training Workshops </span></a>-->
						<li class="has-dropdown">
							<a href="#">TRAINING WORKSHOPS</a>
							<ul class="dropdown">
								<li><a href="http://www.kwattsolutions.com/s-sparq.com/solar_workshop.php?edit_id=7" target="new">SOLBIZZ</a></li>
								<li><a href="http://www.kwattsolutions.com/s-sparq.com/solar_install.php" target="new">SOLAR INSTALL</a></li>
							</ul>
						</li>
						
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
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<ul class="tab-menu">
										<li class="active gtco-first"><a href="#" data-tab="signup">Sign up</a></li>
										<li class="gtco-second"><a href="#" data-tab="login">Login</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<form action="after_signup.php" name="signup_form" id="signup_id" method="post" name="form1">



												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Email</label>
														<input type="text" class="form-control" id="username1" name="username1" onblur="validate_signup()" required>
														<span id="username_error">
															
															<?php
												              if (isset($_SESSION['errorMessage']))
												              {
												                echo "<span style='color:red;'>Username is already exist</span>";
												                session_destroy();
												              }
												            ?>
														</span>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" class="form-control" id="password1" name="password1" onblur="validate_signup()" required>
														<span id="password1_error"></span>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password2">Repeat Password</label>
														<input type="password" class="form-control" id="password2" name="password2" onblur="validate_signup()" required>
														<span id="password2_error"></span>
													</div>
												</div>


												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" value="Sign up" id="submit">
													</div>
												</div>
											</form>	
										</div>

										<div class="tab-content-inner" data-content="login">
											<form action="login_validate_user.php" method ="POST" id="login_id">
												<?php
									              if (isset($_SESSION['loginfail']))
									              {
									                echo "<span style='color:red;'>Incorrect Username or Password</span>";
									                session_destroy();
									              }
									            ?>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Username/Email</label>
														<input type="text" class="form-control" name="username" onblur="validate_login()" required>
														<span id="login_username_error"></span>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" class="form-control" name="password" onblur="validate_login()" required>
														<span id="login_password_error"></span>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" value="Login" name="login_user">
													</div>
												</div>
											</form>	


										</div>

									</div>
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
				<div class="col-lg-4 col-md-4 col-sm-6">
			
					<a  href="images/img_2.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div> <!--\e61a-->
							<img src="images/module_1.jpg" alt="Image" class="img-responsive">
							<div class="middle">
                            <div class="text">
								<p>     <ul>
										<li> What is energy</li>
										<li> types of energy</li>
										<li> Indian Renewable scenario</li>
										<li>Goverment policies for Solar power</li>
										<li> Job Oppurtunities</li>
										</ul>
								</p>
							</div>
                            </div>
						</figure>
						<div class="fh5co-text">
							<h2>MODULE 1</h2>
							<p>INTRODUCTION 
                             </p
										>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_3.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/module_2.png" alt="Image" class="img-responsive">
							<div class="middle">
                            <div class="text">
								<p><ul>
															<li>Utilization of solar energy</li>
															<li>Photoelectric effect</li>
															<li>Photovoltic technology</li>
															<li>Making of solar Cell</li>
															<li>Types of PV modules</li>
															<li>Characteristics of solar cell</li></ul></p>
							</div>
                            </div>
						</figure>
						<div class="fh5co-text">
							<h2>Module 2</h2>
							<p> Solar Energy and PV technology</p
                                                         >
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_4.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/module_3.jpg" alt="Image" class="img-responsive">
							<div class="middle">
                            <div class="text">
															<p> <ul>
														 <li>On grid system</li>
														 <li>off grid system</li>
														 <li>hybrid System</li>
														 <li>Net Metering</li>
														 <li>Solar angles</li>
                                                         </ul>
                            </p>
							</div>
                            </div>
						</figure>
						<div class="fh5co-text">
							<h2>Module 3</h2>
							<p>Solar photovoltic System
                                                         
                            </p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_1.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/module_4.gif" alt="Image" class="img-responsive">
							<div class="middle">
                            <div class="text">
								<p>
							<ul>
							<li>PV module(Types of Module)</li>
							<li>Cables and Connectors(AC & DC)</li>
							<li>charge controller(PWM & MPPT)</li>
							<li>Battery</li>
							<li>Inverter(String,Central&Micro)</li>
							<li>load(Types of load)</li>
							</p>
							</div>
                            </div>
						</figure>
						<div class="fh5co-text">
							<h2>MODULE 4</h2>
							<p>Components of Solar PV System
                                                          
                            </p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_5.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/module_5.png" alt="Image" class="img-responsive">
							<div class="middle">
                            <div class="text">
								<p><ul>
									<li> Load Analysis</li>
									<li> Inverter Sizing</li>
									<li> Battery Sizing</li>
									<li>Module Sizing</li>
									<li> DC & AC Cable Sizing </li>
									</ul></p>
							</div>
                            </div>
						</figure>
						<div class="fh5co-text">
							<h2>MODULE 5</h2>
							<p>Offgrid/Battery used PV SyStem Designing</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_6.jpg" class="fh5co-project-item image-popup">
						<figure>

							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/module_6.jpg" alt="Image" class="img-responsive">
							<div class="middle">
                            <div class="text">
								<p><ul>
									<li>Stand alone /off grid/Battery based PV System Designing</li>
									<li> Shadow Analysis</li>
									<li> Economical Evaluation</li>
									<li>Final Report Generatiion</li>
									</ul></p>
							</div>
                            </div>
						</figure>
						<div class="fh5co-text">
							<h2>Module 6</h2>
							<p>PVsyst Siulation Software</p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_2.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/module_7.jpg" alt="Image" class="img-responsive">
							<div class="middle">
                            <div class="text">
								<p><ul>
									<li> Solar Mobile Charger</li>
									<li> Solar powered Streeet Light</li>
									</ul></p>
							</div>
                            </div>
						</figure>
						<div class="fh5co-text">
							<h2>MODULE 7</h2>
							<p>Utility Mini project and Design
                             </p>
										
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_2.jpg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_3.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>MODULE 8</h2>
							<p>Exam for Final certification
                             </p
										>
						</div>
					</a>
				</div>
				

			</div>
		</div>

	</div>
	
<div id="gtco-features" class="border-bottom">
		<div class="gtco-container" id="features">
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
						<small class="block">&copy; Kwatt Solutions Pvt Ltd. All Rights Reserved.</small> 
					
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
