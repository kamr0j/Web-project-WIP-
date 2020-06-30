
<?php

if (isset($_POST['submit']))
{
  # Email na który ma przyjść wynik
  $to = 'vpltesty@gmail.com';
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pesel = $_POST['pesel'];
  $subject = 'Someone filled your form!';

  # Email z którego wysyłamy 
  $from = 'User <kamilrojek2002@@gmail.com>';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: '.$from."\r\n". 'Reply-To: '.$from."\r\n" . 'X-Mailer: PHP/' . phpversion();

  $message .= "Imie i nazwisko: " . $name . "\r\n";
  $message .= "Email: " . $email . "\r\n";
  $message .= "PESEL: " . $pesel . "\r\n";

  if (mail($to, $subject, $message, $headers))
  {
    echo 'Email sent.';
  }
  else
  {
    echo 'Please try again.';
  }
}
?>