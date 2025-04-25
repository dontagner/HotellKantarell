<!DOCTYPE html>
<?php
session_start();
$level=intval($_SESSION['5ddf']);
if($level<1000){
    header("Location: login.php");
    exit;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boka</title>
    <link rel="stylesheet" href="boka.css">
</head>
<body>
<div class="topbar">
    <div class="imgbox">
        <img src="Hotell Kantarell.jpg" alt="Hotell Kantarell">
    </div>
    <div class="text">
        <h1>Hotell Kantarell</h1>
        <div class="navbar">
        <a id="1" href="hem.php">Hem</a>
        <a id="2" href="om.html">Om</a>
        <a id="3" href="kontakt.php">Kontakt</a>
        <?php if($level=10){ ?><a href="login.php">Logga in</a><?php } ?>
        <?php if($level>=1000){ ?><a href="boka.php">Admin</a><?php } ?>
    </div>
</div>
</div>


<form action="admin.php" method="POST" class="bokningsform">
    <input type="text" name="namn" placeholder="För- och efternamn" required>
    <input type="text" name="rum" placeholder="Rum" required>
    <input type="text" name="natter" placeholder="Antal nätter" required>
    <label>
    <input type="checkbox" name="frukost" value="1">
    Jag vill ha frukost
</label>

    <input type="submit" name="submit" value="Skicka">

</form>
</body>
</html>