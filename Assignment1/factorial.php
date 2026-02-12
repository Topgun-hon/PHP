<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="POST">
    <label for="number">Enter a number: </label>
    <input type="number" name="number" step="any" id="number">
    <button type="Submit">Calculate</button><br>
</form>

<?php

if($_SERVER ['REQUEST_METHOD'] === 'POST'){

    $number = $_POST["number"];
    $factorial = 1;

    for($num = 1; $num<= $number; $num++ ){
    $factorial *= $num;

    
}
echo '<br>';
echo "The factorial of $number is $factorial";

}






?>
</body>
</html>