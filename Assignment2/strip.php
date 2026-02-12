<?php

$file = fopen('test.txt', 'r');
$line = strip_tags(fgets($file));
echo $line;
?>