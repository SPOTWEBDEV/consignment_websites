<?php
session_start();
define("HOST","localhost");
define("USER","minance_acestackhub");
define("PASSWORD","minance_acestackhub");
define("DATABASE","minance_acestackhub");

$connection = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

if(!$connection){


  die('Connection Error');

}


$domain = "http://localhost/consignment_websites/";




?>