<?php

$servername = "localhost";
$username = "root";
$password = "ndayiregis@75";
$db = "smartboystore";

$con = mysqli_connect($servername, $username, $password, $db);

if(!$con){
   die("Connection failed: "  .mysqli_connect_error());
}

 ?>
