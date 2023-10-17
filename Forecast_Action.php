<?php

if (isset($_GET["city"]) && (!empty($_GET["city"]))) {
   # code...
   $apiData =  file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&APPID=19fd70b18eca99d4396ea521c3ba18f9");

   $weatherArray = json_decode($apiData, true); //converts the JSON object to php value

     // c = k - 273.15
     // convert kelvin to celcius
     $tempCelcius = $weatherArray['main']['temp'] - 273;

   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Goo Weather Forecast</title>
   <link rel="stylesheet" href="./styles/forecast.css">
</head>
<body>
   <header>
      <h2>
         <a href="./forecast.php">🔙</a>  
      </h2>
   </header>
   <section class="wrapper">
      <section class="con">
      <h4>Check forecast with <span>ease</span></h4>
         <br/><br/>

         <form action="./Forecast_Action.php" method="get">
            <input type="search" name="city" placeholder="Enter city name ..." required="">
         </form>
         <br/><br/>

         
         <div class="output">
           <span class="img">
            <img src="./images/cloud-unscreen.gif" alt="gif">
            <img src="./images/cloud-unscreen.gif" alt="gif">
            <img src="./images/cloud-unscreen.gif" alt="gif">
           </span>
           <p class="details">
           <?php
             printf($weather = $weatherArray['name']. ", ".$weatherArray['sys']['country']);
           ?>
           </p>
           <p class="climate">
            <?php
            printf(intval($tempCelcius)."&deg;C");
            ?>
           </p>
           <br/>
           <span class="img">
           <img src="./images/cloud-unscreen.gif" alt="gif">
            <img src="./images/cloud-unscreen.gif" alt="gif">
           </span>
           <p class="details">
            Weather Condition:
           </p>
           <p class="climate">
           <?php
            printf($weatherArray['weather']['0']['description']);
            ?>
           </p>
           <br/>
           <span class="img">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           </span>
           <p class="details">
           Atmospheric pressure: 
           </p>
           <p class="climate">
           <?php
           printf($weatherArray['main']['pressure']." hPa");
           ?>
           </p>
           <br/>
           <span class="img">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           </span>
           <p class="details">
            Wind speed: 
           </p>
           <p class="climate">
            <?php
            printf($weatherArray['wind']['speed']. " m/s");
            ?>
           </p>
           <br/>
           <span class="img">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           </span>
           <p class="details">
            Cloudness: 
           </p>
           <p class="climate">
           <?php
            echo($weatherArray['clouds']['all']. " %");
            ?>
           </p>
           </p>
           <br/>
           <span class="img">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           <img src="./images/cloud-unscreen.gif" alt="gif">
           </span>
           <p class="details">
            Sunrise: 
           </p>
           <p class="climate">
            <?php
             $sunrise = $weatherArray['sys']['sunrise'];
             echo(date("g:i a", $sunrise));
            ?>
           </p>
         </div>
      </section>
   </section>
</body>
</html>