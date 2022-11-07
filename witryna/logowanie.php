<meta http-equiv="content-type" content="text/html; charset=utf-8">
<form action="banner.html" method = "POST">
</form>
<body>
<?php
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login';");
if (!$res) {
 die('jest problem z sprawdzeniem hasła i loginu');
}

if(mysqli_num_rows($res) < 1) { 

 die('Błędny login zaloguj się ponownie');
 "<a href=\"strona5.php?a=edit&amp\">Edytuj</a>";

 }
 
if(mysqli_num_rows($res) > 0) { 
$res2 = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login' and haslo='$hasło';");
if(mysqli_num_rows($res2) < 1) { 
 die('Błędne hasło zaloguj się ponownie');

}
if(mysqli_num_rows($res2) > 0) { 
 die('Zalogowałeś się jako'.$login);
}
}
mysqli_close($sq);
?>
</body>
