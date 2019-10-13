<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Course|Result</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
	
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
	.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
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
					<div id="gtco-logo"><a href="index.html"><img src="images/logo.png" alt="S-SparQ"  height="60px" width="140px" /> <em>.</em></a></div>
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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_1.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">SOLVE THE</span>
							<h1>MULTIPLE CHOICE QUESTIONS</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	
	
	<div class="gtco-section border-bottom">
	  <div class="gtco-container">
	   <?php 
	  
	   include 'database/check.php';
	  
	   
      	
	if(! $conn ) {
			die('Could not connect: ' . mysqli_error());
					}
			/*$image_item=$_GET['item'];
			$_SESSION['VAR']=$image_item;
		*/
          $image_item=8;
			$query="SELECT short_desp FROM course_info WHERE MODULE ='".$image_item."'" ;
			$result=mysqli_query($conn,$query);
			$sql = "SELECT question,option_A,option_B,option_C,option_D FROM mcqs WHERE module='".$image_item."' ";
			$retval = mysqli_query( $conn, $sql );
					if(! $retval ) {
                  die('Could not get data: ' . mysqli_error($conn));
               }
			
			if(! $result ) {
                  die('Could not get data: ' . mysqli_error($conn));
               }
			 if($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			 {echo "<center><h1>$row[short_desp]</h1></center>";
		     }
		 echo" <form method='POST' action='result_mcq_final.php' onsubmit='onclick_submit();return false' >
		 
			 <ul disk-type='none'>";
            $i=1;
				while($row1 = mysqli_fetch_array($retval, MYSQLI_ASSOC)){
                echo"<li>
				
                    <h3>Q".$i.") $row1[question]</h3>
                    
                    <div>
                        <input type='radio'name='question-".$i."-answers' id='question-".$i."-answers-A' value='A' />
                        <label for='question-1-answers-A'>A) $row1[option_A] </label>
                    </div>
                    
                    <div>
                        <input type='radio' name='question-".$i."-answers' id='question-".$i."-answers-B' value='B' />
                        <label for='question-1-answers-B'>B) $row1[option_B]</label>
                    </div>
                    
                    <div>
                        <input type='radio' name='question-".$i."-answers' id='question-".$i."-answers-C' value='C' />
                        <label for='question-1-answers-C'>C) $row1[option_C]</label>
                    </div>
                    
                    <div>
                        <input type='radio' name='question-".$i."-answers' id='question-".$i."-answers-D' value='D' />
                        <label for='question-1-answers-D'>D) $row1[option_D]</label>
                    </div>
                
                </li>";
				$i = $i+1;
				}
				
				echo"<center> <input type='submit' class='btn btn-primary' value='Submit' id='submit' name='submit' /></center>
		</ul>
				</form>";
 $score=$_SESSION['SCORE'];                                    // pop up result
echo "<div id='myModal' class='modal'>            
<!-- Modal content -->
  <div class='modal-content'>
    <span class='close'>&times;</span>
    <h3>Your Score is :".$score."/ 10 correct
    </h3>
    <p> You will recieve an email on your registered email ID within 24 Hrs.<br>
    <center>Thank you!</center></p>
		</div>";

		
		 mysqli_close($conn);
			
				?>


    
		</div>
	</div>

	
 <script>                      //for result popup
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("submit");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
//btn.onclick = function() {
	function onclick_submit(){
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	
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

