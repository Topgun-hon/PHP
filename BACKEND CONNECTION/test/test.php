<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
}

//$query1 = "INSERT INTO test(name,email,password)VALUES('$name','$email', '$password')";

$fetch = "SELECT * FROM test";

$result = $connection->query($fetch);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
</tr>";


if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "</tr>";
    }
}

echo "</table>";

$connection->close()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="test.html">Back <</a>
</body>
</html>