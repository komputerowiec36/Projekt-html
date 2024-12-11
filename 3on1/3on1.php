<html>
    <head>
       <title>strona główna</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="auto, initial-scale=1">
		<link href="index.css" rel="stylesheet">
    </head>
    <body>
	<body bgcolor="#00cc66">
	<style>

	table

	{
	width: 800px; 

	height: 300px;

	border-style:solid;

	border-width:9px;

	border-color:blue;

	background-color:#e0f7fa;

	text-align: center;

	text-border: 60;

	font-weight: 200px;
	}
	</style>
	<center>
    <H1>Gra piłkarska 3on1<H1>
    </center>
	<div id="lewy" >
	<object style="position:absolute top:50px">
		<embed src="3_on_1.SWF" width="950" height="700" />
	</object>
	 <script src="ruffle.js"></script>
	 <form action="../gry.html" method="POST">
    <input type="submit" value="wróć">
	</form>
	</div>
	<div id="prawy" >
	<center>
	<H1>20 najlepszych graczy<H1>
	</center>
	<?php

	$con = mysqli_connect("localhost","root","serwer12345*","tabele");

	if (!$con)

	  {

	  die('Could not connect: ' . mysqli_error());

	  }
	 $result = mysqli_query($con,"SELECT * FROM 3on1 order by punkty;");

	echo "<table border='1' id='tablica'>

	<tr style= 'background-color:#d2d2d2'>
 
	<th>Lp.</th>

	<th>Nick</th>

	<th>Rundy</th>

	<th>Punkty</th>


	</tr>";

	 $i = 1;

	while($row = mysqli_fetch_array($result))

	  {
	  echo "<tr>";

	  echo "<td>". $i ."</td>";

	  echo "<td><div>". $row['nick'] ."</div></td>";

	  echo "<td><div>". $row['rundy'] ."</div></td>";

	  echo "<td><div>" . $row['punkty'] . "</div></td>";

	  echo "</tr>";
	  $i = $i +1;
	  }

	echo "</table>";

	 

	mysqli_close($con);
	?>
	</div>
   </body>
</html>