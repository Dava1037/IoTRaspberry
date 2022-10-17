<!---google chart-->

        <?php 

    $servername = "hyvis.mysql.database.azure.com";
    $username = "db_projekti";
    $password = "Sivyh2022";
    $dbname = "liike";

    $conn = new mysqli($servername, $username, $password, $dbname);
     if($conn->connect_error)
     
    {
        die("Connection failed:" . $conn->connect_error);
    }
    $sql ="SELECT  Arvo , Aika FROM liike order by Aika desc limit 10" ;
    $result =$conn -> query($sql);

   
   echo "<table><tr><th>Aika</th><th>Arvo</th></tr>";
   
    $movement = 0;
    $noMovement = 0;

    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["Aika"]."</td><td>".$row["Arvo"]. "</td></tr>";
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
         
   ['Ei Liikettä',    ".$noMovement."]";
 echo $movement;
 echo $noMovement;
 
 ?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Liikettä',     6],
          ['Ei liikettä',      4]
         
        ]);

        var options = {
          title: 'Liikettä tai Ei liikettä'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>