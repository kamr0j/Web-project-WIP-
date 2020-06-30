<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title> Baza ubezpieczonych samochodów </title>
	<meta name="description" content="Dodawanie" />
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

<div class="add">
<h1> Dodawanie auta </h1></ br>
<form method="post" action="dodsam.php">
     
        Numer rejestracyjny: <br /> <input type="text" name="nrrej" /><br />
         
                </ br>
        Marka samochodu: <br /> <input type="text" name="marka" /><br />
         
                </ br>
        Rok produkcji: <br /> <input type="text" name="rok" /><br />
         
               
        </ br>
        PESEL: <br /> <input type="text" name="pesel" /><br />
         
        
        <input type="submit" value="Dodaj auto" />
        
         
    </form>

                </div>
		<div class="add">

<h1> Dodawanie osoby </h1></ br>
<form method="post" action="dodoso.php">
     
        PESEL: <br /> <input type="text" name="pesel" /><br />
         
                </ br>
        Imię: <br /> <input type="text" name="imie" /><br />
         
                </ br>
        Nazwisko: <br /> <input type="text" name="nazwisko" /><br />
         
               
        </ br>
        Typ miejscowosci: <br /> <input type="text" name="typm" /><br />
         
        
        <input type="submit" value="Dodaj osobę" />
        
         
    </form>

                </div>
		<div class="add">

<h1> Dodawanie wypadku </h1></ br>
<form method="post" action="dodwyp.php">
     
        Data wypadku: (rrrr-mm-dd)<br /> <input type="text" name="dataw" /><br />
         
                </ br>
        Numer rejestracyjny: <br /> <input type="text" name="nrrej" /><br />
         
                </ br>
        Wartość straty: <br /> <input type="text" name="warstr" /><br />
         
               
        </ br>
         
        
        <input type="submit" value="Dodaj wypadek" />
        
         
    </form>
    <div style="clear:both;"></div>

                </div>
	
		</div>
		</div>

<div class="footer">
autor: Kamil Rojek &copy
</div>


</div>
				
</center>
</body>
</html>