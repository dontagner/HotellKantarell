<!DOCTYPE html>
<?php 
$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password, "hotellkantarell");

if(isset($_POST["submit"])){
    $namn = $_POST["namn"];
    $rum = $_POST["rum"];
    $natter = $_POST["natter"];
    $frukost = isset($_POST["frukost"]) ? 1 : 0;

    $sql = "INSERT INTO tbluser (namn, rum, natter, frukost) 
            VALUES ('$namn', '$rum', '$natter', '$frukost')";
    $reslut = mysqli_query($conn, $sql);
}


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM tbluser WHERE id=$id";
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
<h1>Incheckade gäster</h1>


<?php


$sql="SELECT * FROM tbluser";
$result=mysqli_query($conn,$sql);
while($rad=mysqli_fetch_assoc($result)){ // Loop through each row in the result set
    ?>

<table class="gästlista">
    <thead>
        <tr>
            <th>Namn</th>
            <th>Rum</th>
            <th>Nätter</th>
            <th>Frukost</th>
            <th>Åtgärd</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql="SELECT * FROM tbluser";
        $result=mysqli_query($conn,$sql);
        while($rad=mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?= $rad["namn"] ?></td>
                <td><?= $rad["rum"] ?></td>
                <td><?= $rad["natter"] ?></td>
                <td><?= ($rad["frukost"] == 1) ? "Ja" : "Nej" ?></td>
                <td><a class="checkaut" href="admin.php?id=<?= $rad['id'] ?>">Checka ut</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php }
?>


</body>
</html>