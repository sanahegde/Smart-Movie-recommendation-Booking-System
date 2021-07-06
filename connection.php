<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname ="savoyonline";


// Create connection
$conn =  mysqli_connect("localhost", "root", "","savoyonline","3306");

// Check connection
if(!$conn ) {
    die('Could not connect: ' . mysqli_error());
    
 }