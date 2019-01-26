<!DOCTYPE html>
<html lang="en">
<head>

<title>VRVENTURES</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="shortcut icon" type="image/icon" href="images/vr.jpg"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bevan|Playball" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Berkshire+Swash|Bevan|Lobster|Playball|Audiowide" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">  
<style type="text/css">
	#navbarr li a{
		color: #2ced3c;
		font-weight:1000;
		font-family: 'Montserrat', sans-serif;
		font-size:20px;
		padding:15px;
		font-weight:bold;
	}
	.navbar-header a{
		color: #c0aa83;
		font-weight: 900;
		font-family: 'Montserrat', sans-serif;
		font-size: 45px;
	}
</style>
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Alfa+Slab+One|Anton|Audiowide" rel="stylesheet"> 
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- =========================
     PRE LOADER       text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
                 0px -5px 35px rgba(255,255,255,0.3);
============================== -->
<div  class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- =========================
    NAVIGATION SECTION   
============================== -->

<div class="navbar navbar-default" role="navigation" id="sliderr">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="background-color:#242424">
				<span class="icon icon-bar" style="background-color: #c0aa83"></span>
				<span class="icon icon-bar" style="background-color: #c0aa83"></span>
				<span class="icon icon-bar" style="background-color: #c0aa83"></span>
			</button>
			<a href="#" class="navbar-brand"> <img src="images/images.png" alt="" title=""></a>
			
			
		</div>
		<div class="collapse navbar-collapse" id="navbarr">
			<ul class="nav navbar-nav navbar-right main-navigation">
				<li><a href="index.php" >Home</a></li>
				<li><a href="about.php" >About</a></li>
				<li><a href="products.php" >Projects</a></li>
				<!-- <li><a href="blog.php" >Blogs</a></li> -->
				<li><a href="contact.php?message=Leave a Comment" >Contact Us</a></li>
			</ul>
		</div>

	</div>
</div>

<!-- =========================
    ABOUT US SECTION   
============================== -->
<section id="newsletter" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp " data-wow-delay="0.9s">
				<h1 style="font-family: 'Montserrat', sans-serif;text-align: left;">Contact Us</h1>
				<h4 style="text-align: left;font-family: 'Montserrat', sans-serif;color:white;">Vrventures > <span style="color:white;">Contact Us</span></h4>
			</div>

		</div>
	</div>
</section>

<?php $message=$_GET['message'];?>
			
<!-- =========================
    BLOG SECTION   
============================== -->
<section id="blog" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-12">

				<div class="blog-comment-form wow fadeInUp" data-wow-delay="1s">
					<h3><?php
					echo $message;
					
				?></h3>
						<form action="mailer/index.php" method="GET" id="comment-form">
							<div class="col-md-6 col-sm-6">
								<input type="text" class="form-control" placeholder="Name" name="name" required>
							</div>
							<div class="col-md-6 col-sm-6">
								<input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
							</div>
							<div class="col-md-12 col-sm-12">
								<input type="email" class="form-control" placeholder="Email" name="email" required>
							</div>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Message" rows="5" name="message" required id="message"></textarea>
							</div>
							<div class="col-md-3 col-sm-3">
								<input name="submit" type="submit"  class="wow fadeInUp smoothScroll btn btn-default"   id="products"  style="font-family: 'Montserrat', sans-serif;" value="Submit">
							</div>
						</form>
				</div>

				

			</div>

			<div class="col-sm-6 hidden-xs wow fadeInUp" data-wow-delay="1.3s">
            
            	<div class="blog-comment-form wow fadeInUp" data-wow-delay="1s" style="padding-top: 10rem">
                
			<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key= AIzaSyCK_lvyKz3zKwl6kXvHIUtKtQI9nc8u-NM'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://addmap.net/'>how to add a google map to your website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=c3eec0194fbd1cac0dad556a5ffd6edf92b4ff41'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(12.914862,77.5913683),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.914862,77.5913683)});infowindow = new google.maps.InfoWindow({content:'<strong>VRVENTURES</strong><br> #1516, 17th Main, 2nd Phase, JP Nagar, Bengaluru - 560078<br>560078 Bengaluru<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>


				 <!-- <div class="container">
                <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxzNNUt-vAbENPf9MtOAdVCueLdi1nZG4&callback=initMap"></script>
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:430px;'><div id='gmap_canvas' style='height:300px;width:430px;'></div><div><small><a href="http://www.googlemapsgenerator.com/en/">https://www.googlemapsgenerator.com/en/</a></small></div><div><small><a href="https://promocode.com.ph/agoda/">travel promo code</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
                    <script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(12.9206535,77.62981860000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.9206535,77.62981860000002)});infowindow = new google.maps.InfoWindow({content:'<strong>XproteanPro Pvt Ltd</strong><br>HSR layout,5th Sector,Bangaluru,India<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div> -->
				</div>

                
			</div>
			<div class="visible-xs wow fadeInUp" data-wow-delay="1.3s">
            
            	<div class="blog-comment-form wow fadeInUp" data-wow-delay="1s">
                
				

				
				 <!-- <div class="container">
                <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxzNNUt-vAbENPf9MtOAdVCueLdi1nZG4&callback=initMap"></script>
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:430px;'><div id='gmap_canvas' style='height:300px;width:430px;'></div><div><small><a href="http://www.googlemapsgenerator.com/en/">https://www.googlemapsgenerator.com/en/</a></small></div><div><small><a href="https://promocode.com.ph/agoda/">travel promo code</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
                    <script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(12.9206535,77.62981860000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.9206535,77.62981860000002)});infowindow = new google.maps.InfoWindow({content:'<strong>XproteanPro Pvt Ltd</strong><br>HSR layout,5th Sector,Bangaluru,India<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div> -->
				</div>

                
			</div>

			
			

			
		</div>
	</div>
</section>


<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Berkshire+Swash|Bevan|Concert+One|Lobster|Playball" rel="stylesheet"> 
<footer>
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				<h2 style="font-family: 'Montserrat', sans-serif;">Contact Us</h2>
				<p>Location:  #1516, 17th Main, 2nd Phase,
					<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; JP Nagar, 
                 Bengaluru - 560078</p>
                   <p>
                  Email: reghevendrar@vrventures.com<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>Web: www.vrventures.com</span>
                </p>
                 <p>
                  Call: +91 9945445678<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      +91 9845218043<br>
                  <span>Monday-Friday (9am-5pm)</span>
                </p>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-4"  data-wow-delay="0.9s">
				<h2 style="font-family: 'Montserrat', sans-serif;"></h2>
					
			</div>

			<div class="wow fadeInUp col-md-3 col-sm-4" data-wow-delay="1s">
				<h2 style="font-family: 'Montserrat', sans-serif;">Follow us</h2>
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-youtube wow fadeIn" data-wow-delay="1.6s"></a></li>
					<li><a href="#" class="fa fa-instagram wow fadeInUp" data-wow-delay="1.9s"></a></li>
					<li><a href="#" class="fa fa-google-plus wow fadeIn" data-wow-delay="2s"></a></li>
				</ul>
			</div>

			<div class="clearfix"></div>

			<div class="col-md-12 col-sm-12">
				<p class="copyright-text">Copyright &copy; 2019 Vrventures Designed by <a href="https://www.linkedin.com/in/murali-yadav-k-n-312659126">Murali Yadav</a>
                    
			</div>
			
		</div>
	</div>
</footer>	

<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>