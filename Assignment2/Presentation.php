<?php 

    /* -------- is_file() and file_exists() -------

    1. is_file(): This is a file function that is used to check whether the given path refers to an existing file and not adirectory.
       ==> Returns true if the path exists and is a file.

    2. file_exists(): This is a file function that is used to check whether the given path refers to an existing file or directory.
        ==> Returns true if the path exists (either file or directory).
    
    */

    

    if(is_file("test.txt")){
        echo "It is a file";
    }
    else{
        echo "It is not a file";
    }

    
    
    echo "<br>";

    if(file_exists("test.txt")){
        echo "The file exists";
    }
    else{
        echo "The file doesn't exists";
    }

