<?php
# autoload.php is a file that enables you to use all Spreadsheet classes

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;  // Capital X in Xlsx is important

$spreadsheet = new Spreadsheet();  // Corrected variable name

$sheet = $spreadsheet->getActiveSheet(); // Added missing semicolon

// Set column headers
$sheet->setCellValue('A1', 'Student Name');
$sheet->setCellValue('B1', 'Marks');
$sheet->setCellValue('C1', 'Email');

// Set data for first student
$sheet->setCellValue('A2', 'Honore');
$sheet->setCellValue('B2', '90');
$sheet->setCellValue('C2', 'honore@gmail.com');

// Create the writer object
$writer = new Xlsx($spreadsheet);  // Capital X in Xlsx
$writer->save('students.xlsx');    // Fixed syntax ($writer->save, not $write.save)

echo "Excel file created successfully!";
?>
