<?php
session_start();         // Starta sessionen
session_unset();         // Rensar alla session-variabler
session_destroy();       // Förstör hela sessionen

header("Location: hem.php"); // Skickar användaren tillbaka till inloggningssidan
exit;
?>