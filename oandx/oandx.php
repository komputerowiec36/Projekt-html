<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl"><head>
    <meta http-equiv="Content-Language" content="pl">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Gra w Kółko i Krzyżyk</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
    <meta name="generator" content="geany">
	<meta name="author" content="">
    <meta name="description" content="Zastosowanie algorytmu MiniMax">
    <link rel="shortcut icon" href="ico.png">

    <script type="text/javascript" src="skrypt.js"> </script>
</head>
<body>
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

text-border: 54;

font-weight: 600;
}

</style>	
<center>
<div id="tytuł">
    <!--<h1 class="cien">Kółko & Krzyżyk</h1>-->
    <h1 class="gradient-text"><img src="ico.png" class="ikonka">&nbsp;&nbsp;Kółko i Krzyżyk&nbsp;&nbsp;<img src="ico.png" class="ikonka" style="-o-transform: scaleX(-1); -moz-transform: scaleX(-1); -webkit-transform: scaleX(-1); transform: scaleX(-1);"></h1>
</div>
<div id="container">
    <div id="duza"> <!-- Plansza do gry -->
        <div id="p1" title="P1" onclick="graj('1', 'pl1'); document.getElementById('przyciski1').style.display='none';">
            <div id="pp1">
                <img src="x.png" border="0px" margin="0px" x'="">
            </div>
            <div id="pp11">
                <img src="o.png" border="0px" margin="0px" o'="">
            </div>
        </div>
        <div id="p2" title="P2" onclick="graj('2', 'pl1'); document.getElementById('przyciski1').style.display='none';">
            <div id="pp2">
                <img src="x.png" border="0px" margin="0px" x'="">
            </div>
            <div id="pp22">
                <img src="o.png" border="0px" margin="0px" o'="">
            </div>
        </div>
        <div id="p3" title="P3" onclick="graj('3', 'pl1'); document.getElementById('przyciski1').style.display='none';">
            <div id="pp3">
                <img src="x.png" border="0px" margin="0px" x'="">
            </div>
            <div id="pp33">
                <img src="o.png" border="0px" margin="0px" o'="">
            </div>
        </div>
        <div id="p4" title="P4" onclick="graj('4', 'pl1'); document.getElementById('przyciski1').style.display='none';">
            <div id="pp4">
                <img src="x.png" border="0px" margin="0px" x'="">
            </div>
            <div id="pp44">
                <img src="o.png" border="0px" margin="0px" o'="">
            </div>
        </div>
        <div id="p5" title="P5" onclick="graj('5', 'pl1'); document.getElementById('przyciski1').style.display='none';">
            <div id="pp5">
                <img src="x.png" border="0px" margin="0px" x'="">
            </div>
            <div id="pp55">
                <img src="o.png" border="0px" margin="0px" o'="">
            </div>
        </div>
        <div id="p6" title="P6" onclick="graj('6', 'pl1'); document.getElementById('przyciski1').style.display='none';">
            <div id="pp6">
                <img src="x.png" border="0px" margin="0px" x'="">
            </div>
            <div id="pp66">
                <img src="o.png" border="0px" margin="0px" o'="">
            </div>
        </div>
        <div id="p7" title="P7" onclick="graj('7', 'pl1'); document.getElementById('przyciski1').style.display='none';">
            <div id="pp7">
                <img src="x.png" border="0px" margin="0px" x'="">
            </div>
            <div id="pp77">
                <img src="o.png" border="0px" margin="0px" o'="">
            </div>
        </div>
        <div id="p8" title="P8" onclick="graj('8', 'pl1'); document.getElementById('przyciski1').style.display='none';">
            <div id="pp8">
                <img src="x.png" border="0px" margin="0px" x'="">
            </div>
            <div id="pp88">
                <img src="o.png" border="0px" margin="0px" o'="">
            </div>
        </div>
        <div id="p9" title="P9" onclick="graj('9', 'pl1'); document.getElementById('przyciski1').style.display='none';">
            <div id="pp9">
                <img src="x.png" border="0px" margin="0px" x'="">
            </div>
            <div id="pp99">
                <img src="o.png" border="0px" margin="0px" o'="">
            </div>
        </div>
    </div> <!-- Koniec planszy do gry -->
    <div id="opis">
        <div id="wsp1">



				  <textarea hidden id="login" readonly="readonly"><?php
					 $login = $_POST['nick']; 
					 if(!empty($login))
					 {
		             
					  echo'Wygrałeś ',$login,'!!!&#10;Moje gratulacje!&#10;&#10;Aby zacząć nową grę, odśwież okno przeglądarki.';
					 }
					 if(empty($login)){
					 $ip = $_SERVER['REMOTE_ADDR'];
					 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
					 $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
                     echo'Wygrałeś ',mysqli_fetch_array($res)['login'],'!!!&#10;Moje gratulacje!&#10;&#10;Aby zacząć nową grę, odśwież okno przeglądarki.';
                     }
					
					 ?></textarea>
				  <textarea hidden id="login1" readonly="readonly"><?php
					 $login = $_POST['nick']; 
					 if(!empty($login))
					 {
		              
					  echo'Całkiem nieźle ',$login,'.&#10;Nie pozwoliłeś wygrać komputerowi.&#10;&#10;Aby zacząć nową grę, odśwież okno przeglądarki.';
                     }
					 if(empty($login)){
					 $ip = $_SERVER['REMOTE_ADDR'];
					 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
					 $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
                     echo'Całkiem nieźle ',mysqli_fetch_array($res)['login'],'.&#10;Nie pozwoliłeś wygrać komputerowi.&#10;&#10;Aby zacząć nową grę, odśwież okno przeglądarki.';
                     }
					 ?></textarea>
				  <textarea hidden id="login2" readonly="readonly"><?php
					 $login = $_POST['nick']; 
					 if(!empty($login))
					 {
		              
					  echo'Wygrał komputer.&#10;Musisz ',$login,' jeszcze poćwiczyć.&#10;&#10;Aby zacząć nową grę, odśwież okno przeglądarki.';
                     }
					 if(empty($login)){
					 $ip = $_SERVER['REMOTE_ADDR'];
					 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
					 $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
                     echo'Wygrał komputer.&#10;Musisz ',mysqli_fetch_array($res)['login'],' jeszcze poćwiczyć.&#10;&#10;Aby zacząć nową grę, odśwież okno przeglądarki.';
                     }
					 ?></textarea>
				  <textarea hidden id="napis" readonly="readonly"></textarea>
	              </div>
        <div id="wsp2">
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
		<center>
		 <div id="a">
         Gracz:
		 <?php
		 $login = $_POST['nick']; 
		 if(!empty($login))
		 {
		 echo $login;
		 }
		 if(empty($login)){
		 $ip = $_SERVER['REMOTE_ADDR'];
		 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
		 $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
         echo mysqli_fetch_array($res)['login'];
         }
	     
		 ?>
         </div>
	     <form id="wynik" action="" method = "POST">
		 <input type="hidden" name="nick" id="nick" value="<?php if(!empty($login))
		 {
		 echo $login;
		 }
		 if(empty($login)){
		 $ip = $_SERVER['REMOTE_ADDR'];
		 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
		 $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
         echo mysqli_fetch_array($res)['login'];
         }
		 ?>">
	     <input type="textbox" name="rezultat" id="rezultat"  value='' ><br>
		 <input type="checkbox" name="wybor" id="wybor" >
		 <label for="wybor">Zapis do listy wyników</label><br>
         <input type="Submit" name="wynik" value="Wyniki"/>
         </form>
		 </center>
        </div>
        <div id="stopka">
		 <form id="subm" action="gry.html" method="POST">
          <input type="submit" value="Wróć">
         </form>
        </div>

    </div> <!-- koniec #opis -->
</div> <!-- Koniec #container -->
<br>
<input type="button" name="raz" value="ZAGRAJ PONOWNIE" id="zagraj" onclick="location.reload(true)">
<div id="przyciski1">
<input type="button" value="Komputer zaczyna
losowo" id="butt" onclick="graj(Math.floor(Math.random()*9)+1, 'cpu'); document.getElementById('przyciski1').style.display='none';">
<h2> Wybierz, gdzie komputer ma rozpocząć:<!-- h2-->
<div id="przyciski">
<input type="button" value="1" id="b1" onclick="graj('1', 'cpu'); document.getElementById('przyciski1').style.display='none';">
<input type="button" value="2" id="b1" onclick="graj('2', 'cpu'); document.getElementById('przyciski1').style.display='none';">
<input type="button" value="3" id="b1" onclick="graj('3', 'cpu'); document.getElementById('przyciski1').style.display='none';"><br>
<input type="button" value="4" id="b1" onclick="graj('4', 'cpu'); document.getElementById('przyciski1').style.display='none';">
<input type="button" value="5" id="b1" onclick="graj('5', 'cpu'); document.getElementById('przyciski1').style.display='none';">
<input type="button" value="6" id="b1" onclick="graj('6', 'cpu'); document.getElementById('przyciski1').style.display='none';"><br>
<input type="button" value="7" id="b1" onclick="graj('7', 'cpu'); document.getElementById('przyciski1').style.display='none';">
<input type="button" value="8" id="b1" onclick="graj('8', 'cpu'); document.getElementById('przyciski1').style.display='none';">
<input type="button" value="9" id="b1" onclick="graj('9', 'cpu'); document.getElementById('przyciski1').style.display='none';">
<!-- div-->
<!-- div-->
</div></h2></div></center>

<script>
document.getElementById('butt').value = 'ZACZYNA KOMPUTER\nw losowym miejscu';
document.getElementById('napis').value = 'Wykonaj pierwszy ruch\n\nlub\n\nPozwól ruszyć się komputerowi';
</script>

<center>
<h2>Lista Wyników</h2>
<?php

$con = mysqli_connect("localhost","root","serwer12345*","tabele");

if (!$con)

{

die('Could not connect: ' . mysqli_error());

}

 if (isset($_POST['wynik']) and isset($_POST['wybor']))
 {
 $login = $_POST['nick']; 
 $wyniki = $_POST['rezultat'];
 if ($wyniki == 'wygrana'){
 $login = $_POST['nick']; 
  
 
 $res = mysqli_query($con,"SELECT * FROM wynikiox WHERE nick='$login';");
 
 
 if(mysqli_num_rows($res) < 1) { 

 $res2 = mysqli_query($con,"Insert into wynikiox SET nick='$login', wygrane='1', przegrane='0', remisy='0';");
 }
 
 if(mysqli_num_rows($res) > 0) { 
  $res3 = mysqli_query($con,"SELECT wygrane FROM wynikiox WHERE nick='$login';");
  $row = mysqli_fetch_array($res3);
  $wyn = $row['wygrane'] + 1;
  mysqli_query($con, "UPDATE wynikiox SET wygrane='$wyn' WHERE nick='$login';");
 }
 }
 
 
 if ($wyniki == 'remis'){
 $login = $_POST['nick']; 
 

 $res = mysqli_query($con,"SELECT * FROM wynikiox WHERE nick='$login';");
 
 if(mysqli_num_rows($res) < 1) { 

 $res2 = mysqli_query($con,"Insert into wynikiox SET nick='$login', wygrane='0', przegrane='0', remisy='1';");
 }
 
 if(mysqli_num_rows($res) > 0) { 
  $res3 = mysqli_query($con,"SELECT remisy FROM wynikiox WHERE nick='$login';");
  $row = mysqli_fetch_array($res3);
  $wyn = $row['remisy'] + 1;
  mysqli_query($con, "UPDATE wynikiox SET remisy='$wyn' WHERE nick='$login';");
 }
 
 }
 
 if ($wyniki == 'przegrana'){
 $login = $_POST['nick'];

 $res = mysqli_query($con,"SELECT * FROM wynikiox WHERE nick='$login';");
 
 if(mysqli_num_rows($res) < 1) { 

 $res2 = mysqli_query($con,"Insert into wynikiox SET nick='$login', wygrane='0', przegrane='1', remisy='0';");
 }
 
 if(mysqli_num_rows($res) > 0) { 
  $res3 = mysqli_query($con,"SELECT przegrane FROM wynikiox WHERE nick='$login';");
  $row = mysqli_fetch_array($res3);
  $wyn = $row['przegrane'] + 1;
  mysqli_query($con, "UPDATE wynikiox SET przegrane='$wyn' WHERE nick='$login';");
 }
 
 
 }
 }
 
 mysqli_close($con);
 ?>
 <?php
$con = mysqli_connect("localhost","root","serwer12345*","tabele");

if (!$con)

{

die('Could not connect: ' . mysqli_error());

}
$result = mysqli_query($con,"SELECT * FROM wynikiox ORDER BY wygrane DESC");

 

echo "<table border='1'>

<tr style= 'background-color:#d2d2d2'>

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

  echo "<td>". $row['id'] ."</td>";

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
</center>

</body></html>