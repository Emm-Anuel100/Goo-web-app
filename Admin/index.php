<?php

#requiring the connection file
require_once("../conn.php");

if (isset($_POST["username"]) && (!empty($_POST["password"])) && $_SERVER["REQUEST_METHOD"] === "POST") {
   # code...
$admin_username = $_POST["username"];
$admin_password = $_POST["password"];

if ($admin_username === "myadmin" && $admin_password === "myadmin1234") {
   # code...
   header("location: my_admin_activities.php");
}
else{
   $error_page = "../404.php";
   header("location: $error_page");
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOO | Admin login page</title>
    <meta name="keywords" content="Goo,Travel,Journey,Book ride">
    <meta name="description" content="web-app where users can book rides ">
    <meta name="author" content="Goo Travels">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../styles/home_page.css">
    <link rel="stylesheet" href="../styles/admin_login_page.css">
    
    <!-- Link favIcon  -->
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">

</head>
<body> 
 
   <header class="header">
      <a href="#" class="logo"><img src="../images/logo.png" alt="logo"></a>

      <nav class="navbar">
         <ul>
            <li>🔐ADMIN LOGIN.</li>
         </ul>
      </nav>
   </header>

   <main class="main">
      <section>
         <h1>Login To Your Panel</h1>
         <br/><br/>
        <form action="./index.php" method="post">
         <input type="text" name="username" placeholder="username ..." required="">
         <br/><br/>
         <input type="password" name="password" placeholder="password ..." required="">
         <br/><br/>
         <button type="submit">Login</button>
        </form>
      </section>
   </main>


<noscript>Pls you need to enable javascript to run this page!</noscript>
</body>
</html>

