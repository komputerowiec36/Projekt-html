<meta http-equiv="content-type" content="text/html; charset=utf-8">
<body bgcolor="lightgreen">
<body>
<br><br>
<center>
<style>

table

{
width: 1000px; 

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
<div id="temat">
<center>
<H1>Lista wyników w 3on1<H1>
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

</center>
<form action="3on1.php" method="POST">
<input type="submit" value="wróć">
</script>
</body>
</html>