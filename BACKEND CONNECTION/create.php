<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO users(fname,lname,email,password,gender) VALUES('$firstname','$lastname','$email','$password','$gender')";

    $result = $conn->query($sql);

    if($result == true){
        echo 'New record inserted successfully!';
    }else{
        echo 'Error:'.$sql.'<br>'.$conn->error;
    }

    $conn->close();
}
?>

<html>
    <a class="btn btn-info" href="signup.html"><br><br>Back >
</html>