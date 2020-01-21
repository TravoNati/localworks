	
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
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Cookie -->
	<script src="js/jquery.cookie.js"></script>
	<script>

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
	<body style="background-color:#2E3141;">
<div align =middle>

		</head>
		
        <body>
         <form name="frm" form action="test.php" method="post">
		 <h1>
              <p>Location Search: <input type ="text" required  id = "idName" style="width: 200px; text-align:left" name="name" /></p>
			  </h1>
              <p><id="button" data-text-loading="Loading..." input type ="Submit" required="required" name ="search" value= "Search" /></p>
              <button class="btn btn-lg btn-secondary" id="button" data-text-loading="Loading...">Search</button>
<script>
		

$('#button').click(function() {
	if (document.forms['frm'].idName.value === "") {
		// if empty

    return false;
  }
  // If not empty
  $('#button').button();

    $(this).html('<Div style="margin-top:-20px" />; <img  src="loading1.svg" />');
	$(this).document.forms['frm'].style.display = "none";
});
 

</script>
        </form>
		</body>
<?php

if (isset($_POST['name']))
{
    echo "<table style='border: 1px solid black;'>";
    echo "
    <tr>
        <th>LocationId</th>
        <th>LocationName</th>
        <th>RegionName</th>
        <th>State</th>
        <th>CountryCode</th>
        <th>Latitude</th>
		<th>Longitude</th>
		<th>Radius(Meters)</th>
    </tr>";

    $lines = file('LocationList.txt');
    array_shift($lines);
    
    foreach ($lines as $line)
    {
		$res = explode("|", $line);
		if (strtolower($res[1]) == strtolower($_POST['name']) || $res[0] == $_POST['name'])
        {
			
            echo "<tr>";
            echo "<th>" . $res[0] . "</th>";
            echo "<th>" . $res[1] . "</th>";
            echo "<th>" . $res[2] . "</th>";
            echo "<th>" . $res[3] . "</th>";
            echo "<th>" . $res[4] . "</th>";
            echo "<th>" . $res[5] . "</th>";
			echo "<th>" . $res[6] . "</th>";
			echo "<th>" . $res[7] . "</th>";
            echo "</tr>";
        }
    }
    echo "</table>";
}
?>
<body style="background-color:#2E3141;">