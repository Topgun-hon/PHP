<html>
<head>    
    <title>Document</title>
</head>
<body>
    <form method= "GET">
    <label for="test">Enter the name</label>
    <input type="text" name="test" id="test">
    <input type="submit" value= "submit">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_REQUEST['test'];
    echo "Your name is: $name "; 
    }

    ?>
</body>
</html>