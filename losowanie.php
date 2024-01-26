<html>
    <head>
        <title>losowanie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="losowanie.css" rel="stylesheet">
    </head>
    <body bgcolor="#3399FF">
	<body>	
		<H1><p class="tytuł">Wielkie Losowanie</p></H1>
		
		 <fieldset id="fieldset"> 
	      <p class="tytuł">
<?php
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res = mysqli_query($sq,"SELECT id FROM losowanie;");
if (!$res) {
echo "Jest problem z bazą danych";
}
if(mysqli_num_rows($res) < 5) {
$liczba=mysqli_num_rows($res);
$liczba2=5-$liczba;
echo"Narazie jest:\r\n"; echo$liczba; echo"\r\nuczestnik/uczestników<br>";
echo"brakuje:\r\n"; echo$liczba2;echo"<br>" ;
echo"Losowanie nagród odbędzie się w ustalonym terminie gdy uczestników będzie więcej niż 5 !!! ";
}
if(mysqli_num_rows($res) > 4) { 
$liczba=mysqli_num_rows($res);
if(date("dmY") > "20122017")
{
echo"Narazie jest:\r\n"; echo$liczba; echo"\r\nuczestnik/uczestników<br>";
echo"Pamiętajcie że losowanie nagród odbędzie sie 08-01-2018";
}
if(date("dmY") < "19122017")
{
$data="20122017";
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res2 = mysqli_query($sq,"SELECT data FROM wyniki where data='$data';");
if(mysqli_num_rows($res2) < 1) {	
e:
$r1=rand(1,$liczba);
$r2=rand(1,$liczba);
if($r2 == $r1) goto e;
$r3=rand(1,$liczba);
if($r3 == $r1 || $r3 == $r2)goto e;
if($r2 != $r1 && $r3 != $r1 && $r3 != $r2)
{
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res3 = mysqli_query($sq,"SELECT login FROM losowanie where id='$r1';");	
if(mysqli_num_rows($res3) > 0) 
{
$row=mysqli_fetch_array($res3);
$login=$row["login"];
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res4 = mysqli_query($sq,"SELECT login FROM losowanie where id='$r2';");
if(mysqli_num_rows($res4) > 0) 
{
$row1=mysqli_fetch_array($res4);
$login2=$row1["login"];
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res5 = mysqli_query($sq,"SELECT login FROM losowanie where id='$r3';");
if(mysqli_num_rows($res5) > 0) 
{
$row2=mysqli_fetch_array($res5);
$login3=$row2["login"];
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res6 = mysqli_query($sq,"Insert into wyniki SET id='$r1, login='$login', id2='$r2', login2='$login2',id3='$r3', login3='$login3', data='$data';");
}
}
}
}
}
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res7 = mysqli_query($sq,"SELECT login,login2,login3 FROM wyniki where data='$data';");
$row=mysqli_fetch_array($res7);
$login=$row["login"];
$login2=$row["login2"];
$login3=$row["login3"];
echo "Wyniki:<br>";
echo "<br>";
echo"1. miejsce:\r\n"; echo"<font style=color:#FF3333>$login</font>"; echo"<br>";
echo "<br>";
echo"2. miejsce:\r\n"; echo"<font style=color:#FF3333>$login2</font>"; echo"<br>";
echo "<br>";
echo"3. miejsce:\r\n"; echo"<font style=color:#FF3333>$login3</font>"; echo"<br>";
echo "<br>";
echo "Wszystkim zwycięzcom gratulujemy:)!!!";
}
}
?>
</p>
</fieldset>
<BR>
   <form action="spis.html" method="POST">
     <input type="submit" value="Wróć">
     </form>    
</BR>    
   </body>
</html>
