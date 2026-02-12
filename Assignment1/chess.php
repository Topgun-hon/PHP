<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
    <style>
        table, tr, td{
            border: 3px solid;
            border-collapse: collapse;
            padding: 30px;
            margin: 30px;
        }
        .white{
            background-color : white;
        }
        .black{
            background-color : black;
        }
    </style>

</head>
<body>

    <table>
        <?php
        for($cols = 1; $cols <= 8; $cols++){
            echo '<tr>';
            for($row = 1; $row <= 8; $row++){

                if(($cols + $row) % 2 == 0){
                    echo '<td class = "black"></td>';
                }
                else{
                    echo '<td class = "white" ></td>';
                }

            }
            echo '</tr>';
        }
        ?>

    </table>
    
</body>
</html>