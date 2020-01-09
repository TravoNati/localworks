		<html>
		<link rel="stylesheet" href="assets/css/test.css" />
		<html>


   <html>
   <center>
        <head>

        </head>
        <body>
         <form action="locations.php" method="post">
              <p>LocationID/CityName: <input type ="text" required  id = "idName" size="1" style="text-align:center;" name="name" /></p>
              <p><input type ="Submit" required="required" name ="search" value= "Search" /></p>
        </form>
        </body>
    </html>
	</center>
	<?php
@$search =$_POST['name'];
$lines = file('test.txt');

$found = false;
foreach($lines as $line)
{
  if(strpos($line, $search) !== false)
  {
    $found = true;
	
	echo "<center>";
    $res = explode("|", $line);
		echo "<html>\n\t<body>\n\t\tLocation ID:\n\t</body>\n</html><br>";
 echo $res[0];
 echo "<html><br>";
     $res = explode("|", $line);
		echo "<html>\n\t<body>\n\t\tCity:\n\t</body>\n</html><br>";
 echo $res[1];
 echo "<html><br>";
echo "</center>";
  }
}

if(!$found)
{
  echo 'No match found';
}
?>