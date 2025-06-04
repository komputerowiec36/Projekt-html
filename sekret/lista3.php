<meta http-equiv="content-type" content="text/html; charset=utf-8">
<body bgcolor="SlateBlue">
<center>
<style>

table

{
width: 1000px; 

height: 300px;

border-style:solid;

border-width:9px;

border-color:blue;

text-align: center;

text-border: 54;

font-weight: 600;
}

</style>	
<?php

$con = mysqli_connect("localhost","root","serwer12345*","tabele");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }
 $ip = $_SERVER['REMOTE_ADDR'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
 $wynik = mysqli_fetch_array($res)['login'];
 
 $res = mysqli_query($con,"SELECT * FROM wynikiox WHERE nick='$wynik';");
 
 if(mysqli_num_rows($res) < 1) { 

 $res2 = mysqli_query($con,"Insert into wynikiox SET id='1', nick='$wynik', wygrane='0', przegrane='1', remisy='0';");
 }
 
 if(mysqli_num_rows($res) > 0) { 
  $res = mysqli_query($con,"SELECT przegrane FROM wynikiox WHERE nick='$wynik';");
  $row = mysqli_fetch_array($res);
  $los = $row['przegrane'] + 1;
  mysqli_query($con, "UPDATE wynikiox SET przegrane='$los'");
 }
$result = mysqli_query($con,"SELECT * FROM wynikiox ORDER BY wygrane DESC");

 

echo "<table border='1'>

<tr>

<th>pozycja</th>

<th>nick</th>

<th>wygrane</th>

<th>remisy</th>

<th>przegrane</th>

</tr>";

 $i = 1;

while($row = mysqli_fetch_array($result))

  {
  echo "<tr>";

  echo "<td>".$i."</td>";

  echo "<td>" . $row['nick'] . "</td>";

  echo "<td>" . $row['wygrane'] . "</td>";

  echo "<td>" . $row['remisy'] . "</td>";
  
  echo "<td>" . $row['przegrane'] . "</td>";

  echo "</tr>";
  $i = $i +1;
  }

echo "</table>";

 

mysqli_close($con);

?>
<form action="oandx.php" method = "POST">
<input type = "Submit" name="submit" Value = "Wróć" />
</form>
</center>
</body>
</html>
