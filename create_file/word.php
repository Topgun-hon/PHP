<?php

require 'vendor/autoload.php';

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

$phpword = new PhpWord();

$section = $phpword->addSection();

$section->addText('Student Report');
$section->addText('Name: Honore');
$section->addText('Age: 18');
$section->addText('Home: Kayonza');

$writer = IOFactory::createWriter($phpword, 'Word2007');
$writer->save('Student_report.docx');

echo "Word file created successfully!";

?>