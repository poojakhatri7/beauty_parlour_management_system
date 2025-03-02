<?php
require 'partials/navbar.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beauty";
$port = 3307;

$conn = mysqli_connect($servername, $username, $password, $dbname,$port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email =  $_POST["email"]; 
    $mobile =  $_POST["mobile"]; 
    $address =  $_POST["address"]; 
    $date =  $_POST["date"]; 
    $preferd_time =  $_POST["preferd_time"]; 
    $appointment_for =  $_POST["appointment_for"]; 

    $query = "SELECT id FROM tb_appointment WHERE mobile = '$mobile'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "<p style='color:red; font-weight:600;'>This mobile number is already registered!</p>";
    } else {
$query1 = "INSERT INTO tb_appointment values ('','$name','$email','$mobile','$address','$date','$preferd_time','$appointment_for')";
    mysqli_query($conn,$query1);
 echo"<script> alert('booking successful') </script>"; 
 echo "<script> window.location.href = '/beauty_parlour_management_system/thankyou.php'; </script>";
} }
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
    <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                        <br>
                            <h2>Book an Appointment</h2>                         
                        </div>
                        <form class ="" action="" method= "post" >
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="mobile">Mobile</label>
                                        <input id="email" name="mobile" type="text" placeholder="Enter your mobile" class="form-control input-md">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="address">Address</label>
                                        <input id="email" name="address" type="text" placeholder="Enter your address" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date"> Date</label>
                                        <input id="date" name="date" type="text" placeholder="Enter your visiting date" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Time</label>
                                        <select id="time" name="preferd_time" class="form-control">
                                            <option value="8:00 to 9:00">8:00 to 9:00</option>
                                            <option value="9:00 to 10:00">9:00 to 10:00</option>
                                            <option value="10:00 to 1:00">10:00 to 1:00</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                 <?php
                                $sql = "SELECT service_name FROM tb_services";
$result = $conn->query($sql);
$options = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $service_name = $row["service_name"];
        $options .= "<option value=\"$service_name\">$service_name</option>\n";
    }
} else {
    $options .= "<option>No services available</option>\n";
}
?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Appointment For</label>
                                        <select id="appointmentfor" name="appointment_for" class="form-control">
                                        <?php echo $options; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->                               
                                <div class="col-md-12">
                                <br>
                                    <div class="form-group">
                                        <button id="singlebutton" name ="submit" class="btn btn-primary" class="btn btn-default">Make An Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>              
            </div>
        </div>
</body>
</html>