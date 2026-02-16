<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1px'; cellspacing="0px"; >
        <?php

            for($i=1; $i<=10; $i++){
                echo '<tr>';
                for($j=1; $j<=10; $j++){
                    echo "<td>".$i * $j."</td>";
                }
                echo '</tr>';
            }

        ?>
    </table>
</body>
</html>