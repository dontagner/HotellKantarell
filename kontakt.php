<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Om Hotell Kantarell</title>
    <link rel="stylesheet" href="kontakt.css">
</head>
<body>

<header class="topbar">
    <div class="imgbox">
        <img src="Hotell Kantarell.jpg" alt="Hotell Kantarell Logo">
    </div>
    <div class="text">
        <h1>Hotell Kantarell</h1>
        <nav class="navbar">
            <a href="hem.php">Hem</a>
            <a href="om.html">Om</a>
            <a href="boka.php">Boka</a>
            <a href="login.php">Logga in</a>
        </nav>
    </div>
</header>

<main>
    <section class="contact-form">
        <h2>Kontakta oss</h2>
        <form action="landerpagekontakt.php" method="post">
            <div class="form-group">
                <label for="namn">Ditt namn:</label>
                <input type="text" id="namn" name="namn" required>
            </div>
            <div class="form-group">
                <label for="klagomal">Ditt klagomål:</label>
                <textarea id="klagomal" name="klagomal" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-button">Skicka</button>
        </form>
    </section>
</main>

</body>
</html>
