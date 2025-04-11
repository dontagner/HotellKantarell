<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Om Hotell Kantarell</title>
    <link rel="stylesheet" href="kontakt.css">
</head>
<body>
    <div class="topbar">
        <div class="imgbox">
            <img src="Hotell Kantarell.jpg" alt="Hotell Kantarell">
        </div>
        <div class="text">
            <h1>Hotell Kantarell</h1>
            <div class="navbar">
            <a href="hem.php">Hem</a>
            <a href="om.html">Om</a>
            <a href="boka.php">Boka</a>
            <a href="login.php">Logga in</a>
        </div>
    </div>
    </div>

    <form action="kontakt.php" method="post">
    <label for="username">Ditt namn</label><br>
    <input type="text" name="username" required><br>

    <label for="password">Lösenord:</label><br>
    <input type="password" name="password" required><br>

    <button type="submit" name="btnLogin">Logga in</button>
</form>
    
</body>
</html>