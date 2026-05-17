<?php

include '../config/db.php';
header('content-Type: application/json');
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

try {
} catch (\Throwable $th) {
    // throw $th;
}
?>