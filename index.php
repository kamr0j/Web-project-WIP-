<?php
 
    session_start();
     
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: work.php');
        exit();
    }
 
?>
 
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
        <title>Samochodziki</title>
        <meta name="description" content="Baza ubezpieczonych samochodów" />
        <meta name="keywords" content="kr2f" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" href="style.css" type="text/css" />

<body>
     
     
    <center>

<div class="container">
	
		<div class="logo">
			<h1>BAZA UBEZPIECZONYCH SAMOCHODÓW</h1>
		</div>
	
		<div class="menu">
			
<a href="logowanie.php" class="navlink" <div class="nav">
Logowanie
</div></a>
<a href="rejestracja.php" class="navlink" <div class="nav">
Rejestracja
</div></a>
<a href="formularz.php" class="navlink" <div class="nav">
Wyślij formularz
</div></a>



		</div>
		
		<div class="main">
        
<h2>Przed tobą baza ubezpieczonych samochodów.</h2>
			
		</div>
		
		
		
		<div class="footer">
			autor: Kamil Rojek &copy; Wszelkie prawa zastrzeżone
		</div>
	
	        </div>
 </center>
</body>
</html>

		