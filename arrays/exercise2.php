<?php

function findAverage($numbers){

    $i = 0;
    $sum = 0;

    while($i < count($numbers)){
        $sum += $numbers[$i];
        $i++;
    }

    $average = $sum / count($numbers);

    return $average;
}

$array = array(1,2,3,4,5,6);
$average = findAverage($array);

echo $average

?>