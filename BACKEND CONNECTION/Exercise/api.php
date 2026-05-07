<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Database configuration
$host = 'localhost';
$db = 'year1c';
$user = 'honore';
$pass = 'topgun';

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die(json_encode([
        'error' => 'Connection failed: ' . $conn->connect_error
    ]));
}

// Get HTTP request method
$method = $_SERVER['REQUEST_METHOD'];

// Handle request methods
switch ($method) {
    // GET REQUEST
    case 'GET':
        // Get single user
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $result = $conn->query(
                "SELECT * FROM users WHERE id = $id"
            );

            $user = $result->fetch_assoc();

            echo json_encode($user);
        } else {
            // Get all users
            $result = $conn->query('SELECT * FROM users');

            $users = [];

            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }

            echo json_encode($users);
        }

        break;

    // =========================
    // POST REQUEST
    // =========================
    case 'POST':
        // Read JSON input
        $data = json_decode(
            file_get_contents('php://input'),
            true
        );

        // Escape user inputs
        $name = $conn->real_escape_string($data['name']);
        $email = $conn->real_escape_string($data['email']);

        // Insert new user
        $conn->query(
            "INSERT INTO users (name, email)
             VALUES ('$name', '$email')"
        );

        echo json_encode([
            'message' => 'User created'
        ]);

        break;

    // PUT REQUEST

    case 'PUT':
        // Read JSON input
        $data = json_decode(
            file_get_contents('php://input'),
            true
        );

        $id = $data['id'];
        $name = $conn->real_escape_string($data['name']);
        $email = $conn->real_escape_string($data['email']);

        // Update user
        $conn->query(
            "UPDATE users
             SET name='$name',
                 email='$email'
             WHERE id=$id"
        );

        echo json_encode([
            'message' => 'User updated'
        ]);

        break;

    // DELETE REQUEST

    case 'DELETE':
        $id = $_GET['id'];

        // Delete user
        $conn->query(
            "DELETE FROM users WHERE id=$id"
        );

        echo json_encode([
            'message' => 'User deleted'
        ]);

        break;

    // INVALID METHOD

    default:
        echo json_encode([
            'error' => 'Invalid request method'
        ]);

        break;
}

// Close database connection
$conn->close();

?>