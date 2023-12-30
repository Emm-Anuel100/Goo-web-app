<?php
## starts new session
session_start();

## email passed by user from the login/sign-in page
$email_session = $_SESSION["email"];

## require the connection file
require_once(dirname(__FILE__) ."./conn.php");

## select from table ride_bookings where email column is same as email posted by user from the login/sign-in page
$result = mysqli_query($conn, "SELECT * FROM (ride_bookings) WHERE `email` = '$email_session' ORDER BY `timestamp` DESC");

## require the header_footer file
require_once(dirname(__FILE__) ."./header_footer.php");

?>


 <!-- invoking the header function -->
 <?= page_header("Goo | View ride history"); ?>      


 <main class="main-content">
   <h3 class="title">Your ride history.</h3>
   <br/>

   <?php 
   $rowcount = mysqli_num_rows($result);
      ## if a value is found
   if (mysqli_num_rows($result) < 0) {
   # code...
   $row = mysqli_fetch_array($result);
   }
   ?>

   <?php if ($rowcount === 0){
      print("<pre>nothing in history</pre>");
   } else {
            $i = 0;
           while ($row = mysqli_fetch_array($result)){         
           ?>
         <section class="ride">
           <div class="sub-tit location">Location: 
              <samp><?= $row["location"]; ?></samp>
           </div> <br/>
           <div class="sub-tit destination">Destination: 
              <samp><?= $row["destination"]; ?></samp>
           </div> <br/>
           <div class="sub-tit code">Code:
               <samp><?= $row["booking_code"]; ?></samp>
           </div> <br/>
           <div class="sub-tit seatings">Seatings:
               <samp><?= $row["seatings"]; ?></samp>
           </div> <br/>
           <div class="sub-tit departure">Departure: 
              <samp><?= $row["departure"]; ?></samp>
           </div> <br/>
           <div class="sub-tit price">Price: 
              <samp>&#8358;<?= $row["price"]; ?></samp>
           </div> <br/>
           <div class="sub-tit date">Date: 
              <samp><?= $row["timestamp"]; ?></samp>
           </div>
          </section> <br/>
     
          <?php  $i++; }  ?>
          <?php 
         } ?>  



    <br/><br/><br/><br/><br/>
    <!-- invoking the footer function -->
    <?= page_footer(); ?>   
  </main>