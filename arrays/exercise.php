<?php

$numbers = [1,2,3,5,6];

$sum = 0;
foreach($numbers as $num){
    $sum += $num;
}
$average = $sum / count($numbers);

echo "The average of elements is: $average";

?>