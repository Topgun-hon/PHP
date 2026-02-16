<?php
$file = fopen('honore.csv', 'w');

$data = [
    ['NAME','AGE','YEAR','SCHOOL'],
    ['Honore', 19 , '2026', 'RCA'],
    ['Eric', 17 , '2026', 'RCA'],
    ['Fablice',12 , '2026','KPS']
];

foreach($data as $data1){
    fputcsv($file,$data1);
}

?>