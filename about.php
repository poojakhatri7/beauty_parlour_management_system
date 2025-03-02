
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
<?php
require 'partials/navbar.php';
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
// Assuming you have already connected to the database using $conn

// Step 1: Write the query to fetch data from the tb_about table
$sql = "SELECT * FROM tb_about";
// Step 2: Execute the query
$result = mysqli_query($conn, $sql);
// Step 3: Check if the query returned any results
if (mysqli_num_rows($result) > 0) {
    // Step 4: Fetch the data from the database and display it inside the <h1> tag
    while ($row = mysqli_fetch_assoc($result)) {
        // Display page title inside an <h1> tag
        echo "<h1>". $row['page_title'] . "</h1>";
        // Optionally, you can display the page description or other data below the heading
        echo "<h6>". $row['page_description'] . "</h6>";
    }
} else {
    // If no record is found, display a message
    echo "<p>No record found.</p>";
}
?>

