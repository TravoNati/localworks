	
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Local.Works</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Bootstrap Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
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
	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" id="theme-switch" href="css/style.css">
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Cookie -->
	<script src="js/jquery.cookie.js"></script>
	<script>
	if ( $.cookie('styleCookie') === 'style-light.css') {
		$('html, body').css('background', '#eeeeee');
	} else if ($.cookie('styleCookie') === 'style.css') {
		$('html, body').css('background', '#222222');
	}
	</script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Viewport Units Buggyfill -->
	<script src="js/viewport-units-buggyfill.js"></script>
	<!-- Googgle Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
		<link rel="stylesheet" href="assets/css/test.css" />
	<!-- Main JS  -->
	<script src="js/main.js"></script>
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
	<!-- Loader -->
	<div class="fh5co-loader"></div>
	
	<div id="fh5co-page">
		<nav id="fh5co-nav" role="navigation">
			<ul>
				<li class="animate-box"><a href="index.php" class="transition">Home</a></li>
				<li class="animate-box fh5co-active"><a href="Service.php" class="transition">Service Check</a></li>
			</ul>
	
	
			</a>
		</nav>
		
			<div class="container">
				<div class="fh5co-text-wrap animate-box">
					<div class="fh5co-intro-text">
						<h1>Local.<span>Works</span>
							
					</div>
				</div>
	
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
			
			<!-- Search Location-->
			<br>
			<h1>
			Health Check Result:
			<h1>



				<?php
$url = 'http://worldtravelink.com';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">BackOffice:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {
	
		echo '<span style="color:#ffffff;text-align:center;">BackOffice:</span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';
		echo '<br>';
	}




				?>

<?php

$url = 'http://services.travolutionary.com/bookingservices/dynamicdataservice.svc';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Shared Cluster:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
	echo '<br>';

}
    Else {
	
		echo '<span style="color:#ffffff;text-align:center;">Shared Cluster:</span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';
		echo '<br>';
	}

	


				?>
					


<?php

$url = 'http://almosafer-services.travolutionary.com/bookingservices/dynamicdataservice.svc';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Almosafer Cluster:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
	echo '<br>';

}
    Else {
	
		echo '<span style="color:#ffffff;text-align:center;">Almosafer Cluster:</span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';
		echo '<br>';
	}

	


				?>

<?php

$url = 'http://snaptravel-services.travolutionary.com/bookingservices/dynamicdataservice.svc';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">SnapTravel Cluster:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
	echo '<br>';

}
    Else {
	
		echo '<span style="color:#ffffff;text-align:center;">SnapTravel Cluster:</span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';
		echo '<br>';
	}

	


				?>

					


					
   <html>
  


<br>
<br>
		<footer id="fh5co-footer" class="js-fh5co-waypoint">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p><small>&copy; Travolutionary </small> </p>
						<ul class="fh5co-social">

						</ul>
					</div>
				</div>
			</div>
		</footer>

	</div>
	
					<footer id="fh5co-footer" class="js-fh5co-waypoint">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						
					

						</ul>
					</div>
				</div>
			</div>
		</footer>

	</div>
	

	</body>
</html>

