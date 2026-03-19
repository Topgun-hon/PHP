<?php

require 'connection2.php';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $stmt = $connection->prepare("INSERT INTO signedin(username,email,password) VALUES(?,?,?)");
    $stmt->bind_param('sss',$username,$email,$password);
    $stmt->execute();
    $stmt->close();
    $connection->close();

    header("location: login.php");


}
?>
