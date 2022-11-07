<meta http-equiv="content-type" content="text/html; charset=utf-8">

<body>
<body bgcolor="#996633">
<?php
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
  if ($hasło == "" || $login == "") {
 echo "Pola hasło i login nie mogą być puste!";
 echo "<br><br><a href=\"usuwanie.html?a=wróć&amp\">Wróć</a>";
}
 if ($hasło != "" && $login != "")
 {
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login' and haslo='$hasło';");
if (!$res) {
 echo "Jest problem z bazą danych";
 echo "<br><br><a href=\"usuwanie.html?a=wróć&amp\">Wróć</a>";
}
if(mysqli_num_rows($res) < 1) { 
echo "Nie można usunąć danych z serwera błędne hasło lub login!";
echo "<br><br><a href=\"usuwanie.html?a=wróć&amp\">Wróć</a>";
}
if(mysqli_num_rows($res) > 0) { 
	$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res2 = mysqli_query($sq,"SELECT * FROM losowanie WHERE login='$login';");
 if(!$res2)
 {
 echo "Jest problem z bazą danych";
 echo "<br><br><a href=\"usuwanie.html?a=wróć&amp\">Wróć</a>";
 }
 if(mysqli_num_rows($res) > 0) {
  $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res3 = mysqli_query($sq,"DELETE FROM losowanie WHERE login='$login';");
}
if(!$res3) { 

echo "Jest problem z bazą danych";
echo "<br><br><a href=\"usuwanie.html?a=wróć&amp\">Wróć</a>";

 }
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res4 = mysqli_query($sq,"DELETE FROM klienci WHERE login='$login';");

if(!$res4) { 

echo "Jest problem z bazą danych";
echo "<br><br><a href=\"usuwanie.html?a=wróć&amp\">Wróć</a>";

}
if($res4) { 
echo "Login i hasło zostały usunięte z bazy danych";
echo "<br><br><a href=\"usuwanie.html?a=wróć&amp\">Wróć</a>";

} 

mysqli_close($sq);
}
}

?>
</body>
