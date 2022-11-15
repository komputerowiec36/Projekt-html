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
$a = $_POST['a'];
$b = $_POST['b'];

if(!empty($a)) { 
    
    $wynik = mysqli_query($con,"SELECT * FROM Formularz WHERE 
    {$a} ='{$b}';") 
    or die('Błąd zapytania'); 
    
    if(mysqli_num_rows($wynik) > 0) { 
         
        $r = mysqli_fetch_assoc($wynik); 
        
        
        echo '<form action="strona6.php" method="post"> 
        <input type="hidden" name="a" value="save" /> 
        <input type="hidden" name="id" value="'.$r['id'].'" /> 
        imię:<br /> 
        <input type="text" name="imie" 
        value="'.$r['imie'].'" /><br />
        nazwisko:<br /> 
        <input type="text" name="nazwisko" 
        value="'.$r['nazwisko'].'" /><br />
        pseudonim:<br /> 
        <input type="text" name="pseudonim" 
        value="'.$r['pseudonim'].'" /><br />
        wiek:<br /> 
        <input type=number name="wiek" class="form-control" min="1"
        value="'.$r['wiek'].'" /><br />
        stan:<br /> 
        <input type="text" name="stan" 
        value="'.$r['stan'].'" /><br />
        miasto:<br /> 
        <input type="text" name="miasto" 
        value="'.$r['miasto'].'" /><br />
        <br /> 
        <input type="submit" value="popraw" /> 
        </form>'; 
    } 
} 


?> 
</body>

