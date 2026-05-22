<?php

include '../config/db.php';

header('content-Type: application/json');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
    $sql = 'INSERT INTO users(name, email, gender, password) VALUES(:name, :email, :gender, :password)';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':gender' => $gender,
        ':password' => $hashed_password
    ]);
    // $stmt->execute([
    //     ':name' => $name,
    //     ':email' => $email,
    //     ':gender' => $gender,
    //     ':password' => $hashed_password
    // ]);
    echo json_encode([
        'success' => true,
        'message' => 'User registered successfully'
    ]);
} catch (PDOException $error) {
    echo json_encode([
        'success' => false,
        'message' => $error->getMessage()
    ]);
}

?>