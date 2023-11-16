<?php
#require the connection file
require_once "./conn.php";

if (isset($_POST["code"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
   # code...  
$code = $_POST["code"];
$result = mysqli_query($conn, "SELECT * FROM (ride_bookings) WHERE `booking_code` = '$code' LIMIT 1");

if (mysqli_num_rows($result) > 0){
  # code...
  $row = mysqli_fetch_assoc($result);
  
if ($code !== $row["booking_code"]) {
   # code...
   return false;
}
else{
   ?>
   <script>
      alert("your ride has been deleted.");
   </script>
   <?php
   $delete = mysqli_query($conn,"DELETE FROM `ride_bookings` WHERE `booking_code` = '$code' LIMIT 1");
}
}
#if posted code is not found in any of the rows
else{
   ?>
   <script>
      alert("this ride was not found");
   </script>
   <?php
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOO | cancel my ride</title>
    <meta name="keywords" content="Goo,Travel,Journey,Book ride">
    <meta name="description" content="web-app where users can book rides ">
    <meta name="author" content="Goo Travels">

    <!-- Google Fonts Pre Connect -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./styles/sign-in.css">
 
    <!-- Link favIcon  -->
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
</head>

<body>
   
<header class="header">
      <a href="#" class="logo">
         <img src="./images/logo.png" alt="logo">
      </a>
</header>

  <section class="section-page"> 
    <div class="form-section">
      <h2>DELETE MY RIDE</h2><br>
      <form action="./cancel_my_ride.php" method="POST" id="sign-in">
         <fieldset>
            <input type="password" name="code" id="password1" required="" placeholder="Enter your code ...">
            <h5 class="show1">SHOW</h5>
          </fieldset>
          <span class="sign-in">Input only the numbers in your code. <a href="Home.php">Go home</a></span><br>
         <fieldset>
            <button type="submit">delete</button>
         </fieldset>
      </form>
    </div> <br/>
   </section> 
  
   <script src="./scripts/password.js"></script>
   <script src="./script/scroll.js"></script>
</body>
</html>