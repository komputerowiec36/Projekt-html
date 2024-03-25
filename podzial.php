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
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res6 = mysqli_query($sq,"SELECT * FROM losowanie WHERE login='$login';");
 if (!$res6) {
  header("Location:bbazydanych.php");
 }

 if ($hasło != "" && $login != "" && $login != "Admin" && isset($_POST['los']) && mysqli_num_rows($res6) == 0)
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
  $id = 1;
  $li = "c";
  $l1 = rand(1,9);
  $l2 = rand(1,9);
  $l3 = rand(1,9);
  $l4 = rand(1,9);
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res4 = mysqli_query($sq,"SELECT * FROM losowanie WHERE id='$id';");
if (!$res4) {
header("Location:logowanie/bazydanych.php");
}

while(mysqli_num_rows($res4) > 0) 
{
$id = $id + 1; 
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res4 = mysqli_query($sq,"SELECT * FROM losowanie WHERE id='$id';");
}
if(mysqli_num_rows($res4) < 1) {
$kod = $id.$li.$l1.$l2.$li.$l3.$l4.$li; 
$res5 = mysqli_query($sq,"Insert into losowanie SET id='$id', login='$login', kod='$kod';");
if(!$res5) {
header("Location:logowanie/bazydanych.php");

}

if($res5) { 
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
}
}
if ($hasło != "" && $login != "" && $login != "Admin" && !isset($_POST['los']) || mysqli_num_rows($res6) > 0)
{
 $login =$_POST['login'];
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
$res2 = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login' and haslo='$hasło';");
if(mysqli_num_rows($res2) < 1) { 
header("Location:logowanie/bhaslo.php");
}
if(mysqli_num_rows($res2) > 0) {
$ip = $_SERVER['REMOTE_ADDR'];
$data = date('Y.m.d');
$godzina = date('H:i');
$res3 = mysqli_query($sq,"SELECT * FROM logowania WHERE login='$login';");
if(mysqli_num_rows($res3) < 1) { 
$res4 = mysqli_query($sq,"Insert into logowania SET login='$login', ip='$ip', data='$data', godzina='$godzina';");
}
if(mysqli_num_rows($res3) > 0) {
$res5 = mysqli_query($sq,"DELETE FROM logowania WHERE login ='{$login}';");
if($res5){
$res6 = mysqli_query($sq,"Insert into logowania SET login='$login', ip='$ip', data='$data', godzina='$godzina';");
}
}
$witaj = "Witaj\r\n";
echo "<center>".$witaj.$login."</center>";
}
 
}


}
if ($hasło != "" && $login != "" && $login == 'Admin')
{
$login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM administrator WHERE login='$login';");
if (!$res) {
 header("Location:logowanie/bbazydanych.php");
}

if(mysqli_num_rows($res) < 1) { 

header("Location:logowanie/blogin.php");
 }
 
if(mysqli_num_rows($res) > 0) { 
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res2 = mysqli_query($sq,"SELECT * FROM administrator WHERE login='$login' and haslo='$hasło';");
if(mysqli_num_rows($res2) < 1) { 
header("Location:logowanie/bhaslo.php");
}
if(mysqli_num_rows($res2) > 0) { 
$witaj = "Witaj\r\n";
echo "<center>".$witaj.$login."</center>";	
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
