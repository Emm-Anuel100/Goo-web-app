<?php
require_once "./conn.php";

$result = mysqli_query($conn, "SELECT * FROM (available_rides)");

if (mysqli_num_rows($result) > 0){
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
    <title>GOO | Start Booking Rides</title>
    <meta name="keywords" content="Goo,Travel,Journey,Book ride">
    <meta name="description" content="web-app where users can book rides ">
    <meta name="author" content="Goo Travels">

    <!-- Google Fonts Pre Connect -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css files  -->
    <link rel="stylesheet" href="./styles/home_page.css">
    <link rel="stylesheet" href="./styles/start_booking.css">

    <!-- Link favIcon  -->
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    </head>
<body>

<header>
   <a href="./Home.php">🔙</a>
  <div class="search-box">
   <div class="row">
     <form action="#" method="post">
      <input type="text" name="" id="input-box" placeholder="Search your destination ..." required="" autocomplete="off">
      <button type="search">🔍<span>search</span></button>
     </form>
   </div>

   <div class="result-box">
   </div>
  </div>
</header>

<section class="main-container">
 <main>   
  <div class="rides-container2">
    <div class="rides">
      <h3 class="booked_rides">
         available rides
      </h3>
      <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/>
     <div class="sec-contain">
      <h4>Garriki Enugu -- Lugbe Abuja</h4>
      <h5><span>N</span><?php echo $row["Garriki Enugu - Lugbe Abuja"]; ?></h5>

      <form action="./booked_message.php" method="post">
        <section class="travel-infor">
          <input type="text" name="location" value="Garriki Enugu">
          <input type="text" name="destination" value="Lugbe Abuja">
          <input type="number" name="price" value="<?php echo $row["Garriki Enugu - Lugbe Abuja"]; ?>">
        </section> <br/>

        <h4 class="departure">Departure:</h4>
        <input type="text" name="departure" value="25th. Oct. 2023 | 6.00 am" class="depart" readonly=""><br/>
        <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
        <button type="submit">Book ride</button>
      </form>
     </div>
    </div>
 
    <div class="rides">
      <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
      <div class="sec-contain">
        <h4>Nike Enugu -- Aba Abia</h4>
        <h5><span>N</span><?php echo $row["Nike Enugu - Aba Abia"]; ?></h5>

        <form action="./booked_message.php" method="post">
          <section class="travel-infor">
            <input type="text" name="location" value="Nike Enugu">
            <input type="text" name="destination" value="Aba Abia">
            <input type="number" name="price" value="<?php echo $row["Nike Enugu - Aba Abia"]; ?>">
          </section> <br/>

          <h4 class="departure">Departure:</h4>
        <input type="text" name="departure" value="5th. Nov. 2023 | 7.30 am" class="depart" readonly=""><br/>
          <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
          <button type="submit">Book ride</button>
        </form>
       </div>
    </div>

    <div class="rides">
      <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
      <div class="sec-contain">
        <h4>Arochukwu Imo -- Sapelle Delta</h4>
        <h5><span>N</span><?php echo $row["Arochukwu Imo - Sapelle Delta"]; ?></h5>

        <form action="./booked_message.php" method="post">
          <section class="travel-infor">
            <input type="text" name="location" value="Arochukwu Imo">
            <input type="text" name="destination" value="Sapelle Delta">
            <input type="number" name="price" value="<?php echo $row["Arochukwu Imo - Sapelle Delta"]; ?>">
          </section> <br/>

          <h4 class="departure">Departure:</h4>
          <input type="text" name="departure" value="30th. Dec. 2023 | 5.00 am" class="depart" readonly=""><br/>
          <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
          <button type="submit">Book ride</button>
        </form>
       </div>
   </div>

   <div class="rides">
      <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
      <div class="sec-contain">
        <h4>Awka Anambra -- Suleja Niger</h4>
        <h5><span>N</span><?php echo $row["Arochukwu Imo - Sapelle Delta"]; ?></h5>

        <form action="./booked_message.php" method="post">
          <section class="travel-infor">
            <input type="text" name="location" value="Awka Anambra">
            <input type="text" name="destination" value="Suleja Niger">
            <input type="number" name="price" value="<?php echo $row["Arochukwu Imo - Sapelle Delta"]; ?>">
          </section> <br/>

          <h4 class="departure">Departure:</h4>
        <input type="text" name="departure" value="1st. Oct. 2023 | 9.00 am" class="depart" readonly=""><br/>
          <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
          <button type="submit">Book ride</button>
        </form>
       </div>
   </div>

   <div class="rides">
    <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
    <div class="sec-contain">
      <h4>Lekki Lagos -- Osogbo Osun</h4>
      <h5><span>N</span><?php echo $row["Lekki Lagos - Osogbo Osun"]; ?></h5>

      <form action="./booked_message.php" method="post">
        <section class="travel-infor">
          <input type="text" name="location" value="Lekki Lagos">
          <input type="text" name="destination" value="Osogbo Osun">
          <input type="number" name="price" value="<?php echo $row["Lekki Lagos - Osogbo Osun"]; ?>">
        </section> <br/>

        <h4 class="departure">Departure:</h4>
        <input type="text" name="departure" value="25th. Oct. 2023 | 8.00 am" class="depart" readonly=""><br/>
        <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
        <button type="submit">Book ride</button>
      </form>
     </div>
   </div>

 <div class="rides">
   <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
   <div class="sec-contain">
    <h4>Adamawa Yola -- Kano Kano</h4>
    <h5><span>N</span><?php echo $row["Adamawa Yola - Kano Kano"]; ?></h5>

    <form action="./booked_message.php" method="post">
      <section class="travel-infor">
        <input type="text" name="location" value="Adamawa Yola">
        <input type="text" name="destination" value="Kano Kano">
        <input type="number" name="price" value="<?php echo $row["Adamawa Yola - Kano Kano"]; ?>">
      </section> <br/>

      <h4 class="departure">Departure:</h4>
        <input type="text" name="departure" value="3rd. Dec. 2023 | 10.00 am" class="depart" readonly=""><br/>
      <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
      <button type="submit">Book ride</button>
    </form>
   </div>
 </div>

  <div class="rides">
      <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
      <div class="sec-contain">
        <h4>Garriki Enugu -- Owerri Imo</h4>
        <h5><span>N</span><?php echo $row["Garriki Enugu - Owerri Imo"]; ?></h5>

        <form action="./booked_message.php" method="post">
          <section class="travel-infor">
            <input type="text" name="location" value="Garriki Enugu">
            <input type="text" name="destination" value="Owerri Imo">
            <input type="number" name="price" value="<?php echo $row["Garriki Enugu - Owerri Imo"]; ?>">
          </section> <br/>

          <h4 class="departure">Departure:</h4>
          <input type="text" name="departure" value="25th. Oct. 2023 | 6.00 am" class="depart" readonly=""><br/>
          <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
          <button type="submit">Book ride</button>
        </form>
       </div>
    </div>
 
    <div class="rides">
      <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
      <div class="sec-contain">
        <h4>ninth-mile Enugu -- Wuye Abuja</h4>
        <h5><span>N</span><?php echo $row["ninth-mile Enugu - Wuye Abuja"]; ?></h5>

        <form action="./booked_message.php" method="post">
          <section class="travel-infor">
            <input type="text" name="location" value="ninth-mile Enugu">
            <input type="text" name="destination" value="Wuye Abuja">
            <input type="number" name="price" value="<?php echo $row["ninth-mile Enugu - Wuye Abuja"]; ?>">
          </section> <br/>

          <h4 class="departure">Departure:</h4>
          <input type="text" name="departure" value="25th. Oct. 2023 | 5.30 am" class="depart" readonly=""><br/>
          <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
          <button type="submit">Book ride</button>
        </form>
       </div>
    </div>
 
 
    <div class="rides">
      <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
      <div class="sec-contain">
        <h4>Mbyama Rivers -- Ajah Lagos</h4>
        <h5><span>N</span><?php echo $row["Mbyama Rivers - Ajah Lagos"]; ?></h5>

        <form action="./booked_message.php" method="post">
          <section class="travel-infor">
            <input type="text" name="location" value="Mbyama Rivers">
            <input type="text" name="destination" value="Ajah Lagos">
            <input type="number" name="price" value="<?php echo $row["Mbyama Rivers - Ajah Lagos"]; ?>">
          </section> <br/>

          <h4 class="departure">Departure:</h4>
        <input type="text" name="departure" value="27th. Dec. 2023 | 7.30 am" class="depart" readonly=""><br/>
          <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
          <button type="submit">Book ride</button>
        </form>
       </div>
    </div>

    <div class="rides">
      <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
      <div class="sec-contain">
        <h4>Aloma Kogi -- Jos Plateau</h4>
        <h5><span>N</span><?php echo $row["Aloma Kogi - Jos Plateau"]; ?></h5>

        <form action="./booked_message.php" method="post">
          <section class="travel-infor">
            <input type="text" name="location" value="Aloma Kogi">
            <input type="text" name="destination" value="Jos Plateau">
            <input type="number" name="price" value="<?php echo $row["Aloma Kogi - Jos Plateau"]; ?>">
          </section> <br/>

          <h4 class="departure">Departure:</h4>
        <input type="text" name="departure" value="15th. Oct. 2023 | 8.00 am" class="depart" readonly=""><br/>
          <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
          <button type="submit">Book ride</button>
        </form>
       </div>
   </div>

   <div class="rides">
    <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
    <div class="sec-contain">
      <h4>Lafia Nasarawa -- Belema Rivers</h4>
      <h5><span>N</span><?php echo $row["Lafia Nasarawa - Belema Rivers"]; ?></h5>

      <form action="./booked_message.php" method="post">
        <section class="travel-infor">
          <input type="text" name="location" value="Lafia Nasarawa">
          <input type="text" name="destination" value="Belema Rivers">
          <input type="number" name="price" value="<?php echo $row["Lafia Nasarawa - Belema Rivers"]; ?>">
        </section> <br/>

        <h4 class="departure">Departure:</h4>
        <input type="text" name="departure" value="2nd. Oct. 2023 | 9.00 am" class="depart" readonly=""><br/>
        <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
        <button type="submit">Book ride</button>
      </form>
     </div>
 </div>

 <div class="rides">
  <img src="./images/service-icon-01.png" alt="icon" loading="lazy"/><br/>
  <div class="sec-contain">
    <h4>Kaba Abuja -- Suleja Niger</h4>
    <h5><span>N</span><?php echo $row["Kaba Abuja - Suleja Niger"]; ?></h5>

    <form action="./booked_message.php" method="post">
      <section class="travel-infor">
        <input type="text" name="location" value="Kaba Abuja">
        <input type="text" name="destination" value="Suleja Niger">
        <input type="number" name="price" value="<?php echo $row["Kaba Abuja - Suleja Niger"]; ?>">
      </section> <br/>

      <h4 class="departure">Departure:</h4>
        <input type="text" name="departure" value="24th. Dec. 2023 | 8.00 am" class="depart" readonly=""><br/>
      <input type="number" name="seatings" placeholder="Seatings" required=""><br/>
      <button type="submit">Book ride</button>
    </form>
   </div>
  </div>
 </section>
</main>


<!--footer section starts here-->
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


  <noscript>Your browser don't support JavaScript!</noscript>
  <script src="./scripts/start_booking.js"></script>
</body>
</html>
