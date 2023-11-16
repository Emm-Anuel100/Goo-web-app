<?php

require_once("../conn.php");

if (!empty($_POST["amount"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
   # code...
$updated_price = $_POST["amount"];

$query = "UPDATE `available_rides` SET `Garriki Enugu - Lugbe Abuja` = '$updated_price' WHERE `id` = 1 ";

$result = mysqli_query($conn, $query);
if (!$result) {
   # code...
   ?>
   <script>
      alert("ERROR UPDATING PRICE");
   </script>
   <?php
}else {
   # code...
   ?>
   <script>
      alert("PRICE UPDATED SUCCESSFULLY");
      window.location.pathname = "Goo/Admin/update_price.php";
   </script>
   <?php
}

}

?>