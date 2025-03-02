<?php
require 'partials/navbar.php';
include 'config.php';
$sql = "SELECT * FROM tb_services";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEAUTY PARLOUR MANAGEMENT SYSTEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>OUR SERVICES</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">SERVICE NAME</th>
      <th scope="col">SERVICE PRICE</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql = "SELECT * FROM tb_services";
// Step 3: Execute the query
$result = mysqli_query($conn, $sql);
$count = 0;
// Step 4: Check if the query returned any results
if (mysqli_num_rows($result) > 0) {
    // Step 5: Use a while loop to fetch each row of data
    while ($row = mysqli_fetch_assoc($result)) {
      $count++;
      echo"<tr>
      <th scope='row'>".$count."</th>
      <td>".$row['service_name']."</td>
      <td>".$row['service_price']."</td>  
    </tr>";
        // // Step 6: Display the data (ID, service name, price, and creation date)
        // echo "ID: " . $row['id'] . "<br>";
        // echo "Service Name: " . $row['service_name'] . "<br>";
        // echo "Service Price: $" . $row['service_price'] . "<br>";
        // echo "Creation Date: " . $row['creation_date'] . "<br><br>";
    }
} else {
    echo "No services found.";
}
?>
  </tbody>
</table>
  </body>
</html>