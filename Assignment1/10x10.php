<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
    <style>
        table, tr, td{
            border: 4px solid;
            border-collapse: collapse;
            padding: 12px;
            margin: 12px;
            font-weight: 700;
            font-size: 30px
        }
        
    </style>

</head>
<body>
    <h1>10 X 10 Table</h1>

    <table>
        <?php
        for($cols = 1; $cols <= 10; $cols++){
            echo '<tr>';
            for($row = 1; $row <= 10; $row++){
                echo '<td>'.($cols * $row).'</td>';
            }
            echo '</tr>';
        }
        ?>

    </table>
    
</body>
</html>