<?php
$rows = 7; 
$cols = 5; 

echo '<pre>';

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        
        if ($j == 1 || $j == $cols || $i == ceil($rows / 2)) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n"; 
}

echo '</pre>'
?>
