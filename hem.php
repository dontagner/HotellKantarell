<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['5ddf'])) {
    $level = intval($_SESSION['5ddf']);
}
else {
    $level = 10;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotell Kantarell</title>
    <link rel="stylesheet" href="hem.css">
</head>
<body>

<div class="topbar">
    <div class="imgbox">
        <img src="Hotell Kantarell.jpg" alt="Hotell Kantarell">
    </div>
    <div class="text">
        <h1>Hotell Kantarell</h1>
        <div class="navbar">
            <?php if($level>=1000){ ?><a href="boka.php">Boka</a><?php } ?>
            <?php if($level>=1000){ ?><a href="admin.php">Admin</a><?php } ?>
            <?php if($level>=1000){ ?><a href="adminkontakt.php">Admin Kontakt</a><?php } ?>
            <a href="om.html">Om</a>
            <a href="kontakt.php">Kontakt</a>
            <?php if($level<=10){ ?><a href="login.php">Logga in</a><?php } ?>
            <?php if($level>=1000){ ?><a href="logout.php">Logga ut</a><?php } ?>
        </div>
    </div>
</div>

<div class="content-area">
    <div class="welcome-text">
        <h2>Välkommen till Hotell Kantarell!</h2>
        <p>
            Ett sagolikt hotell mitt i skogen – perfekt för avkoppling, god mat och naturupplevelser.  
            Hos oss hittar du hemtrevlig stämning, varm service och oförglömliga minnen.  
            Vare sig du vill boka en helg för återhämtning eller fira något speciellt – du är alltid välkommen hem till oss.
        </p>
    </div>

    <div class="secondimgbox">
        <img src="DALL·E 2025-03-24 13.34.45 - A cozy and charming hotel named 'Hotell Kantarell' nestled in a forest setting. The building has a fairytale-like design with warm wooden textures, a .webp" alt="">
    </div>
</div>

</body>
</html>
