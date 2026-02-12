<?php 

    echo "Hello world!";

    $file = fopen("test.txt", "r");

    if(file_exists("test.txt")){
        echo "The file exisits";
        echo "<br>";
    }
    else{
        echo "The file doesn't exist";
    }

    if(is_file("test.txt")){
        echo "This is a file";
    }else{
        echo "This is not a file";
    }

    $file = fopen("test.txt", "a");
    
    fwrite($file, "\nThis line was added");
    echo "<br>";
    echo file_get_contents("test.txt");

    echo "<br>";

    

?>