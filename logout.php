<?php
session_start();         // Starta sessionen
session_unset();         // Rensar alla session-variabler
session_destroy();       // Förstör hela sessionen

header("Location: login.php"); // Skickar användaren tillbaka till inloggningssidan
exit;
?>