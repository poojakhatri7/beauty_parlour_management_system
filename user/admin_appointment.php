<?php
include('includes/header.php');
include('includes/top_navbar.php');
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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->

    <style type="text/css">
.all_appointment{
  background : #157daf !important;
}
</style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h5 class="m-0"> APPOINTMENT DETAILS</h5> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><a href="/beauty_parlour_management_system/admin2/admin_add_customer.php">ADD NEW CUSTOMER</a></li> -->
              <!-- <li class="breadcrumb-item"><a href="/beauty_parlour_management_system/">Home</a></li> -->
              <!-- <a href="/beauty_parlour_management_system/admin2/admin_add_customer.php" style="text-decoration: none;">
         <button class="btn btn-success"style= "border: none; cursor: pointer;"> 
           <li class="breadcrumb-item " style= "color: white;" >ADD NEW CUSTOMER</li> 
</a>  -->
           <ol>
            <ol class="breadcrumb float-sm-right">
  <button class="btn" style="background-color:rgb(31, 184, 100);border: none; cursor: pointer;  padding: 7px 7px;">
    <i class="fa fa-user-plus fa-lg" style="margin-right: 2px; color: black; font-size: 14px;"></i>
    <a href="/beauty_parlour_management_system/admin2/admin_add_customer2.php" 
       style="text-decoration: none; color: white; font-size: 14px; font-weight: 700;  margin: 4px 2px;">
      Add New Customer
    </a>
  </button>
</ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
    <!-- <h2>Your Appointment History </h2>  -->
  <!-- <br> -->
   <!-- <table class="table">
  <thead style="background-color:rgb(23, 162, 184); color: white;">
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">DATE</th>
      <th scope="col">TIME</th>
      <th scope="col">APPOINTMENT FOR</th>
      <th scope="col">ACTIONS</th>
      </tr> -->
  <!-- </thead>
  <tbody> -->
  <?php
//   $sql = "SELECT * FROM tb_appointment";
// // Step 3: Execute the query
// $result = mysqli_query($conn, $sql);
// $count = 0;
// // Step 4: Check if the query returned any results
// if (mysqli_num_rows($result) > 0) {
//     // Step 5: Use a while loop to fetch each row of data
   
//     while ($row = mysqli_fetch_assoc($result)) {
//       $count = $count+1 ;
//       echo"<tr>
//       <th scope='row'>".$count."</th> 
//       <td>".$row['name']."</td>
//       <td>".$row['email']."</td> 
//        <td>".$row['date']."</td> 
//         <td>".$row['prefered_time']."</td> 
//          <td>".$row['appointment_for']."</td>  
//         <td>
//   <a href='/beauty_parlour_management_system/admin2/admin_edit_customer.php?id={$row["id"]}'>
//     <button style='background-color: rgb(23, 162, 184); color: white; border: none; padding: 5px 10px; cursor: pointer;'>EDIT</button>
//   </a> 
//   <a href='/beauty_parlour_management_system/admin2/delete_appointment.php?id={$row["id"]}'>
//     <button style='background-color: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer;'>DELETE</button>
//   </a> 
// </td>
//     </tr>";
//     }
// } else {
//     echo "No services found.";
// }
// ?>
<!-- //   </tbody>
// </table> -->
<!-- <a href="/beauty_parlour_management_system/sign_up.php">Create a new account</a> -->

<div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Appointment Details</h3> -->
                <h5 class="m-0"> Appoitment Details </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead style="background-color:rgb(23, 162, 184); color: white;">
                  <tr>
                    <th>S no.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Appointment for</th>
                    <th>Actions</th>
                    <!-- <th>Actions</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php
//   $sql = "SELECT * FROM tb_appointment";
// // Step 3: Execute the query
// $result = mysqli_query($conn, $sql);
// $count = 0;
// // Step 4: Check if the query returned any results
// if (mysqli_num_rows($result) > 0) {
//     // Step 5: Use a while loop to fetch each row of data
//     while ($row = mysqli_fetch_assoc($result)) {
//       $count = $count+1 ;
//       echo"<tr>
//       <th scope='row'>".$count."</th> 
//       <td>".$row['name']."</td>
//       <td>".$row['email']."</td> 
//        <td>".$row['date']."</td> 
//         <td>".$row['prefered_time']."</td> 
//          <td>".$row['appointment_for']."</td>  
//         <td> 
//   <a href='/beauty_parlour_management_system/admin2/admin_edit_customer.php?id={$row["id"]}'>

//     <button style='background-color: rgb(23, 162, 184); color: white; border: none; padding: 5px 10px; cursor: pointer;'>EDIT</button>
//   </a> 
//   <a href='/beauty_parlour_management_system/admin2/delete_appointment.php?id={$row["id"]}'>
//     <button style='background-color: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer;'>DELETE</button>
//   </a> 
// </td>
//  <td>
//   <a href='/beauty_parlour_management_system/admin2/admin_edit_customer.php?id={$row["id"]}'>
//       <i class='fas fa-pencil-alt' style='margin-right: 10px; text-decoration: none; border: none; '></i>
//   </a> 
//   <a href='/beauty_parlour_management_system/admin2/delete_appointment.php?id={$row["id"]}'>
//    <i class='fa fa-trash' style='margin-right: 5px; color: red;text-decoration: none; border: none;'></i>
 
//   </a> 
// </td>
//     </tr>";
$sql = "SELECT * FROM tb_appointment";
$result = mysqli_query($conn, $sql);
$count = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $count++;
        ?>
        <tr>
            <th scope='row'><?php echo $count; ?></th>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['prefered_time']; ?></td>
            <td><?php echo $row['appointment_for']; ?></td>
            <!-- <td> 
  <a href='/beauty_parlour_management_system/admin2/admin_edit_customer.php?id=<?php echo $row["id"]; ?>'>

    <button style='background-color: rgb(23, 162, 184); color: white; border: none; padding: 5px 10px; '>EDIT</button>
  </a> 
  <a href='/beauty_parlour_management_system/admin2/delete_appointment.php?id=<?php echo $row["id"]; ?>'>
    <button style='background-color: #f44336; color: white; border: none; padding: 5px 10px; '>DELETE</button>
  </a> 
</td> -->
<td>
    <div style="display: inline-block; margin-right: 20px;">
        <a href='/beauty_parlour_management_system/admin2/admin_edit_customer.php?id=<?php echo $row["id"]; ?>'>
            <i class='fas fa-pencil-alt' style='color:rgb(10, 90, 34);'></i> <!-- Edit icon -->
        </a> 
    </div>
    <div style="display: inline-block;">
        <a href='/beauty_parlour_management_system/admin2/delete_appointment.php?id=<?php echo $row["id"]; ?>'>
            <i class='fa fa-trash' style='color: red;'></i> <!-- Trash icon -->
        </a>
    </div>
</td>
        </tr>
        <?php
    }
} 
 else {
    echo "No Appointment found.";
}
?>

                  </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


</body>
</html>
</main>
<?php
include('includes/footer.php');
?>
