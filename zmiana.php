<meta http-equiv="content-type" content="text/html; charset=utf-8">
<body>
<body bgcolor="#33FF99">
<?php
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $hasło2 = $_POST['hasło2'];
 $bohater = $_POST['bohater'];
 if ($hasło == "" || $hasło2 == "" || $login == "" || $bohater == "" ) {
 echo "Pola hasło, login i bohater nie mogą być puste!";
}
if($hasło!=$hasło2)
{
 echo "<br><br>W polu hasło i hasło2 musi byc wpisane to samo nowe hasło!";
} 
if ($hasło == "" || $hasło2 == "" || $login == "" || $bohater == "" ||$hasło!=$hasło2) {
echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";
}
if($hasło != "" && $hasło2 != "" && $login != "" && $bohater == "" && $hasło==$hasło2)
{
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $bohater = $_POST['bohater'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login',bohater='$bohater';");
if (!$res) {
 echo "Jest problem z bazą danych";
 echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";
}

if(mysqli_num_rows($res) < 1) { 

echo "Błędny login lub imię bohatera!";
echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";

 }
 
if(mysqli_num_rows($res) < 0) { 
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res2 = mysqli_query($sq,"Update klienci SET haslo='$hasło';");
if(!$res2) {
 echo "Jest problem z bazą danych";
 echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";

}
if($res2) { 
 echo "Zmieniono hasło użytkownika";
 echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";
}
}
 mysqli_close($sq);

}
?>

</body>
