<meta http-equiv="content-type" content="text/html; charset=utf-8">
<body bgcolor="lightblue">	
<form action="strona1.html" method = "POST">
<input type = "Submit" name="submit" Value = "Wyloguj" />
</form>
<?php
$con = mysql_connect('127.0.0.1:3306', "pz79318", "Weefoh6ie7" );
if (!$con) {
 die('błąd połączenia z bazą danych...');
}
mysql_select_db('pz79318');
    $id = $_POST['id']; 
    $imie = trim($_POST['imie']); 
    $nazwisko = trim($_POST['nazwisko']); 
    $pseudonim = trim($_POST['pseudonim']);
    $wiek = trim($_POST['wiek']);
    $stan = trim($_POST['stan']);
    $miasto = trim($_POST['miasto']);
   
    
    mysql_query("UPDATE Formularz SET Imie='$imie', 
    Nazwisko='$nazwisko', Pseudonim='$pseudonim', Wiek='$wiek', Stan='$stan', Miasto='$miasto'   WHERE id='$id'") 
    or die('Błąd zapytania'); 
    echo 'Wpis został zaktualizowany'; 

?> 
</body>
