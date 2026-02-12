<?php
$First_name = $_POST['firstname'];
$Last_name = $_POST['lastname'];
$email = $_POST['email'];
$bpassword = $_POST['password'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['dateofbirth'];
$host = "localhost";
$db_name = "host";
$db_username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$db_name";

try {
    $databaseConnection = new PDO($dsn, $db_username, $password);
    $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO facebook (first_name,last_name,email,bpassword,date_of_birth, gender) VALUE(?,?,?,?,?,?)";

    $statement = $databaseConnection->prepare($sql);
    $statement->execute([$First_name,$Last_name,$email,$bpassword,$date_of_birth,$gender]);
    
    header("location: success.html");
    exit;
}
catch(PDOException $error) {
    echo $error->getMessage(); 
}
?>
 