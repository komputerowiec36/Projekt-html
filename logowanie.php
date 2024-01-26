<meta http-equiv="content-type" content="text/html; charset=utf-8">

<body>
<body bgcolor="#00CCFF">
<?php
	
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $los($_POST['los']);
  if ($hasło == "" || $login == "") {
 header("Location:logowanie/ploginihaslo.php");
}

 if ($hasło != "" && $login != "" && $los == 1)
 {
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login';");
if (!$res) {
 header("Location:bbazydanych.php");
}

if(mysqli_num_rows($res) < 1) { 

header("Location:blogin.php");
 }
 
if(mysqli_num_rows($res) > 0) { 
$res2 = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login' and haslo='$hasło';");
if(mysqli_num_rows($res2) < 1) { 
header("Location:bhaslo.php");
}
if(mysqli_num_rows($res2) > 0) { 
	
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res3 = mysqli_query($sq,"SELECT * FROM losowanie WHERE kod='$kod';");

if(mysqli_num_rows($res3) > 0) {
header("Location:iskod.php");
}
if(mysqli_num_rows($res3) < 1) { 
  $id = 1;
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res4 = mysqli_query($sq,"SELECT * FROM losowanie WHERE id='$id';");
if (!$res4) {
header("Location:bazydanych.php");
}

while(mysqli_num_rows($res4) > 0) 
{
$id = $id + 1; 
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res4 = mysqli_query($sq,"SELECT * FROM losowanie WHERE id='$id';");
}
if(mysqli_num_rows($res4) < 1) {
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res5 = mysqli_query($sq,"SELECT * FROM losowanie WHERE login='$login';");
if(mysqli_num_rows($res5) > 0) {
  $res6 = mysqli_query($sq,"Insert into losowanie SET id='$id', login='$login', kod='$kod';");
if(!$res6) {
header("Location:bazydanych.php");

}

if($res5) { 
$witaj= "Witaj\r\n";
echo $witaj; echo $login;
}
} 
}
}
}
}

if ($hasło != "" && $login != "" && $los != "1")
{
 $login =$_POST['login'];
 $hasło = $_POST['hasło'];
 
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login';");
if (!$res) {
 header("Location:bbazydanych.php");
}

if(mysqli_num_rows($res) < 1) { 
header("Location:blogin.php");
 }
 
if(mysqli_num_rows($res) > 0) { 
$res2 = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login' and haslo='$hasło';");
if(mysqli_num_rows($res2) < 1) { 
header("Location:bhaslo.php");
}
if(mysqli_num_rows($res2) > 0) { 
	
 $witaj= "Witaj\r\n";
echo $witaj; echo$login;
}

}
}

mysqli_close($sq);
?>
</body>
