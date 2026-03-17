<?php

$servername = 'localhost';
$username = 'honore';
$password = 'topgun';
$dbname = 'year1C';

$connection = new mysqli($servername, $username, $password, $dbname);

if(!$connection){
    exit("Connection Error".mysqli_connect_error());
}

echo 'Connected succesfully!'

?>