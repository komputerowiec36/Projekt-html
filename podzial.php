<html>
    <head>
        <title>spis</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="podzial.css" rel="stylesheet">   
    </head>
    <body>

<body bgcolor="#FF6633">
<Fieldset id="fieldset">
	   <H3><div id="a">
<?php
	
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];

  if ($hasło == "" || $login == "") {
 header("Location:logowanie/ploginihaslo.php");
}

 if ($hasło != "" && $login != "" && isset($_POST['los']))
 {
 $login = $_POST['login'];
 $hasło = $_POST['hasło'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login';");
if (!$res) {
 header("Location:bbazydanych.php");
}

if(mysqli_num_rows($res) < 1) { 

header("Location:blogin.php");
 }
 
if(mysqli_num_rows($res) > 0) { 
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res2 = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login' and haslo='$hasło';");
if(mysqli_num_rows($res2) < 1) { 
header("Location:bhaslo.php");
}
if(mysqli_num_rows($res2) > 0) { 
  $id = 1;
  $li = "c";
  $l1 = rand(1,9);
  $l2 = rand(1,9);
  $l3 = rand(1,9);
  $l4 = rand(1,9);
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res4 = mysqli_query($sq,"SELECT * FROM losowanie WHERE id='$id';");
if (!$res4) {
header("Location:bazydanych.php");
}

while(mysqli_num_rows($res4) > 0) 
{
$id = $id + 1; 
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$res4 = mysqli_query($sq,"SELECT * FROM losowanie WHERE id='$id';");
}
if(mysqli_num_rows($res4) < 1) {
$kod = $id.$li.$l1.$l2.$li.$l3.$l4.$li; 
$res5 = mysqli_query($sq,"Insert into losowanie SET id='$id', login='$login', kod='$kod';");
if(!$res5) {
header("Location:bazydanych.php");

}

if($res5) { 
$witaj = "Witaj\r\n";
echo "<center>".$witaj.$login."</center>";
}
} 
}
}
}

if ($hasło != "" && $login != "" && !isset($_POST['los']))
{
 $login =$_POST['login'];
 $hasło = $_POST['hasło'];
 $sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
 $res = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login';");
if (!$res) {
 header("Location:bbazydanych.php");
}

if(mysqli_num_rows($res) < 1) { 
header("Location:blogin.php");
 }
 
if(mysqli_num_rows($res) > 0) { 
$res2 = mysqli_query($sq,"SELECT * FROM klienci WHERE login='$login' and haslo='$hasło';");
if(mysqli_num_rows($res2) < 1) { 
header("Location:bhaslo.php");
}
if(mysqli_num_rows($res2) > 0) { 
$witaj = "Witaj\r\n";
echo "<center>".$witaj.$login."</center>";
}
 
}

}


mysqli_close($sq);
?>
</div></H3>
</Fieldset>
<iframe width="1905" height="870" border=3px src="spis.html"> </iframe>
<br></br>
<form action="logowanie.html" method="POST">
       <input type="submit" value="wyloguj">
		</body>
</html>
