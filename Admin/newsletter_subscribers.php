<?php

require_once("../conn.php");

$result = mysqli_query($conn, "SELECT * FROM (newsletter_subscribers) ORDER BY `ID` DESC");

if (mysqli_num_rows($result) < 0) {
   # code...
   $row = mysqli_fetch_array($result);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOO | Admin booked rides page</title>
    <meta name="keywords" content="Goo,Travel,Journey,Book ride">
    <meta name="description" content="web-app where users can book rides ">
    <meta name="author" content="Goo Travels">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../styles/home_page.css">
    <link rel="stylesheet" href="../styles/table.css">

   <!-- Link favIcon  -->
   <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">

</head>
<body> 
 
   <header class="header">
      <a href="#" class="logo"><img src="../images/logo.png" alt="logo"></a>

      <nav class="navbar">
         <ul>
            <li class="title">🔐ADMINISTRATION PANEL.</li>
         </ul>
      </nav>
   </header>

   <main class="main_activities">
      <h4>newsletter subscribers</h4>
         <br/>
         <a href="./my_admin_activities.php">🔙 back</a>
         <br/><br/>
         <a href="#" id="refresh">Refresh</a><br/><br/>
         <br/>

         <section>
            <div class="header header-2">
               <span>S/N</span>
               <span>Email</span>
            </div>

            <?php
           $i = 1;
           while ($row = mysqli_fetch_array($result)){
                          
           ?>
            <div class="header rolls  header-2">
               <span><?php echo ($i); ?></span>
               <span><?php echo $row["email"]; ?></span>
            </div>
            <?php  $i++; }  ?>
         </section>
   </main>


<noscript>Pls you need to enable javascript to run this page!</noscript>

<script src="../scripts/scroll.js"></script>
<script>
   let reloader = document.querySelector("#refresh");
   reloader.addEventListener("click", ()=>{
      window.location.reload();
   })
</script>
</body>
</html>