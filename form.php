<?php
include 'config.php';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn-> connect_error) 

{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Keskustelu2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<b>".$row["nimi"]. "</b><br>" . $row["viesti"]. "<br><br>";

    }

}

$conn->close();
?>



<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <form action="handle.php" method="post">
        Nimimerkki: <input type="text" name="nimimerkki"><br>
        Viesti: <textarea name="viesti"></textarea><br>
        <input type="submit">
        </form>
    </body>
</html>