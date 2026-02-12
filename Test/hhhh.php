<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Area fo rectangle</title>
</head>

<body>
    


<form method="post">

<div><label >Length:</label>
<input type="number" name="length" placeholder="Enter length" required></div>

<div><label >Width:</label>
<input type="number" name="width" placeholder="Enter width" required></div>

<div><input type="submit" name="submit" placeholder="Calculate"></div>

</form>

<?php
if(isset($_POST['submit'])){

    $length= $_POST['length'];
    $width= $_POST['width'];

    $area= $length * $width;

    echo "The area of the rectangle is:" . $area;

}
?>
</body>
</html>