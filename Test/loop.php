<?php
$z = 12;

for($i=1; $i<=$z; $i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "<br>";
}

for($i=$z; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
     echo "<br>";
}

?>