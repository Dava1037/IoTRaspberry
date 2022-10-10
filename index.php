
<html>
        <head>
        <style>
          table, th, td{
            border: 1px solid black;
          }
        </style>
        </head>
        <body>
        
        <?php 

    $servername = "hyvis.mysql.database.azure.com";
    $username = "db_projekti";
    $password = "Sivyh2022";
    $dbname = "david_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
     if($conn->connect_error)
     
    {
        die("Connection failed:" . $conn->connect_error);
    }
    $sql ="SELECT id, value , date FROM david_tbl";
    $result =$conn -> query($sql);

    

    echo "<table><tr><th>Aika</th><th>Arvo</th></tr>";

        $movement = 0;
        $noMovement = 0;

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["date"]."</td><td>".$row["value"]. "</td></tr>";
            if ($row["Arvo"]==1){

             $movement++;

            }
            else {
            $noMovement++;
            }
        }    
    
    echo "</table>";

        $conn-> close();

    $chartArray = "['Liikettä',     ".$movement."],

    ['Ei Liikettä',     ".$noMovement."]";
    echo $movement;
    echo $noMovement;
    ?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>

    <body>
        <form action="handle.php" method:"post">
        Nimimerkki: <input type="text" name="name"><br>
        Viesti: <textarea name="viesti"></textarea>
        <input type="submit">
        </form>
    </body>
</html>
