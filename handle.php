<?php
include 'config.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn-> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['nimimerkki'];
$viesti = $_POST['viesti'];
$stmt = $conn->prepare('INSERT INTO Keskustelu2 (nimi, viesti) VALUES (?, ?)');
$stmt->bind_param('ss', $name, $viesti);

$stmt->execute();

$conn->close();

header("Location: form.php");
die();
?>