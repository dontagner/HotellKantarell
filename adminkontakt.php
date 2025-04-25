<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['5ddf']) || intval($_SESSION['5ddf']) < 1000) {
    echo "Åtkomst nekad. Endast administratörer har behörighet.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['rensa'])) {
    file_put_contents("klagomal.txt", ""); // tömmer filen
    $meddelande = "Alla klagomål har raderats.";
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotell Kantarell</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="topbar">
    <div class="imgbox">
        <img src="Hotell Kantarell.jpg" alt="Hotell Kantarell">
    </div>
    <div class="text">
    <div class="navbar">
        <a href="hem.php">Hem</a>
        <a href="boka.php">Boka</a>
        <a href="kontakt.php">Kontakt</a>
    </div>
</div>
</div>
<h1>Kontakt</h1>


<div class="admin-klagomal" style="padding: 40px;">
    <h2>Inskickade klagomål</h2>

    <?php if (isset($meddelande)) { echo "<p style='color: green;'>$meddelande</p>"; } ?>

    <form method="post" onsubmit="return confirm('Är du säker på att du vill ta bort alla klagomål?');">
        <button type="submit" name="rensa" style="padding: 10px 20px; background-color: darkred; color: white; border: none; border-radius: 10px; font-weight: bold; cursor: pointer;">
            Ta bort alla klagomål
        </button>
    </form>

    <pre style="margin-top: 20px; background-color: #fff8e1; padding: 20px; border-radius: 10px;">
<?php
$fil = "klagomal.txt";
if (file_exists($fil) && filesize($fil) > 0) {
    echo htmlspecialchars(file_get_contents($fil));
} else {
    echo "Inga klagomål har skickats in ännu.";
}
?>
    </pre>
</div>

</body>
</html>