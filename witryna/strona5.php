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
$a = trim($_REQUEST['a']); 
$id = trim($_GET['Id']); 

if($a == 'edit' and !empty($id)) { 
    
    $wynik = mysql_query("SELECT * FROM Formularz WHERE 
    Id='$id'") 
    or die('Błąd zapytania'); 
    
    if(mysql_num_rows($wynik) > 0) { 
         
        $r = mysql_fetch_assoc($wynik); 
        
        
        echo '<form action="strona6.php" method="post"> 
        <input type="hidden" name="a" value="save" /> 
        <input type="hidden" name="id" value="'.$id.'" /> 
        imię:<br /> 
        <input type="text" name="imie" 
        value="'.$r['Imie'].'" /><br />
        nazwisko:<br /> 
        <input type="text" name="nazwisko" 
        value="'.$r['Nazwisko'].'" /><br />
        pseudonim:<br /> 
        <input type="text" name="pseudonim" 
        value="'.$r['Pseudonim'].'" /><br />
        wiek:<br /> 
        <input type=number name="wiek" class="form-control" min="1"
        value="'.$r['Wiek'].'" /><br />
        stan:<br /> 
        <input type="text" name="stan" 
        value="'.$r['Stan'].'" /><br />
        miasto:<br /> 
        <input type="text" name="miasto" 
        value="'.$r['Miasto'].'" /><br />
        <br /> 
        <input type="submit" value="popraw" /> 
        </form>'; 
    } 
} 


?> 
</body>

