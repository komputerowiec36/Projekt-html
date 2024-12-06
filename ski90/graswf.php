<html>
    <head>
       <title>strona główna</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
	 <object style="position:absolute top:50px">
        <embed src="online_ski_jumping.swf" width="500" height="400" />
     </object>
    <script src="ruffle.js"></script>
   <?php
     $con = mysqli_connect("localhost","root","serwer12345*","tabele");

     if (!$con)

     {

      die('Could not connect: ' . mysqli_error());

     }
     $result = mysqli_query($con,"SELECT * FROM k90 order by odlegloscp DESC limit 1;");
	 $result2 = mysqli_query($con,"SELECT * FROM k90 order by odlegloscd DESC limit 1;");
	 $row = mysqli_fetch_array($result);
	 $row2 = mysqli_fetch_array($result2);
	 if (mysqli_num_rows($result) < 1 or mysqli_num_rows($result2) < 1)
     {
	  echo "Rekordzista Skoczni:<br>";
	  echo "Odległość:";
	 }
	 if (mysqli_num_rows($result) > 0 or mysqli_num_rows($result2) > 0)
     {
	   if ($row['odlegloscp'] > $row2['odlegloscd'])
       {
	    echo "Rekordzista Skoczni: ".$row['nick']."<br>";
	    echo "Odległość: " .$row['odlegloscp'];
	   }
	   if ($row2['odlegloscd'] > $row['odlegloscp'])
       {
	    echo "Rekordzista Skoczni: ".$row2['nick']."<br>";
	    echo "Odległość: " .$row2['odlegloscd'];
	   }
	   if ($row2['odlegloscd'] == $row['odlegloscp'])
       {
	    echo "Rekordzista Skoczni: ".$row['nick']."<br>";
	    echo "Odległość: " .$row2['odlegloscd'];
	   }
	 }
	?>
   </body>
</html>