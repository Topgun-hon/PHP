<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $honore = "Top gun";

    function top(){
       global $honore;
        echo $honore;
        echo "<br>";
        echo $_SERVER["SCRIPT_FILENAME"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
    }
    top();
    ?>
</body>
</html>