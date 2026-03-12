<?php

$servername = 'localhost';
$username = 'honore';
$password = 'topgun';
$dbname = 'year1c';

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    exit('Connection Failed: '.mysqli_connect_error());
}

echo 'Connected Successfully';
//mysqli_close($conn);

?>