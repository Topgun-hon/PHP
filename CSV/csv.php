<?php

$file_name = 'students.csv';

$file = fopen($file_name,'w');

$header = ['product', 'price', 'Quantity'];
fputcsv($file,$header);

$products = [
    ["Laptop", 800, 5],
    ["Mouse", 20, 50],
    ["Keyboard", 45, 30]
];

foreach($products as $product){
    fputcsv($file,$product);
}

fclose($file);
echo "CSV file created from array!";
?>