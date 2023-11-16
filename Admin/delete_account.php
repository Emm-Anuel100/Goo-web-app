<?php

require_once("../conn.php");

#delete values from usersdata table 
if (isset($_GET['id'])) { 
   $ID = $_GET['id'];
   $delete = mysqli_query($conn,"DELETE FROM `usersdata` WHERE `id` = '$ID' ");
}

#fetching values from usersdata table 
$result = mysqli_query($conn, "SELECT * FROM (usersdata) ORDER BY `ID` DESC");

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
    <title>GOO | Admin registered users page</title>
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
      <h4>registered users</h4>
         <br/>
         <a href="./my_admin_activities.php">🔙 back</a>
         <br/><br/>
         <a href="#" id="refresh">Refresh</a><br/><br/>
         <pre>N.B actions performed here are strict and can not be reversed.</pre>
         <br/>

         <section>
            <div class="header">
               <span>S/N</span>
               <span>Oauth_pro</span>
               <span>Oauth_id</span>
               <span>First_name</span>
               <span>Last_name</span>
               <span>User_name</span>
               <span>Email</span>
               <span>Locale</span>
               <span>Picture</span>
               <span>Created_date</span>
               <span>Password</span>
               <span>Notify</span>
               <span>Delete</span>
            </div>

            <?php
           $i = 1;
           while ($row = mysqli_fetch_array($result)){
                          
           ?>
            <div class="header rolls">
               <span><?php echo ($i); ?></span>
               <span style="width: 120px; overflow-x: hidden;"><?php echo $row["oauth_pro"]; ?></span>
               <span style="width: 120px; overflow-x: hidden;"><?php echo $row["oauthid"]; ?></span>
               <span style="width: 120px; overflow-x: hidden;"><?php echo $row["f_name"]; ?></span>
               <span style="width: 120px; overflow-x: hidden;"><?php echo $row["l_name"]; ?></span>
               <span style="width: 120px; overflow-x: hidden;"><?php echo $row["username"]; ?></span>
               <span style="width: 120px; overflow-x: hidden;"><?php echo $row["email_id"]; ?></span>
               <span style="width: 120px; overflow-x: hidden;"><?php echo $row["locale"]; ?></span>
               <span style="width: 120px; overflow-x: hidden;"><?php echo $row["picture"]; ?></span>
               <span style="width: 120px; overflow-x: hidden;"><?php echo $row["created_date"]; ?></span>
               <span style="width: 120px; overflow-x: hidden;"><?php echo $row["password"]; ?></span>
               <span style="width: 14px;"><?php echo $row["notify"]; ?></span>
               <span style="width: 120px; position: relative; left: 1rem;"><?php echo "<a href='delete_account.php?id=".$row['id']."'>Delete account</a>" ?></span>
            </div>
            <?php  $i++; }  ?>
         </section>
   </main>


<noscript>Pls you need to enable javascript to run this page!</noscript>

<script src="../scripts/scroll.js"></script>
<script type="text/javascript">
   let reloader = document.querySelector("#refresh");
   reloader.addEventListener("click", ()=>{
      window.location.reload();
   })
</script>
</body>
</html>