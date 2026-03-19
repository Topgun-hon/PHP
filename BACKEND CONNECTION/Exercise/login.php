<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin@123'){
        session_start();

        $_SESSION['username'] = $username;

        header('location: homepage.html');
    }else{
        echo '<script>alert("Invalid username or password.")</script>';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login form</h2>
    <form method="POST">
        <fieldset>
            <legend>User information</legend>

            <label for="username">Username</label><br>
            <input type="text" name="username" id="username"><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>

