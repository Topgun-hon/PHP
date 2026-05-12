<?php

$host = 'localhost';
$username = 'honore';
$db_name = 'todo';
$password = 'topgun';

$connection = new mysqli($host, $username, $password, $db_name);

if (!$connection) {
    exit('Connection failed' . mysqli_connect_error());
}

echo 'Connected successful';

?>