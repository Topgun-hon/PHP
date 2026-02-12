<?php

$file = fopen('test.txt', 'r');
$line = fgets($file);

echo $line;

?>