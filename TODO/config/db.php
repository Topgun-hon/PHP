<?php

$host = 'localhost';
$dbname = 'todo';
$username = 'honore';
$password = 'topgun';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
} catch (PDOException $e) {
    die(json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]));
}

?>