<meta http-equiv="content-type" content="text/html; charset=utf-8">
<form action="strona1.html" method = "POST">
<input type = "Submit" name="submit" Value = "Wyloguj" />
</form>
<body bgcolor="lightblue">
<?php
	
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
  if ($hasło == "" || $login == "") {
 header("Location:log/ploginihaslo.php");
}

 if ($hasło != "" && $login != "")
 {
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login';");}
if (!$res) {
 header("Location:log/bbazydanych.php");
}

if(mysqli_num_rows($res) < 1) { 

header("Location:log/blogin.php");
 }
 
if(mysqli_num_rows($res) > 0) { 
$res2 = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login' and haslo='$hasło';");}
if(mysqli_num_rows($res2) < 1) { 
header("Location:log/plbhaslo.php");
}

mysqli_close($sq);
?>
<form action="strona3.php" method = "POST">
<center><tittle><font size="+3">Przeszukaj Tabelę:</font></tittle></center>
<fieldset>
Nazwa kolumny: <input type = "text" name = "kolumna" /><br /></><br/>
Szukana nazwa lub liczba: <input type = "text" name = "nazwa" /><br /></><br/>
<input type = "Submit" name="submit" Value = "Wyślij" />
</body>
</fieldset>
