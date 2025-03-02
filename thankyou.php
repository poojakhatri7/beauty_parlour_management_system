<?php
require 'partials/navbar.php';
?>
<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEAUTY PARLOUR MANAGEMENT SYSTEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h5>THANKS! YOUR BOOKING HAS BEEN CONFIRMED </h5>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You - Booking Confirmation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
    }
    .container {
      text-align: center;
      padding: 50px;
      background-color: #fff;
      margin: 20px auto;
      max-width: 600px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #4CAF50;
    }
    p {
      font-size: 18px;
      color: #333;
    }
    .order-number {
      font-size: 24px;
      font-weight: bold;
      color: #007BFF;
      margin: 20px 0;
    }
    .button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      text-decoration: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Thank You for Your Booking!</h1>
    <p>Your appointment has been successfully booked. We're excited to serve you!</p>
    
    <!-- Order Number Display -->
    <div class="order-number">
      <p>Your Appointment number is <span id="order-number"></span></p>
    </div>

    <!-- Action Buttons -->
    <!-- <p>If you need to make any changes or contact us, feel free to use the buttons below:</p> -->
    <a href="/beauty_parlour_management_system/" class="button">Back to Home</a>
    <a href="/beauty_parlour_management_system/services.php" class="button">View More Services</a>
  </div>

  <script>
    // Function to generate a random order number (example: ORD-12345)
    function generateOrderNumber() {
      const prefix = "123";
      const randomNumber = Math.floor(Math.random() * 100000) + 10000; // Random number between 10000 and 99999
      return prefix + randomNumber;
    }

    // Display the generated order number
    document.getElementById("order-number").innerText = generateOrderNumber();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

