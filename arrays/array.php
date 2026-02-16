<?php

$array = [1, 2, 3, 4, 5, 'one', 'two', 'three', 'four', 'five'];

foreach($array as $element){
    echo "This : $element";
    echo '<br>';
}

$i = 0;

for($i ; $i<count($array); $i++){
    echo "array[$i]: $array[$i]";
    echo "<br>";
}
var_dump($array);
echo '<br>';
print_r($array)

?>