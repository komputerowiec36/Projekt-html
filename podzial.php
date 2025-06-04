<html>
    <head>
        <title>spis</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="podzial.css" rel="stylesheet">   
    </head>
    <body>

<body bgcolor="#FF6633">

<Fieldset id="fieldset">
	   <H3><div id="a">
<?php
	
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
  if ($hasło == "" || $login == "") {
 header("Location:logowanie/ploginihaslo.php");
}

 if ($hasło != "" && $login != "")
{
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login';");
if (!$res) {
 header("Location:logowanie/bbazydanych.php");
}

if(mysqli_num_rows($res) < 1) { 

header("Location:logowanie/blogin.php");
 }
 
if(mysqli_num_rows($res) > 0) { 
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res2 = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login' and haslo='$hasło';");
if(mysqli_num_rows($res2) < 1) { 
header("Location:logowanie/bhaslo.php");
}
if(mysqli_num_rows($res2) > 0) { 

$ip = $_SERVER['REMOTE_ADDR'];
$data = date('Y.m.d');
$godzina = date('H:i');
$res6 = mysqli_query($sq,"SELECT * FROM logowania WHERE login='$login';");
if(mysqli_num_rows($res6) < 1) { 
$res7 = mysqli_query($sq,"Insert into logowania SET login='$login', ip='$ip', data='$data', godzina='$godzina';");
}
if(mysqli_num_rows($res6) > 0) {
$res8 = mysqli_query($sq,"DELETE FROM logowania WHERE login ='{$login}';");
if($res8){
$res9 = mysqli_query($sq,"Insert into logowania SET login='$login', ip='$ip', data='$data', godzina='$godzina';");
}
$witaj = "Witaj\r\n";
echo "<center>".$witaj.$login."</center>";
}
} 
}
}



?>
</div></H3>
</Fieldset>
<Fieldset id="fieldset2">
<div class="container">
<iframe class="responsive-iframe" src="<?php if($_POST['login'] == 'Admin') {echo "spis.html";} else {echo "spisklient.html";} ?>"> </iframe>
</div>
</Fieldset>
<br><br>
<form action="wylogowanie.php" method="POST">
       <input type="submit" value="wyloguj">
</Fieldset>
		</body>
</html>
