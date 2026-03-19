<?php

$servername = "localhost";
$username = "honore";
$password = "topgun";
$dbname = "exercise"; 

$connection = new mysqli($servername, $username, $password, $dbname);

if(!$connection){
    exit("Failed to connect to database".mysqli_connect_error());
}
//echo " ✔️ Connected successfully!"
?>