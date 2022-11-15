<meta http-equiv="content-type" content="text/html; charset=utf-8">

<body>
<body bgcolor="#9933FF">
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
$res2 = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login' and haslo='$hasło';");
if(mysqli_num_rows($res2) < 1) { 
header("Location:bhaslo.php");
}
if(mysqli_num_rows($res2) > 0) { 

 $row1=mysqli_fetch_array($res2);
 $login = $row1["login"];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res3 = mysqli_query($sq,"SELECT * FROM losowanie WHERE login='$login';");
if (!$res3) {
header("Location:logowanie/bbazydanych.php");
}

if(mysqli_num_rows($res3) > 0) 
{
$dana=$row1["haslo"];
$litery=strlen($dana);
$gwi="*";
$litery2=strlen($gwi);
while($litery2 < $litery)
{
$gwi=$gwi."*";
$litery2=strlen($gwi);
}

$row2=mysqli_fetch_array($res3);
$haslo=$gwi;
$bohater=$row1["bohater"];
$kod=$row2["kod"];
echo"<center>";
echo"Login: ".$login."<br><br>";
echo"Hasło: ".$haslo."<br><br>";
echo"Pytanie zabezpieczające:imię ulubionego bohatera kreskówek"."<br><br>";
echo"Odpowiedź: ".$bohater."<br><br>";
echo"Losowanie - Poniżej podany będzie kod który można dostać logując sie z zaznaczona opcja los!!!"."<br><br>";
echo"Kod: ".$kod;
echo"</center>";
}
if(mysqli_num_rows($res3) < 1) { 
$dana=$row1["haslo"];
$litery=strlen($dana);
$gwi="*";
$litery2=strlen($gwi);
while($litery2 < $litery)
{
$gwi=$gwi."*";
$litery2=strlen($gwi);
}
$haslo=$gwi;
$bohater=$row1["bohater"];
echo"<center>";
echo"<H1>";
echo"Login: ".$login."<br><br>";
echo"Hasło: ".$haslo."<br><br>";
echo"Pytanie zabezpieczające:imię ulubionego bohatera kreskówek"."<br><br>";
echo"Odpowiedź: ".$bohater."<br><br>";
echo"Losowanie - Poniżej podany będzie kod który można dostać logując sie z zaznaczona opcja los!!!"."<br><br>";
echo"Kod: Brak";
echo"<H1>";
echo"</center>";
} 
}
}
}


mysqli_close($sq);
?>
</body>
