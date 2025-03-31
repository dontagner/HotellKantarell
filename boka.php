<!DOCTYPE html>
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
        <a id="1" href="hem.html">Hem</a>
        <a id="2" href="om.html">Om</a>
        <a id="3" href="kontakt.php">Kontakt</a>
        <a href="login.php">Logga in</a>
    </div>
</div>
</div>

<div class="boka">
    <h1>Boka rum</h1>
</div>

<form action="admin.php" method="POST">
    <input type="text" name="namn" placeholder="För och efternamn">
    <input type="text" name="rum" placeholder="Rum">
    <input type="submit" name="submit" value="Skicka">
</form>
</body>
</html>