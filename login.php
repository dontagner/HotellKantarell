<?php
session_start(); 
$host = "localhost";
$user = "root";
$pass = "";
$db = "hotellkantarell";
$conn = mysqli_connect($host, $user, $pass, $db);

if (isset($_POST['btnLogin'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']); 
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $strQuery = "SELECT * FROM users WHERE username='$username' AND password='$password'";  
    $result = mysqli_query($conn, $strQuery);

    if ($result && mysqli_num_rows($result) == 1) {
        $raden = mysqli_fetch_assoc($result);
        $_SESSION['5sp'] = $raden['id'];
        $_SESSION['5ddf'] = $raden['userlevel'];
        $_SESSION['name'] = $raden['username'];
        header("Location: boka.php");
        exit();
    } else {
        $_SESSION['error'] = "Fel användarnamn eller lösenord!";
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Hotell Kantarell</title>
    <link rel="stylesheet" href="login.css">
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
                <a href="kontakt.php">Kontakta</a>
            </div>
        </div>
    </div>

    <div class="login-container">
        <?php
            if (isset($_SESSION['error'])) {
                echo "<div class='error-message'>".$_SESSION['error']."</div>";
                unset($_SESSION['error']);
            }
        ?>
        <form action="login.php" method="post" class="login-form">
            <h2>Logga in</h2>
            <div class="form-group">
                <label for="username">Användarnamn:</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Lösenord:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <button type="submit" name="btnLogin" class="btn-login">Logga in</button>
        </form>
    </div>
</body>
</html>
