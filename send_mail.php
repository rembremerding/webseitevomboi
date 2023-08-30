<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $projektname = $_POST["projektname"];

  $projektbeschreibung = $_POST["projektbeschreibung"];

  $github = $_POST["github"];

  $jfrog = $_POST["jfrog"];

  $stages = implode(", ", $_POST["stages"]);

  $zugriff = $_POST["zugriff"];

 

  $to = konsti12348@gmail.com;

  $subject = "Neues Formular eingereicht";

  $message = "Projektname: " . $projektname . "\n\n"

          . "Projektbeschreibung: " . $projektbeschreibung . "\n\n"

          . "Github.com-Projekt: " . $github . "\n\n"

          . "Jfrog/Artifactory: " . $jfrog . "\n\n"

          . "Stages: " . $stages . "\n\n"

          . "Zugriff von außerhalb: " . $zugriff;

 

  $headers = "From: webmaster@example.com" . "\r\n" . "Reply-To: webmaster@example.com" . "\r\n" . "X-Mailer: PHP/" . phpversion();

 

  if (mail($to, $subject, $message, $headers)) {

    echo "E-Mail erfolgreich versendet!";

  } else {

    echo "E-Mail konnte nicht versendet werden!";

  }

}

?>