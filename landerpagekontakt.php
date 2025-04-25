<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namn = htmlspecialchars($_POST["namn"]);
    $klagomal = htmlspecialchars($_POST["klagomal"]);

    $rad = date("Y-m-d H:i:s") . " | Namn: $namn | Klagomål: $klagomal\n";

    file_put_contents("klagomal.txt", $rad, FILE_APPEND | LOCK_EX);

    header("Location: godkänt.html");
    exit();
}
?>
