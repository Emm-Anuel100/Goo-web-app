<?php
function page_header($title) {
   ## page header starts here
   echo <<<EOT
   <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$title</title>
    <meta name="keywords" content="Goo,Travel,Journey,Book ride">
    <meta name="description" content="web-app where users can book rides ">
    <meta name="author" content="Goo Travels">
   
    <!-- Google Fonts Pre Connect -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./styles/home_page.css">
    <link rel="stylesheet" href="./styles/cookie.css">
    <link rel="stylesheet" href="./styles/ride_history.css">
    
    <!-- Link favIcon  -->
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">

   </head>
   <body>
     
   <header class="header">
     <a href="#" class="logo"><img src="./images/logo.png" alt="logo"></a>
     
     <nav class="navbar">
            <ul>
               <li><a href="./Home.php" class="item">Home</a></li>
               <li><a href="#">About us</a></li>
               <li><a href="#" >Pages <i class="fas fa-caret-down"></i></a>
                  <ul class="drop-down-list1">
                     <li><a href="./ride_history.php">Ride history</a></li>
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
   EOT;
   ## page header ends here
   }





   function page_footer() {
      ## page footer starts here
      $date = date("Y");
      echo <<<EOT
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
     <p class="copy-right">COPYRIGHT © 2020 - $date, <span>ALL RIGHTS RESERVED.</span></p>


<!--- cookie box section --->
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
EOT;
## page footer ends here
}
?>