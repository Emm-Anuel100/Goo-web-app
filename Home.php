<?php
// session_start();
// if(!isset($_SESSION['userData'])){
// 	header('location: index.php');
// }

/**
 * Summary of news_letter
 * @return void
 */
function news_letter(){
   #requiring the connection file
require_once("./conn.php");

if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
  # code...
$email = $_POST["email"];

$sql = "INSERT INTO newsletter_subscribers (email) 
VALUES ('$email')";

if ($conn->query($sql)===false) {
  # code...
  die("ERROR SUBSCRIBING TO NEWS LETTER: " .$sql);
}
else{
  ?>
  <script>
    alert("subscribtion added");
  </script>
  <?php
}
}
}
news_letter();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOO | Book Ride At Your Convenience</title>
    <meta name="keywords" content="Goo,Travel,Journey,Book ride">
    <meta name="description" content="web-app where users can book rides ">
    <meta name="author" content="Goo Travels">

    <!-- Google Fonts Pre Connect -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./styles/home_page.css">
    <link rel="stylesheet" href="./styles/cookie.css">

    <!-- Link favIcon  -->
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

</head>
<body> 
 
      <header class="header">
         <a href="#" class="logo"><img src="./images/logo.png" alt="logo"></a>
   
         <nav class="navbar">
            <ul>
               <li><a href="#" class="item">Home</a></li>
               <li><a href="#">About us</a></li>
               <li><a href="#" >Pages <i class="fas fa-caret-down"></i></a>
                  <ul class="drop-down-list1">
                     <li><a href="#">Faqs</a></li>
                     <li><a href="#">Services <i id="plus" class="fas fa-caret-right"></i></a>
                        <ul class="drop-down-list2">
                           <li><a href="#">Delivery</a></li>
                           <li><a href="#">Shipping</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li><a href="./cancel_my_ride.php">Delete ride</a></li>
               <li><a href="#">Review <i class="fas fa-caret-down"></i></a>
                  <ul class="drop-down-list3">
                     <li><a href="#">Customers</a></li>
                     <li><a href="#">Sponsors</a></li>
                  </ul>
               </li>
               <li><a href="./forecast.php">Forecast</a></li>
            </ul>
         </nav>
   
         <div id="onclick"> <!--hamburger menu-->
           <span class="bar first_bar"></span>
           <span class="bar second_bar"></span>
           <span class="bar third_bar"></span>
         </div>
      </header>
   
   
      <div class="video-wrap">
         <video autoplay muted loop class="main-video">
            <source src="./images/waterfall.mp4" type="video/mp4"/>
        </video>
      </div>
      <!--overlay-->
      <div class="overlay"></div>
      
      <section class="content">
         <div class="con">
         <div class="container">
         <h1>HELLO,</h1> <br/>
         <h2 class="content-main"> Let's journey together and explore<em>.</em>
         </h2><br/>
         <article class="details">book a ride with us today and we will surely make your journey a memorable one trust us <br class="br">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ad modi!.<br class="br">
         </article><br/>
         </div>
         <a href="./start_booking_ride.php" target="_self" class="started">
            <button class="action">Get started <i class="fas fa-caret-down"></i>
            </button>
         </a>
         </div>
   
     <br/><br/><br/><br/>
     <div class="source">
      <h4>video by <span>Ben Tommy .h.</span></h4>
     </div>
   
     <div class="rides-container">
      <div class="rides">
         <span class="hover"></span>
         <span class="hover"></span>
         <span class="hover"></span>
         <span class="hover"></span>
   
         <span class="item">
         <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
         <span class="rates-con">
            <i class="fas fa-star">o</i>
            <i class="fas fa-star">o</i>
            <i class="fas fa-star-half-alt">o</i>
            <i class="fas fa-star-half-alt">o</i>
            <i class="fas fa-star-half-alt">o</i>
            <br/><br/><br/>
            <h4>ikoyi lagos -- aloma kogi</h4>
            <br>
           <h5><span>N</span>10,500 | 1 seating</h5>
         </span>
         <div class="item-ac">Ac Bus</div>
         </span>
      </div>
   
      <div class="rides">
         <span class="hover"></span>
         <span class="hover"></span>
         <span class="hover"></span>
         <span class="hover"></span>
   
         <span class="item">
         <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
         <span class="rates-con">
            <i class="fas fa-star">o</i>
            <i class="fas fa-star">o</i>
            <i class="fas fa-star-half-alt">o</i>
            <i class="fas fa-star-half-alt">o</i>
            <i class="fas fa-star-half-alt">o</i>
            <br/><br/><br/>
            <h4>wuse abuja -- ajah lagos</h4>
            <br>
            <h5><span>N</span>12,500 | 1 seating</h5>
         </span>
         <div class="item-ac">Ac Bus</div>
         </span>
      </div>
   
      <div class="rides">
         <span class="hover"></span>
         <span class="hover"></span>
         <span class="hover"></span>
         <span class="hover"></span>
   
         <span class="item">
         <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
         <span class="rates-con">
            <i class="fas fa-star">o</i>
            <i class="fas fa-star">o</i>
            <i class="fas fa-star-half-alt">o</i>
            <i class="fas fa-star-half-alt">o</i>
            <i class="fas fa-star-half-alt">o</i>
            <br/><br/><br/>
            <h4>otah ogun -- oyo ibadan</h4>
            <br>
            <h5><span>N</span>8,000 | 1 seating</h5>
         </span>
         <div class="item-ac">Ac Bus</div>
         </span>
      </div>
   </section>
   
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
     <p class="copy-right">COPYRIGHT © 2020 - <?php echo(date("Y")); ?>, <span>ALL RIGHTS RESERVED.</span></p>
   
   
   
   <div class="wrapper">
      <img src="./images/cookie.JPG" alt="cookie img" loading="lazy">
      <span class="cancel">❌</span>
      <div class="content">
         <pre>Cookie Consent</pre>
         <p>We use cookies to make sure you get the best
          experience in our site <a href="#">Click here</a> to learn more about our cookie policy
         <div class="buttons">
            <button class="item">Accept cookies</dibutton>
            <!-- <a href="#" class="item">learn more </a> -->
         </div>
      </div>
   </div>

<noscript>Pls you need to enable javascript to run this page!</noscript>
<script src="./scripts/script.js"></script>

</body>
</html>