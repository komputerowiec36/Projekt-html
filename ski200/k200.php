<html>
    <head>
       <title>strona główna</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="index.css" rel="stylesheet">
    </head>
    <body>
	<center>
    <H1>Skocznia K200<H1>
    </center>
    <body bgcolor="#00CCFF">
	<div id="lewy" >
	<?php 
	ob_start();
	include 'graswf3.php';
	$content = ob_get_clean();
	echo $content;
    ?><br><br>
	<form id="subm" action="../gry.html" method="POST">
    <input type="submit" value="Wróć">
    </form>
	</div>
	<div id="prawy" >   
	<?php 
	ob_start();
	include 'highscore3.php';
	$content = ob_get_clean();
	echo $content;
    ?>
    </div>
   </body>
</html>
