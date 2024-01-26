<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl"><head>
    <meta http-equiv="Content-Language" content="pl">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gra w Kółko i Krzyżyk</title>
    <link rel="stylesheet" type="text/css" href="oandx/styl.css">
    <meta name="generator" content="geany">
    <meta name="author" content="">
    <meta name="description" content="Zastosowanie algorytmu MiniMax">
    <link rel="shortcut icon" href="oandx/ico.png">

    <script type="text/javascript" src="oandx/skrypt.js"> </script>
</head>
<body>

<center>
<h1>Kółko i Krzyżyk</h1>
<div id="container">
    <div id="duza"> <!-- Plansza do gry -->
        <div id="p1" title="P1" onclick="graj('1', 'pl1')">
            <div id="pp1">
                <img src="oandx/x.png" margin="0px" x'="" border="0px">
            </div>
            <div id="pp11">
                <img src="oandx/o.png" margin="0px" o'="" border="0px">
            </div>
        </div>
        <div id="p2" title="P2" onclick="graj('2', 'pl1')">
            <div id="pp2">
                <img src="oandx/x.png" margin="0px" x'="" border="0px">
            </div>
            <div id="pp22">
                <img src="oandx/o.png" margin="0px" o'="" border="0px">
            </div>
        </div>
        <div id="p3" title="P3" onclick="graj('3', 'pl1')">
            <div id="pp3">
                <img src="oandx/x.png" margin="0px" x'="" border="0px">
            </div>
            <div id="pp33">
                <img src="oandx/o.png" margin="0px" o'="" border="0px">
            </div>
        </div>
        <div id="p4" title="P4" onclick="graj('4', 'pl1')">
            <div id="pp4">
                <img src="oandx/x.png" margin="0px" x'="" border="0px">
            </div>
            <div id="pp44">
                <img src="oandx/o.png" margin="0px" o'="" border="0px">
            </div>
        </div>
        <div id="p5" title="P5" onclick="graj('5', 'pl1')">
            <div id="pp5">
                <img src="oandx/x.png" margin="0px" x'="" border="0px">
            </div>
            <div id="pp55">
                <img src="oandx/o.png" margin="0px" o'="" border="0px">
            </div>
        </div>
        <div id="p6" title="P6" onclick="graj('6', 'pl1')">
            <div id="pp6">
                <img src="oandx/x.png" margin="0px" x'="" border="0px">
            </div>
            <div id="pp66">
                <img src="oandx/o.png" margin="0px" o'="" border="0px">
            </div>
        </div>
        <div id="p7" title="P7" onclick="graj('7', 'pl1')">
            <div id="pp7">
                <img src="oandx/x.png" margin="0px" x'="" border="0px">
            </div>
            <div id="pp77">
                <img src="oandx/o.png" margin="0px" o'="" border="0px">
            </div>
        </div>
        <div id="p8" title="P8" onclick="graj('8', 'pl1')">
            <div id="pp8">
                <img src="oandx/x.png" margin="0px" x'="" border="0px">
            </div>
            <div id="pp88">
                <img src="oandx/o.png" margin="0px" o'="" border="0px">
            </div>
        </div>
        <div id="p9" title="P9" onclick="graj('9', 'pl1')">
            <div id="pp9">
                <img src="oandx/x.png" margin="0px" x'="" border="0px">
            </div>
            <div id="pp99">
                <img src="oandx/o.png" margin="0px" o'="" border="0px">
            </div>
        </div>
    </div> <!-- Koniec planszy do gry -->
    <div id="opis">
        <div id="wsp1">
		



				  <textarea hidden id="login" readonly="readonly"><?php
					 $ip = $_SERVER['REMOTE_ADDR'];
					 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
					 $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
					 echo strlen('kolo') + 1;
                     echo'Wygrałeś ',mysqli_fetch_array($res)['login'],'!!!&#10;Moje gratulacje!&#10;&#10;Aby zacząć nową grę, odśwież okno przeglądarki.';
                     ?></textarea>
				  <textarea hidden id="login1" readonly="readonly"><?php
					 $ip = $_SERVER['REMOTE_ADDR'];
					 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
					 $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
                     echo'Całkiem nieźle ',mysqli_fetch_array($res)['login'],'.&#10;Nie pozwoliłeś wygrać komputerowi.&#10;&#10;Aby zacząć nową grę, odśwież okno przeglądarki.';
                     ?></textarea>
				  <textarea hidden id="login2" readonly="readonly"><?php
					 $ip = $_SERVER['REMOTE_ADDR'];
					 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
					 $res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
                     echo'Wygrał komputer.&#10;Musisz ',mysqli_fetch_array($res)['login'],' jeszcze poćwiczyć.&#10;&#10;Aby zacząć nową grę, odśwież okno przeglądarki.';
                     ?></textarea>
				  <textarea hidden id="napis" readonly="readonly"></textarea>
				  </div>
        
        <div id="wsp2"> 
		<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
		<center>
	     <form action="oandx.php" method="POST" onsubmit="if (!n1.value) {alert('Wypełnij wszystkie pola!'); return false}">
	     <div id="a">
         Gracz
         </div>
	     Nick <input  type="text" name="name"  value="<?php $login = $_POST['nick']; echo $login?>" readonly>
         <input type="submit" value="Zagraj">
         </FORM>
		 </center>
        </div>
        <div id="stopka">
		 <form id="subm" action="gry.html" method="POST">
          <input type="submit" value="Wróć">
         </form>
        </div>
    </div> <!-- koniec #opis -->
</div> <!-- Koniec #container -->
</center>



</body></html>