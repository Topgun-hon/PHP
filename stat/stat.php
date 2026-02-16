<?php

$info = stat('stat.txt');
print_r($info);

mkdir('new_one');
rmdir('new_one');
?>