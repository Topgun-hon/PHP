<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border: 3px solid;
            border-collapse: collapse;
            padding: 10px;
            margin: 10px;
            
        }
    </style>
</head>
<body>

<h1>Multiplication table</h1>

<table>
    <?php
    for($i = 1; $i <= 10; $i++){
        echo '<tr>';
        for($j = 1; $j <= 5; $j++){
            echo "<td> $j * $i = ". $j * $i ."  </td>";
            
        }
        echo '</tr>';
    }

    ?>
</table>

    
</body>
</html>