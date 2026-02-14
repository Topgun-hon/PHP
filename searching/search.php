<?php

$keyword = 'strpos()';
if(file_exists('search.txt')){
    $file_contents = file_get_contents('search.txt');

    if(strpos($file_contents,$keyword) !== false){
        echo 'The keyword found';
    }
    else{
        echo "The keyword not found";
    }
}

?>