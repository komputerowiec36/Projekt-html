<meta http-equiv="content-type" content="text/html; charset=utf-8">
<body bgcolor="litegreen">
<body>
<br><br>
<center>
<H1>Tabela Wyników<H1>
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
<H1>20 najlepszych graczy<H1>
</center>
<?php

$con = mysqli_connect("localhost","root","serwer12345*","tabele");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }
 $result = mysqli_query($con,"SELECT * FROM k120 order by punkty DESC limit 20;");

echo "<table border='1' id='tablica'>

<tr style= 'background-color:#d2d2d2'>

<th>Lp.</th>

<th>Nick</th>

<th>1 skok</th>

<th>2 skok</th>

<th>Punkty</th>

</tr>";

 $i = 1;

while($row = mysqli_fetch_array($result))

  {
  echo "<tr>";

  echo "<td>". $i ."</td>";

  echo "<td><div>". $row['nick'] ."</div></td>";

  echo "<td><div>" . $row['odlegloscp'] . "</div></td>";
  
  echo "<td><div>" . $row['odlegloscd'] . "</div></td>";

  echo "<td><div>" . $row['punkty'] . "</div></td>";

  echo "</tr>";
  $i = $i +1;
  }

echo "</table>";

 

mysqli_close($con);
?>

</center>
</script>
</body>
</html>