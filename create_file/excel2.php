<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Name');
$sheet->setCellValue('B1', 'Age');
$sheet->setCellValue('C1', 'School');

$sheet->setCellValue('A2', 'Honore');
$sheet->setCellValue('B2', '18');
$sheet->setCellValue('C2', 'RCA');

$sheet->setCellValue('A3', 'Eric');
$sheet->setCellValue('B3', '18');
$sheet->setCellValue('C3', 'RCA');

$writer = new Xlsx($spreadsheet);
$writer->save('another.xlsx');

echo "Conglatulations you have made it";

?>