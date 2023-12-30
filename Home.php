<?php
session_start();
// if(!isset($_SESSION['userData'])){
// 	header('location: index.php');
// }

## require the header_footer file
require_once(dirname(__FILE__) ."./header_footer.php");
## email passed by user from the login/sign-in page
$email_session = $_SESSION["email"];

## if user is trying to acess the home page without signing up/in
if (empty($email_session)) {
   # code...
   header("Location: error.htm");
}


/**
 * Summary of news_letter
 * @return void
 */
function news_letter(){
   #requiring the connection file
require_once(dirname(__FILE__) ."./conn.php");

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


      <!-- invoking the header function -->
      <?= page_header("Goo | Home page"); ?>      

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
   

  <!-- invoking the footer function -->
   <?= 
    page_footer();
   ?>