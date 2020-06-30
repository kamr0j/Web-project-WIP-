<?php
 
    session_start();
     
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }
     
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title> Baza ubezpieczonych samochodów </title>
	<meta name="description" content="TABELA AUTA" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" href="style.css" type="text/css" />


</head>

<body>

		<center>

<div class="container">
<div class="logo">
<h1>BAZA UBEZPIECZONYCH SAMOCHODÓW</h1>
</div>




<div class="menu">
			
<a href="work.php" class="navlink" <div class="nav">
Strona domowa
</div></a> 
<a href="auta.php" class="navlink" <div class="nav">
Wyświetlanie - Auta
</div></a> 
<a href="osoby.php" class="navlink" <div class="nav">
Wyświetlanie - Osoby
</div></a> </br>
<a href="wypadki.php" class="navlink" <div class="nav">
Wyświetlanie - Wypadki
</div></a> </br>
<a href="usunkonto.php" class="navlink" <div class="nav">
Usuwanie konta
</div></a> </br>
<a href="dodawanie.php" class="navlink" <div class="nav">
Dodawanie rekordów do bazy
</div></a> </br>
<a href="usuwanie.php" class="navlink" <div class="nav">
Usuwanie rekordów z bazy
</div></a> </br>
<a href="logout.php" class="navlink" <div class="nav">
Wylogowywanie
</div></a>



		</div>

<div class="main">
<?php

 echo "<p>Konto o loginie: ".$_SESSION['user']." zostanie usunięte. Czy jesteś pewien, że chcesz to zrobić?";

?>
		<form action="usuwaniekonta.php">

 <input type="submit" value="Usuń" />

</form>


</div>

<div class="footer">
autor: Kamil Rojek &copy
</div>


</div>
		
</center>		
</body>
</html>
