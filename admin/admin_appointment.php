<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beauty";
$port = 3307;

$conn = mysqli_connect($servername, $username, $password, $dbname,$port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<main class="app-main">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEAUTY PARLOUR MANAGEMENT SYSTEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <h2>Your Appointment history </h2> 
  <br>
   <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">DATE</th>
      <th scope="col">TIME</th>
      <th scope="col">APPOINTMENT FOR</th>
      </tr>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql = "SELECT * FROM tb_appointment";
// Step 3: Execute the query
$result = mysqli_query($conn, $sql);
// Step 4: Check if the query returned any results
if (mysqli_num_rows($result) > 0) {
    // Step 5: Use a while loop to fetch each row of data
    while ($row = mysqli_fetch_assoc($result)) {
      echo"<tr>
      <th scope='row'>".$row['id']."</th>
      <td>".$row['name']."</td>
      <td>".$row['email']."</td> 
       <td>".$row['date']."</td> 
        <td>".$row['prefered_time']."</td> 
         <td>".$row['appointment_for']."</td>  
    </tr>";
    }
} else {
    echo "No services found.";
}
?>
  </tbody>
</table>
<!-- <a href="/beauty_parlour_management_system/sign_up.php">Create a new account</a> -->
</body>
</html>