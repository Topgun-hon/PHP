<?php
$array = ["honore","Justin","Eric","Cyusa"];

foreach($array as $element){
    echo $element;
    echo "<br>";
} 
echo "<br>";

$data = [
    "name" => "Honore",
    "age" => "18",
    "school" => "RCA",
    "Home" => "Kayonza",
    "Gender" => "male"
];

foreach($data as $element => $item){
    echo $element. ":" .$item."<br>";
}


?>