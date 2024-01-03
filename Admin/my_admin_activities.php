<?php

require_once("../conn.php");

#fetching number of users from the databse
$result = mysqli_query($conn, "SELECT * FROM (usersdata) ORDER BY `ID`");

$rowcount = mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOO | Admin activities page</title>
    <meta name="keywords" content="Goo,Travel,Journey,Book ride">
    <meta name="description" content="web-app where users can book rides ">
    <meta name="author" content="Goo Travels">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../styles/home_page.css">
    <link rel="stylesheet" href="../styles/admin_activities_page.css">

    <!-- Link favIcon  -->
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">

</head>
<body> 
 
   <header class="header">
      <a href="#" class="logo"><img src="../images/logo.png" alt="logo"></a>

      <nav class="navbar">
         <ul>
            <li>🔐ADMINISTRATION PANEL.</li>
         </ul>
      </nav>
   </header>

   <main class="main_activities">
      <section class="activities_content">
          <h2>
            <span>👥</span> 
            <samp><?php echo($rowcount); ?> Registered users</samp>
          </h2>
          <br/><br/>
          <h3>Goo admin activities</h3>
          <br/>
          <section class="activities">
            <h4>
               <a href="./delete_account.php">delete account</a>
            </h4>
            <h4>
               <a href="./newsletter_subscribers.php">news subscribers</a>
            </h4>
            <h4>
               <a href="./update_price.php">update price list</a>
            </h4>
            <h4>
               <a href="./booked_rides.php">delete user's rides</a>
            </h4>
            <h4>
               <a href="./index.php">↩ logout</a>
            </h4>
          </section>
      </section>

      <section class="illustration">
         <img src="../images/admin_illustration.svg" alt="illustration">
      </section>
   </main>


<noscript>Pls you need to enable javascript to run this page!</noscript>
</body>
</html>

