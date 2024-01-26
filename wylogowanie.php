<html>
    <head>
        <title>spis</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="podzial.css" rel="stylesheet">   
    </head>
    <body>

<body bgcolor="#CC3366">
<?php
$sq = mysqli_connect("localhost", "root","serwer12345*","tabele");
$ip = $_SERVER['REMOTE_ADDR'];
$res = mysqli_query($sq,"SELECT * FROM logowania WHERE ip='$ip';");
if(mysqli_num_rows($res) > 0) {
$res5 = mysqli_query($sq,"DELETE FROM logowania WHERE ip ='{$ip}';");
}
?>
Wyogowano poprawnie możesz się ponownie zalogować
<form action="logowanie.html" method="POST">
       <input type="submit" value="zaloguj">
		</body>
</html>