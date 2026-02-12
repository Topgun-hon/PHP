<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table,tr,td{
            border: 1.5px solid green;
            border-collapse: collapse;
            padding: 10px;
            margin: 10px;
            align-items: left; 
            color: orange;  
        }
    </style>
</head>
<body>
    <h1>Multiplication Table</h1>
<table>
<?php

for($i=1; $i<=12; $i++){
    echo "<tr>";
    for($j=1; $j<=10; $j++){
        echo "<td> $i * $j = ".$i * $j."</td>";
    }
    echo "</tr>";
}



?>
</table>
</body>
</html>

