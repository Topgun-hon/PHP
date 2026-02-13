<?php

$file = fopen('test.txt', 'r');

$line = fgets($file);
$clear = strip_tags($line);

echo $clear;


