<?php
include 'config.php';
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $mobile =  $_POST["mobile_number"];
    $email =  $_POST["email"]; 
    $address =  $_POST["address"]; 
    $password =  $_POST["password"];
    $confirmpassword =  $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'");
    if (mysqli_num_rows($duplicate)>0)
    {
    echo
"<script> alert('username or email has already taken') </script>";
}
else 
{
if($password ==$confirmpassword){
    $query = "INSERT INTO users values ('','$name','$mobile','$email','$address',
    '$password')";
    mysqli_query($conn,$query);
 echo"<script> alert('registration successful you can login now') </script>"; 
 echo "<script> window.location.href = '/beauty_parlour_management_system/login.php'; </script>";
}
else {
    echo
    "<script> alert('password does not match') </script>";
}
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
  <?php
include 'partials/navbar.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <form class ="" action="" method= "post" >
      <h3>REGISTER WITH US </h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NAME</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">MOBILE NUMBER</label>
    <input type="text" name="mobile_number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">EMAIL ADDRESS</label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> ADDRESS </label>
    <input type="text" name="address" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
    <input type="text" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CONFIRM PASSWORD</label>
    <input type="text" name="confirmpassword" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit"  name ="submit" class="btn btn-primary">REGISTER</button>
</form>
<br>
<a href="/beauty_parlour_management_system/login.php">Already have a account</a>
</body>
</html>