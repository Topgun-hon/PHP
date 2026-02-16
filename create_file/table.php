<?php

require 'vendor/autoload.php';
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

$word = new PhpWord();

$section = $word->addSection();

$section->addText("Student List", ['bold'=>true, 'size'=> 17]);

$table = $section->addTable();

$table->addImage();

$table->addRow();
$table->addCell(2000)->addText("Name");
$table->addCell(2000)->addText("Age");
$table->addCell(2000)->addText("Grade");

$table->addRow();
$table->addCell(2000)->addText("John");
$table->addCell(2000)->addText("18");
$table->addCell(2000)->addText("A");

$table->addRow();
$table->addCell(2000)->addText("Honore");
$table->addCell(2000)->addText("15");
$table->addCell(2000)->addText("B");

$table->addRow();
$table->addCell(2000)->addText("Mary");
$table->addCell(2000)->addText("17");
$table->addCell(2000)->addText("B");

$writer = IOFactory::createWriter($word,'Word2007');
$writer->save('Students_list.docx');

echo 'The table created';

?>