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
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Check if form is submitted
if (isset($_POST["submit"])) {
    // Get the form data
    $service_name = $_POST["service_name"];
    $service_price = $_POST["service_price"];

    // SQL query to insert data
    $query = "INSERT INTO `tb_services` (service_name, service_price) VALUES ('$service_name', '$service_price')";

    // Execute the query and check for success
    if (mysqli_query($conn, $query)) {
        echo "<script> alert('New service added successfully'); </script>";
    } else {
        echo "<script> alert('Something went wrong'); </script>";
    }
}
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
    <!-- <form class ="" action="" method= "post" >
    <h3>ADD SERVICES</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">SERVICE NAME</label>
    <input type="text" name="service_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">SERVICE PRICE </label>
    <input type="text" name="service_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  <button type="submit" name="submit"class="btn btn-primary">ADD</button>
</form> -->

<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">ADD SERVICES</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method= "post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">SERVICE NAME</label>
                    <div class="col-sm-10">
                      <input type="text" name="service_name" class="form-control" id="inputEmail3" placeholder="ENTER NEW SERVICE ">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">SERVICE PRICE</label>
                    <div class="col-sm-10">
                      <input type="text" name="service_price" class="form-control" id="inputPassword3" placeholder="ENTER NEW PRICE">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">ADD</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
</div>
<!-- <a href="/beauty_parlour_management_system/sign_up.php">Create a new account</a> -->
</body>
</html>
