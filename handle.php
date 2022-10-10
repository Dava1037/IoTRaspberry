<?php
include 'config.php'

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn-> connect_error) 

{
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$viesti = $_POST['viesti'];
$sql = *INSERT INTO Keskustelu2 (nimim, viesti) VALUES ('".$name."','".$viesti."');
if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql. "<br>" . $conn->error;
    die();
}

$conn->close();
header("Location: index.php");
die();
?>
