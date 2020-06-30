<?php
 session_start();    
        $wypID = $_POST['wypID'];

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
               
                    if ($polaczenie->query("DELETE FROM wypadki where wypadekID='$wypID'"))
                    {                       
                        header('Location: usuwanie.php');
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