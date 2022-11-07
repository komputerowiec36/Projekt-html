<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>rejestracja</title>
<body>
<body bgcolor="#33FF99">
<?php
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $bohater = $_POST['bohater'];
 if ($hasło == "" || $login == "" || $bohater == "") {
 echo "Pola hasło, login i bohater nie mogą być puste!";
 echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";
}
if($hasło != "" && $login != "" && $bohater != "")
{
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $bohater = $_POST['bohater'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login';");
if (!$res) {
 echo "Jest problem z bazą danych";
 echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";
}

if(mysqli_num_rows($res) > 0) { 

echo "Ten login juz jest w bazie danych!";
echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";

 }
 
if(mysqli_num_rows($res) < 1) { 
 $id = 1;
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res3 = mysqli_query($sq,"SELECT * FROM klienci WHERE id='$id';");
if (!$res3) {
 echo "Jest problem z bazą danych";
 echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";
}

while(mysqli_num_rows($res3) > 0) 
{
$id = $id + 1; 
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res3 = mysqli_query($sq,"SELECT * FROM klienci WHERE id='$id';");
}
 
if(mysqli_num_rows($res3) < 1) {  

 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res2 = mysqli_query($sq,"Insert into klienci SET id='$id', login='$login', haslo='$hasło', bohater='$bohater';");
if(!$res2) {
 echo $id;
 echo "Jest problem z bazą danych";
 echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";

}
if($res2) {  
 echo "Zarejestrowano użytkownika";
 echo "<br><br><a href=\"rejestracja.html?a=wróć&amp\">Wróć</a>";
}
}
}
}
 mysqli_close($sq);


?>

</body>
