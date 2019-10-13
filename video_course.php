<?php session_start(); ?> 
<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Basic Course</title>
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
<style>
.buttonn {
    background-color: #b8b8b8;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:5px;
	float:right;
	
}
.button {
    background-color: #b8b8b8;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:5px;
	float:center;
	
}
.buttonp {
    background-color: #b8b8b8;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:5px;
	float:left;
}
.buttonn:hover {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.buttonp:hover {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button:hover {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
</style>
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
	
	<?php
	
	echo "<header id='gtco-header' class='gtco-cover' role='banner' style='background-image: url(images/img_4.jpg)'>
		<div class='overlay'></div>
		<div class='gtco-container'>
			<div class='row'>
				<div class='col-md-12 col-md-offset-0 text-left'>
					

					<div class='row row-mt-15em'>";
					include 'database/check.php';
							 if(! $conn ) {
							die('Could not connect: ' . mysqli_error());
									}
					$image_item = $_GET['item'];
					
				
					$query = "SELECT module,heading,short_desp,actual_content,video_path FROM course_info WHERE module= '".$image_item."'";
					 
					$retval = mysqli_query( $conn, $query );
					if(! $retval ) {
                  die('Could not get data: ' . mysqli_error($conn));
               }
                if($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
                  $module=$row['module'] ;
                  $heading=$row['heading'] ;
                  $short_desp=$row['short_desp'] ;
                  $actual_content=$row['actual_content'];
                  $video_path=$row['video_path'];
					echo" <div>
	                        <center><h3>".$heading."</h3>
							<p>".$short_desp."</p>
			                        <video width='800' height='500' style='padding-left:150px padding-top:25px posiion:absolute' controls controlsList='nodownload'>
									  <source src=".$video_path." type='video/mp4'>
									  
									  Your browser does not support HTML5 video.
									</video>
									</center>
			   </div>
						
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
		
	</header>";
        /// buttons
    $prev="";
    $next="";  
    if($image_item==1)
         {$prev=$image_item;}
    else
         {$prev=$image_item - 1;}
    if($image_item==7)
    {$next=$image_item;}
                    
    else
    {$next=$image_item + 1;}

                  echo"<div class='gtco-container'> <a href='video_course.php?item=".$next.">< input type='button' class='buttonn'>Next </a>
				    <a href='video_course.php?item=".$prev.">< input type='button' class='button'>Prev </a>
					 <a href='mcqs.php?item=".$image_item.">< input type='button' class='button' float='center' >Solve Mcqs </a></div>";
				
	
	echo "<div class='gtco-section border-bottom'>
		<div class='gtco-container'>
		<div>
		
		<p>
         ".$actual_content."</p>
         <p>
         
         </p>
         
              </div>
            </div>
        </div>
    </div>";
				
				}  mysqli_close($conn);
?>
			
        </div>
<hr>
    <footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
					<img src = "images/kwatt-logo.png" alt="logo" height="50px" width="160px" />
						<h3 style="padding-top:15px">About <span class="footer-logo">KWatt solutions.Pvt.Ltd<span>.<span></span></h3>
						<p>kSPL is a technology driven company focusing on energy optimization and technology customization to provide economic renewable energy solutions by developing and nurturing a network of entrepreneurs</p>
					</div>
				
				</div>

				

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> 022-67208033</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@kwattsolutions.com</a></li>
							<li><a href="#">
 
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
						<small class="block">&copy; KWatt Solutions Pvt Ltd. All Rights Reserved.</small> 
						
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
