<?php
  if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent = "Fra: $name \n Besked: $message";
    $recipient = "m-zak@live.dk";
    $subject = "Kontaktformular";
    $mailheader = "Fra: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Fejl!");
    echo "Tak for din besked!";
  }
?>
