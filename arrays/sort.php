<?php

$array = [
    'name' => 'eric',
    'home' => 'Kigali',
    'school' => 'RCA'
];

ksort($array);
print_r($array);

echo '<br>';

krsort($array);
print_r($array);

echo '<br>';

$numbers = [4,2,8,1,4,9];

sort($numbers);
print_r($numbers);

echo '<br>';

rsort($numbers);
print_r($numbers);

echo '<br>';

$assos = array(
    'gradea' => 65,
    'gradeb' => 30,
    'gradec' => 45
);

asort($assos);
print_r($assos);

echo '<br>';

arsort($assos);
print_r($assos);

echo '<br>';


?>