<meta http-equiv="content-type" content="text/html; charset=utf-8">
<body bgcolor="lightblue">	
<form action="strona1.html" method = "POST">
<input type = "Submit" name="submit" Value = "Wyloguj" />
</form>
<?php
$con = mysqli_connect('localhost', "root", "serwer12345*", "tabele" );
if (!$con) {
 die('błąd połączenia z bazą danych...');
}
    $id = $_POST['id']; 
    $imie = trim($_POST['imie']); 
    $nazwisko = trim($_POST['nazwisko']); 
    $pseudonim = trim($_POST['pseudonim']);
    $wiek = trim($_POST['wiek']);
    $stan = trim($_POST['stan']);
    $miasto = trim($_POST['miasto']);
   
    
    mysqli_query($con, "UPDATE Formularz SET Imie='$imie', 
    Nazwisko='$nazwisko', Pseudonim='$pseudonim', Wiek='$wiek', Stan='$stan', Miasto='$miasto'   WHERE id='$id'") 
    or die('Błąd zapytania'); 
    echo 'Wpis został zaktualizowany'; 

?> 
</body>
