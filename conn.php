<?php

#references
$servername = "localhost";
$username = "root";
$password = "";
$database = "goo_db";

#connection to database server
$conn = new mysqli($servername, $username, $password, $database);

#checking connection
if ($conn->connect_error) {
   # code...
   die("CONNECTION ERROR: " .$conn->connect_error);
}

?>