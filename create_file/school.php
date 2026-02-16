<?php

require 'vendor/autoload.php';

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

$wordDoc = new PhpWord();
$section = $wordDoc->addSection(); 

$section->addText("Document title", ['bold' => true, 'size' => 17]);
$section->addText('This is a php word document');

$writer = IOFactory::createWriter($wordDoc, 'Word2007');
$writer->save('topgun.docx');
echo "Word document created!";
?>