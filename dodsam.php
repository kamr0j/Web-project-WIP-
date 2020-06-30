<?php
 session_start();

    if (isset($_POST['nrrej']))
    {
        //Udana walidacja? Załóżmy, że tak!
        $wszystko_OK=true;
         
        $pesel = $_POST['pesel'];
         
        if (strlen($pesel)!=11)
        {
            $wszystko_OK=false;
            $_SESSION['e_pesel']="Pesel musi posiadać 11 cyfr!";
        }
         
        $nrrej = $_POST['nrrej'];
        $marka = $_POST['marka'];
        $rok = $_POST['rok'];

        if (strlen($rok)!=4)
        {
            $wszystko_OK=false;
            $_SESSION['e_rok']="Rok musi posiadać 4 cyfry";
        }
         
         
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
           
                    if ($polaczenie->query("INSERT INTO auta (nr_rejestracyjny, marka, rok_produkcji, pesel) VALUES ('$nrrej', '$marka', '$rok', '$pesel')"))
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
            echo '<span style="color:red;">Błąd serwera!</span>';
            echo '<br />Informacja developerska: '.$e;
        }
         
    }
?>