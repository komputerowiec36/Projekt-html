<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="refresh" content="0; url=k90.php">
    </head>
<body>
<?php

 $number = $_GET['number'];
 $odlegl = $_GET['l'];
 $odlegs = $_GET['f'];
 $punkty = $_GET['punkty'];
 $name = $_GET['name'];
 
 if ($number == $odlegl)
 {

	 if ($name != "" )
	 {
	   $sq = mysqli_connect("localhost","root","serwer12345*","tabele");

	   if (!$sq)

	   {

		die('Could not connect: ' . mysqli_error());

	   }
      
	   mysqli_query($sq,"Insert into k90 SET nick='$name', odlegloscp='$odlegl', odlegloscd='$odlegs', punkty='$punkty';");
	   mysqli_close($sq);
	 }
	 if ($name == "" )
	 {
	   $sq = mysqli_connect("localhost","root","serwer12345*","tabele");

	   if (!$sq)

	   {

		die('Could not connect: ' . mysqli_error());

	   }
       $ip = $_SERVER['REMOTE_ADDR'];
	   $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
	   $name = mysqli_fetch_array($res)['login'];
	   mysqli_query($sq,"Insert into k90 SET nick='$name', odlegloscp='$odlegl', odlegloscd='$odlegs', punkty='$punkty';");
	   mysqli_close($sq);
	 }
 }
  if ($number == $odlegs)
 {

	 if ($name != "" )
	 {
	   $sq = mysqli_connect("localhost","root","serwer12345*","tabele");

	   if (!$sq)

	   {

		die('Could not connect: ' . mysqli_error());

	   }

	   mysqli_query($sq,"Insert into k90 SET nick='$name', odlegloscp='$odlegs', odlegloscd='$odlegl', punkty='$punkty';");
	   mysqli_close($sq);
	 }
	 if ($name == "" )
	 {
	   $sq = mysqli_connect("localhost","root","serwer12345*","tabele");

	   if (!$sq)

	   {

		die('Could not connect: ' . mysqli_error());

	   }
       $ip = $_SERVER['REMOTE_ADDR'];
	   $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
	   $name = mysqli_fetch_array($res)['login'];
	   mysqli_query($sq,"Insert into k90 SET nick='$name', odlegloscp='$odlegl', odlegloscd='$odlegs', punkty='$punkty';");
	   mysqli_close($sq);
	 }
 }
?>
 </body>
</html>
