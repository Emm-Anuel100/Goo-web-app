<?php

#include the connection file
require_once("./conn.php");

if (isset($_POST["location"]) && (!empty($_POST["location"]))) {
   # code...
$location = $_POST["location"];
$destination = $_POST["destination"];
$departure = $_POST["departure"];
$seatings = $_POST["seatings"];
$price = $_POST["price"] * $seatings;
$code = rand(1000000,9999999);


$sql = "INSERT INTO ride_bookings (location, destination, booking_code, seatings, departure, price) 
VALUES ('$location', '$destination', '$code', '$seatings', '$departure', '$price')";

if ($conn->query($sql)==="false") {
   # code...
   die("ERROR BOOKING RIDE:" .$sql);
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>congratulations you just booked a ride</title>

   <!--Style Sheet-->
   <link rel="stylesheet" href="./styles/home_page.css">

   <!-- Link favIcon  -->
   <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
</head>
<body>
   
<header class="header">
   <a href="#" class="logo"><img src="./images/logo.png" alt="logo"></a>
</header>

   <main>
      <section class="container">
         <img src="./images/undraw_mobile_ux_re_59hr.svg" alt="illustration"><br><br>
         <img src="./images/loading.gif" alt="preloader" class="preloader">
         <h1>You just booked a ride from</h1>
         <br/>
         <h3><?php echo($location); ?>.</h3>
         <br/>
         <h2>To</h2>
         <br/>
         <h3><?php echo($destination); ?>.</h3>
         <br/>
          <h3>Price: <span><del>N</del><?php echo($price); ?></span></h3>
          <br/>
          <h3>Seat(s): <span><?php echo($seatings); ?></span></h3>
          <br/>
          <p>Your booking code is <span>ABC<?php echo($code); ?>XYZ</span></p>
          <br/>
          <p>N.B print or write down your booking code because it will serve as a proof at the park.</p>
          <p><a href="./cancel_my_ride.php">Click here</a> if you are no longer interested in traveling</p>
         <button onclick=print()>print</button> <br/><br/>

         <a href="./Home.php">Go home</a>
      </section>
   </main>
   
  <footer class="page-footer">
   <section class="first-footer-sec">
      <h1>Company</h1><br/>
         <p>
            Goo is an online booking plartform that takes care of your long distance travels in Nigeria do check us out.
         </p><br/>
         <a href="" target="_blank"><i class="fas fa-facebook">.</i></a>
         <a href="" target="_blank"><i class="fas fa-twitter">.</i></a>
         <a href="" target="_blank"><i class="fas fa-instagram">.</i></a>
         <a href="" target="_blank"><i class="fas fa-youtube">.</i></a>
   </section>
   <section class="second-footer-sec">
      <h1>Help center</h1><br/>
      <a href=""><h4>Contact us</h4></a>
      <a href=""><h4>Subscription</h4></a>
      <a href=""><h4>Developers</h4></a>
      <a href=""><h4>Site map</h4></a>
      <a href=""><h4>Customer service</h4></a>
      <a href=""><h4>Privacy policy</h4></a>
      <a href=""><h4>Terms of service</h4></a>
   </section>
   <section class="third-footer-sec">
      <h1>Discover</h1><br/>
      <a href=""><h4>Destinations</h4></a>
      <a href=""><h4>payment methods</h4></a>
      <a href=""><h4>Customer reviews</h4></a>
      <a href=""><h4>Sponsors</h4></a>
      <a href=""><h4>Discounts</h4></a>
      <a href=""><h4>Delivery services</h4></a>
      <a href=""><h4>Shipping services</h4></a>
   </section>
   <section class="fourth-footer-sec">
      <h1>News letter</h1><br/>
      <form action="./Home.php" method="post" id="form">
         <p>want to get the latest Goo update on your mail then subscribe to our news letter.</p><br/>
         <input type="email" name="email" required="" placeholder="email@mail.com"/><br/>
         <button type="submit">Subscribe</button>
      </form>
   </section>
   </footer>
  <!-- <p class="copy-right">COPYRIGHT © 2023 - DATE, <span>ALL RIGHTS RESERVED.</span></p> -->

</body>


<style type="text/css">
   *{
      padding: none;
      margin: 0;
      box-sizing: border-box;
      color: rgb(166, 169, 170);
      line-height: 1.5;
   }
   a{
      text-decoration: none !important;
   }
   a:hover{
      text-decoration: underline;
   }
   body{
      width: 100%;
      overflow-x: hidden;
      height: 100vh !important;
   }
   main section img{
      height: 200px;
   }
   section.container{
      margin-top: 7rem;
      margin-left: 10%;
      visibility: hidden;
      transition: ease-in .5s;
   }
   img.preloader{
      margin-left: 5%;
      transition: ease-in .5s;
      visibility: visible;
      height: 40px;
      width: 40px;
   }
   p{
      font-size: 12.5px;
   }
   p span,
   h3 span{
      font-weight: 800;
      width: 100%;
      font-size: 16px;
   }
   del{
      text-decoration: line-through;
   }
   h3{
      font-size: 16.5px;
      font-weight: 200;
   }
   h2,
   h1{
      font-size: 18.2px;
   }
   button{
      padding: 11px 50px;
      border-radius: .2rem;
      background: rgb(105, 105, 218);
      color: #eee;
      cursor: pointer;
      font-size: 16px;
      margin-top: 1rem;
   }
   button:hover{
      transform: translate(0,-5px);
   }
   a{
      font-size: 16px;
      color: rgb(126, 126, 214);
      text-decoration: underline;
   }
   footer.page-footer{
      position: relative !important;
      top: 15% !important;
  }

   @media screen and (max-width: 500px) {
      main section{
      margin-left: 5% !important;
   }
   img.preloader{
      margin-left: 20%;
   }
   }
</style>


<script src="./scripts/scroll.js"></script>
<script type="text/javascript">
let container = document.querySelector('main section');
let preloader = document.querySelector('img.preloader');

setTimeout(() => {
   container.style.visibility = "visible";
   preloader.style.visibility = "hidden";
}, 4000);

</script>
</html>
