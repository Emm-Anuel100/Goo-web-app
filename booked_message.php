<?php
## start new session
session_start();
#requiring the connection file
require_once(dirname(__FILE__) ."./conn.php");
## email passed by user from the login/sign-in page
$email_session = $_SESSION["email"];

if (isset($_POST["location"]) && (!empty($_POST["location"]))) {
   # code...
$location = $_POST["location"];
$destination = $_POST["destination"];
$departure = $_POST["departure"];
$seatings = $_POST["seatings"];
$price = $_POST["price"] * $seatings;
$code = rand(1000000,9999999);

$sql = "INSERT INTO ride_bookings (location, destination, booking_code, seatings, departure, price, email) 
VALUES ('$location', '$destination', '$code', '$seatings', '$departure', '$price', '$email_session')";

if ($conn->query($sql)==="false" .$conn->error) {
   # code...
   die("ERROR BOOKING RIDE:" .$conn->error);
}
}

?>

<?php 
 ## select all from api_keys table
 $result = mysqli_query($conn, "SELECT * FROM (api_keys)");

 if (mysqli_num_rows($result) > 0){
  # fetch next row
  $row = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ride booked successfully</title>

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
         <img src="./images/badge.png" alt="img" class="badge"><br>
         <img src="./images/loading.gif" alt="preloader" class="preloader">
         <h1>You just booked a ride from</h1>
         <br/>
         <h3><?= ($location); ?>.</h3>
         <br/>
         <h2>To</h2>
         <br/>
         <h3><?= ($destination); ?>.</h3>
         <br/>
          <h3>Price: <span><del>&#8358;</del><?= ($price); ?></span></h3>
          <br/>
          <h3>Seat(s): <span><?= ($seatings); ?></span></h3>
          <br/>
          <p>Your booking code is <span>ABC<?= ($code); ?>XYZ</span></p>
          <br/>
          <p>N.B print or write down your booking code because it will serve as a proof at the park.</p>
          <p><a href="./cancel_my_ride.php" class="cancel_ride">Click here</a> to cancel this ride</p>
         <button onclick=print() class="print">print</button> <br/><br/>

         <!--- form for payment api integration -->
         <form id="paymentForm">
         <div class="form-group">
           <input type="hidden" id="email-address" required value="<?= ($email_session) ?>"/>
         </div>
         <div class="form-group">
           <input type="hidden" id="amount" required value="<?= ($price) ?>" />
         </div>
         <div class="form-group">
         <!-- fetch API_KEY column from db -->
         <input type="hidden" id="api_key" value="<?= $row["paystack_key"]; ?>" />
         </div>
         <div class="form-submit">
         <button type="submit" class="payment" onclick="payWithPaystack()">Proceed to payment 
            <span>➡</span>
         </button>
         </div>
         </form>
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
      transition: ease-in .3s;
      text-decoration: none;
   }
   body{
      width: 100%;
      overflow-x: hidden;
      height: 100vh !important;
   }
   main section img{
      height: 130px;
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
      height: 35px;
      width: 35px;
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
   h3{
      font-size: 16.5px;
      font-weight: 200;
   }
   h2,
   h1{
      font-size: 18.2px;
   }
   button.print{
      padding: 11px 50px;
      border-radius: .2rem;
      background: rgb(105, 105, 218);
      color: #eee;
      cursor: pointer;
      font-size: 16px;
      margin-top: 1rem;
   }
   button.print:hover{
      transform: translate(0,-5px);
   }
   button.payment{
      font-size: 16px;
      position: relative;
      right: 14px;
      color: rgb(126, 126, 214);
      background: none !important;
      position: relative;
   }
   button.payment > span{
      color: inherit;
   }
   button.payment:hover > span{
      margin-left: 13px !important;
   }
   a.cancel_ride{
      color:  rgb(126, 126, 214);
   }
   a.cancel_ride:hover{
      text-decoration: underline;
   }
   footer.page-footer{
      position: relative !important;
      top: 15% !important;
  }

   /* media querie */
   @media screen and (max-width: 500px) {
   main section img{
      height: 90px;
   }
   h1,h2{
      font-size: 15px;
   }
   p{
      font-size: 11px;
      width: 70%;
   }
   h3{
      font-size: 14.5px;
      font-weight: 200;
   }
   p span,
   h3 span{
      font-weight: 800;
      font-size: 14px;
   }
   button.payment{
      font-size: 12px;
   }
      main section{
      margin-left: 5% !important;
   }
   button{
      padding: 5px 25px;
      font-size: 12.5px;
      letter-spacing: 1px;
   }
   img.preloader{
      margin-left: 20%;
      height: 25px;
      width: 25px;
   }
   }
</style>


<!-- script for initializing payment API -->
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="./scripts/scroll.js"></script>
<script>
const paymentForm = document.getElementById('paymentForm');
  paymentForm.addEventListener("submit", payWithPaystack, false);

 function payWithPaystack(e) {
   e.preventDefault();

  let handler = PaystackPop.setup({

   key:  document.getElementById("api_key").value, // API public key
   email: document.getElementById("email-address").value,
   amount: document.getElementById("amount").value * 100,
   ref: 'GOO'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
   // label: "Optional string that replaces customer email"
   onClose: function(){
     alert('Window closed.');
   },
   callback: function(response){
     let message = 'Payment complete! Reference: ' + response.reference;
     alert(message);
     window.location = "./Home.php";
   }
 });
 
 handler.openIframe();
}
</script>
<script type="text/javascript">
let container = document.querySelector('main section');
let preloader = document.querySelector('img.preloader');

setTimeout(() => {
   container.style.visibility = "visible";
   preloader.style.visibility = "hidden";
}, 4000);
</script>
</html>