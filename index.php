	
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
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

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
				<li class="animate-box fh5co-active"><a href="index.php" class="transition">Home</a></li>
				<li class="animate-box fh5co"><a href="http://error-inspector.herokuapp.com/" target="_blank" rel="noopener noreferrer">Error Inspector</a></li>
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
   <html>
   <center>


   <div class="StatusBoxwl2">
		
		<h1>
			
			<h1>
			
<?php
$url = 'http://login.tripinsta.com/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Tripinsta:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

	echo '<span style="color:#ffffff;text-align:center;"><a href="http://login.tripinsta.com/">Tripinsta::</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';		echo '<br>';
	}
				?>
<?php
$url = 'http://bookings.ezbookbyabc.com/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">ABC global:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

	echo '<span style="color:#ffffff;text-align:center;"><a href="http://bookings.ezbookbyabc.com/">ABC global:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';		echo '<br>';
	}
				?>

<?php
$url = 'http://agent.rooooms.com/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Utravel:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

	echo '<span style="color:#ffffff;text-align:center;"><a href="http://agent.rooooms.com/">Utravel:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';		echo '<br>';
	}
				?>

<?php
$url = 'http://agents.checkinenlinea.com/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Check In Viajes:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

	echo '<span style="color:#ffffff;text-align:center;"><a href="http://agents.checkinenlinea.com/">Check In Viajes:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';		echo '<br>';
	}
				?>

<?php
$url = 'http://szallas.mortons.hu/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Mortons Travel:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

	echo '<span style="color:#ffffff;text-align:center;"><a href="http://szallas.mortons.hu/">Mortons Travel:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';		echo '<br>';
	}
				?>

<?php
$url = 'http://hotel.graficon.cz/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Graficon:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

	echo '<span style="color:#ffffff;text-align:center;"><a href="http://hotel.graficon.cz">Graficon:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';		echo '<br>';
	}
				?>
				<?php
$url = 'http://hotels.alphaflightguru.com';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Alpha Guru:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

	echo '<span style="color:#ffffff;text-align:center;"><a href="http://hotels.alphaflightguru.com">Alpha Guru:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';		echo '<br>';
	}
				?>
				<?php
$url = 'http://b2b.taletravel.ro';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">TaleTravel:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

	echo '<span style="color:#ffffff;text-align:center;"><a href="http://b2b.taletravel.ro">TaleTravel:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';		echo '<br>';
	}
				?>

<?php
$url = 'http://b2b.skyhubonline.com';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">SkyHubOnline:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

	echo '<span style="color:#ffffff;text-align:center;"><a href="http://b2b.skyhubonline.com">SkyHubOnline:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';		echo '<br>';
	}
				?>


				
</div>

   <div class="StatusBoxwl">
  
		<h1>
			WhiteLabel Status:
			<h1>
<?php
$url = 'http://b2b.swtravel.az';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">SWTravel:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

	echo '<span style="color:#ffffff;text-align:center;"><a href="http://b2b.swtravel.az">Travel-Life:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';		echo '<br>';
	}
				?>

<?php
$url = 'http://online.travel-life.pro/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Travel-Life:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

		echo '<span style="color:#ffffff;text-align:center;"><a href="http://online.travel-life.pro/">Travel-Life:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';
		echo '<br>';
	}
				?>

				<?php
$url = 'http://agent.hoteltravelagent.biz/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Madison Ave:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

		echo '<span style="color:#ffffff;text-align:center;"><a href="https://agent.hoteltravelagent.biz/">Madison Ave::</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';
		echo '<br>';
	}
				?>
								<?php
$url = 'http://b2b.nhahotels.com/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">NHA Hotels:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

		echo '<span style="color:#ffffff;text-align:center;"><a href="http://b2b.nhahotels.com/">NHA Hotels:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';
		echo '<br>';
	}
				?>

<?php
$url = 'http://backoffice.tektraveler.com/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">TekTraveler:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

		echo '<span style="color:#ffffff;text-align:center;"><a href="https://backoffice.tektraveler.com/">TekTraveler:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';
		echo '<br>';
	}
				?>
<?php
$url = 'http://clients.ezeerooms.com/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Ezeerooms:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

		echo '<span style="color:#ffffff;text-align:center;"><a href="https://clients.ezeerooms.com/">Ezeerooms:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';
		echo '<br>';
	}
				?>

<?php
$url = 'http://agent.almosafer.net/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_exec($ch);
$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($info == 200 OR $info == 303) {
	
	echo '
	<span style="color:#ffffff;text-align:center;">Almosafer:</span><span style="color:#AFA;text-align:center;"> Online</span>
	';
echo '<br>';
}
    Else {

		echo '<span style="color:#ffffff;text-align:center;"><a href="https://agent.almosafer.net/">Almosafer:</href></span><span style="color:#ff1a1a;text-align:center;"> Offline</span>';
		echo '<br>';
	}
				?>

</div>
   
        <head>	
		<div class="StatusBox">
		<div align =right>
		<h1>
			Main Clusters:
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
				</div>
</div>

<style>
div.SearchBox {
	position: relative;
  left: 12px;
  right: 316px;
  top: -772px;
  padding: 20px;
  border-radius: 25px;
  border: 1px solid #808080;
}
div.StatusBox {
	position: relative;
  left: 15px;
  right: 316px;
  top: -802px;
  height: 372px;
  padding: 20px;
  border-radius: 25px;
  border: 1px solid #808080;
}

div.StatusBoxwl {
	position: relative;
  left: -398px;
  right: 200px;
  top: -428px;
  padding: 20px;
  border-radius: 25px;
}

div.StatusBoxwl2 {
	position: relative;
  left: -69px;
  right: 269px;
  top: -21px;
  padding: 20px;
  border-radius: 25px;
}

div.StatusBoxwl24 {
	position: relative;
  left: -300px;
  right: 200px;
  top: -20px;
  padding: 20px;
  border-radius: 25px;
}

</style>
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
	obj.style.width = '400px';
	
  }
</script>
  <div class="SearchBox">
<iframe src="test.php" frameborder="0" scrolling="no" onload="resizeIframe(this)">

	</html>
	<div>
	<div>
		<div>
	</center>
	


<!--
<br>
<br>Mapping Search
<form action="https://mapping-hub.azurewebsites.net/EditMapping/ExternalAccess?hotelId=4027999&supplierKey=1159427" method="get" target="_blank">
  Hotel ID: <input type="text" name="hotelId"><br>
  Supplier ID: <input type="text" name="supplierKey"><br>
  <input type="submit" value="Search">
</form>
-->



<br>
		<footer id="fh5co-footer" class="">
			<div class="container">
				
					<div class="col-md-12 text-center">
						<p><small>&copy; Travolutionary </small> </p>
						<ul class="fh5co-social">

					
					</div>
				</div>
			</div>
		</footer>

	</div>
