<?php

		session_start();       
        require_once "connect.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
         
        try
        {
            $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
            if ($polaczenie->connect_errno!=0)
            {
                throw new Exception(mysqli_connect_errno());
            }
            else
            {        
               $user1 = $_SESSION['user'];
                    if ($polaczenie->query("DELETE FROM uzytkownicy WHERE user='$user1'"))
                    {                       
                        header('Location: index.php');
						unset($_SESSION['zalogowany']);
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
?>