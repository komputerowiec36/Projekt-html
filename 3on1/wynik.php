<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="refresh" content="0; url=3on1.php">
    </head>
<?php
$zmienna = $_SERVER['QUERY_STRING'];
preg_match("/(\d+)$/", $zmienna, $wynik);
preg_match("/(\d+)$/", $zmienna, $runda);
$nazwa = preg_replace("/;(\d+)$/", "", $zmienna);
$imie = preg_replace("/;(\d+)$/", "", $nazwa);
$wynik = preg_replace("/;(\d+)$/", "", $zmienna);
preg_match("/(\d+)$/", $wynik, $punkty);

$sq = mysqli_connect("localhost","root","serwer12345*","tabele");

if (!$sq)
{

	die('Could not connect: ' . mysqli_error());

}

mysqli_query($sq,"Insert into 3on1 SET nick='$imie', rundy='$runda[0]', punkty='$punkty[0]';");
mysqli_close($sq);
?>
</body>
</html>