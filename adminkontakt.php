<!DOCTYPE html>
<?php 
$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password, "hotellkantarell");

if(isset($_POST["submit"])){
    $namn=$_POST["namn"];
    $arende= $_POST["arende"];
    $sql="INSERT INTO kontakt(namn, arende) VALUES ('$namn', '$arende')";
    $reslut=mysqli_query($conn,$sql);
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM kontakt WHERE id=$id";
    $result=mysqli_query($conn,$sql);
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


<?php
// 1. Anslut till databasen
$servername = "localhost";
$username = "root"; // ändra vid behov
$password = "";     // ändra vid behov
$dbname = "hotellkantarell";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollera anslutning
if ($conn->connect_error) {
    die("Anslutning misslyckades: " . $conn->connect_error);
}

// 2. Ta emot data från formuläret
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namn = $conn->real_escape_string($_POST['username']);
    $arende = $conn->real_escape_string($_POST['arende']);

    // 3. Spara i databasen
    $sql = "INSERT INTO kontakt (namn, arende) VALUES ('$namn', '$arende')";
    
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Fel: " . $sql . "<br>" . $conn->error;
    }
}
// Visa alla inskickade meddelanden
echo "<h2>Inkomna meddelanden:</h2>";
$result = $conn->query("SELECT * FROM kontakt");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px;'>
                <p><strong>" . htmlspecialchars($row["namn"]) . "</strong>: " . htmlspecialchars($row["arende"]) . "</p>
                <a href='adminkontakt.php?id=" . $row["id"] . "' style='color:red;'>Ta bort</a>
              </div>";
    }
} else {
    echo "<p>Inga meddelanden ännu.</p>";
}


$conn->close();
?>



</body>
</html>