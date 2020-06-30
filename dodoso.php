<?php
 session_start();
   unset($_SESSION['e_dodaj']);
    if (isset($_POST['pesel']))
    {    
        $imie = $_POST['imie'];
        $pesel = $_POST['pesel'];
        $nazwisko = $_POST['nazwisko'];
        $typm = $_POST['typm'];
         
         
        require_once "connect.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
         
        try
        {
            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
            if ($polaczenie->connect_errno!=0)
            {
                throw new Exception(mysqli_connect_errno());
            }
            else
            {        
               
                    if ($polaczenie->query("INSERT INTO osoby (pesel, imie, nazwisko, typ_miejscowosci) VALUES ('$pesel', '$imie', '$nazwisko', '$typm')"))
                    {                       
                        header('Location: dodawanie.php');
                    }
                    else
                    {
                        throw new Exception($polaczenie->error);
                    }
                   
                
                 
                $polaczenie->close();
            }
             
        }
        catch(Exception $e)
        {
            $_SESSION['e_dodaj']="Istnieje już taki rekord";
            echo '<br />Informacja developerska: '.$e;
        }
         
    }
?>