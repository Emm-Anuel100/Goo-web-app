<?php
require_once "../conn.php";

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
    <title>GOO | Admin update price page</title>
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
      <h4>update price</h4>
      <br/>
         <a href="./my_admin_activities.php">🔙 back</a>
         <br/><br/>
         <pre>N.B actions performed here are strict and can not be reversed.</pre>
         <br/><br/>

         <section class="wrapper">
            <div class="sec1">
               <pre>Garriki Enugu -- Lugbe Abuja</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Garriki Enugu - Lugbe Abuja"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Garriki Enugu -- Lugbe Abuja.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                    <fieldset>
                    <input type="submit" value="update">
                    </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>Nike Enugu -- Aba Abia</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Nike Enugu - Aba Abia"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Nike Enugu -- Aba Abia.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                     <fieldset>
                      <input type="submit" value="update">
                     </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>Arochukwu Imo -- Sapelle Delta</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Arochukwu Imo - Sapelle Delta"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Arochukwu Imo -- Sapelle Delta.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                     <fieldset>
                     <input type="submit" value="update">
                     </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>Awka Anambra -- Suleja Niger</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Awka Anambra - Suleja Niger"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Awka Anambra -- Suleja Niger.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                     <fieldset>
                     <input type="submit" value="update">
                     </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>Lekki Lagos -- Osogbo Osun</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Lekki Lagos - Osogbo Osun"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Lekki Lagos -- Osogbo Osun.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                    <fieldset>
                    <input type="submit" value="update">
                    </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>Adamawa Yola -- Kano Kano</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Adamawa Yola - Kano Kano"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Adamawa Yola -- Kano Kano.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                     <fieldset>
                     <input type="submit" value="update">
                     </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>Garriki Enugu -- Owerri Imo</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Garriki Enugu - Owerri Imo"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Garriki Enugu -- Owerri Imo.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                     <fieldset>
                     <input type="submit" value="update">
                     </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>ninth-mile Enugu -- Wuye Abuja</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["ninth-mile Enugu - Wuye Abuja"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0ninth-mile Enugu -- Wuye Abuja.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                     <fieldset>
                     <input type="submit" value="update">
                     </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>Mbyama Rivers -- Ajah Lagos</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Mbyama Rivers - Ajah Lagos"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Mbyama Rivers -- Ajah Lagos.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                     <fieldset>
                     <input type="submit" value="update">
                     </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>Aloma Kogi -- Jos Plateau</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Aloma Kogi - Jos Plateau"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Aloma Kogi -- Jos Plateau.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                     <fieldset>
                     <input type="submit" value="update">
                     </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>Lafia Nasarawa -- Belema Rivers</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Lafia Nasarawa - Belema Rivers"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Lafia Nasarawa -- Belema Rivers.php" method="post">
                     <fieldset>
                     <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                     </fieldset>
                     <br/>
                     <fieldset>
                     <input type="submit" value="update">
                     </fieldset>
                  </form>
            </div>

            <div class="sec1">
               <pre>Kaba Abuja -- Suleja Niger</pre>
               <br/>
               <h4>current price: 
                  <samp>
                     <span>N</span><?php echo $row["Kaba Abuja - Suleja Niger"]; ?>
                  </samp>
               </h4><br/>
                  <form action="./0Kaba Abuja -- Suleja Niger.php" method="post">
                    <fieldset>
                    <input type="number" name="amount" required="" placeholder="Amount In Naira ...">
                    </fieldset>
                     <br/>
                    <fieldset>
                    <input type="submit" value="update">
                    </fieldset>
                  </form>
            </div>
         </section>
   </main>


<noscript>Pls you need to enable javascript to run this page!</noscript>
</body>

<script src="../scripts/scroll.js"></script>
<style>
section.wrapper{
   margin-top: 3rem;
   display: grid;
   grid-template-columns: repeat(3,1fr);
   gap: 3rem;
}
section.wrapper pre{
   font-size: 17px;
}
section.wrapper h4{
   font-size: 15px;
   color: rgb(141, 143, 143);
}
section.wrapper h4 span{
   text-decoration: line-through;
}
input[type="number"]{
   padding: 13px 2.5%;
   width: 18rem;
   font-size: 15px;
   color: rgb(141, 143, 143);
   background: transparent;
   border: 1px solid rgb(102, 180, 248);
   border-radius: .2rem;
}
::placeholder{
   font-size: 15px;
   color: rgb(141, 143, 143);
}
input[type="submit"]{
   padding: 10px 8%;
   border-radius: .2rem;
   background: rgb(102, 180, 248);
   font-size: 14px;
   font-weight: 300;
   cursor: pointer;
}
input[type="submit"]:hover{
   transform: translateY(-3px);
   transition: all ease-out .2s;
   box-shadow: 1px 1px 1rem rgb(102, 180, 248);
}
</style>

</html>

